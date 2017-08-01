<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;
use App\User;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Session;
use Mail;
use Cookie;
use Illuminate\Cookie\CookieJar;
use Exception;
 

class SocialAuthController extends Controller
{

    protected $redirectTo = '/';

    public function __construct()
    {
       // $this->middleware('guest', ['except' => 'logout']);
    }
	use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['name'],
            'email' => $data['email'],
            'type' => 'user',
            'password' => md5('password'),
        ]);
    }

    public function redirectToFacebook()
    {
    	//echo "R"; exit;
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(CookieJar $cookieJar)
    {
    	//echo 'sfun'; exit;
        try {
            $user = Socialite::driver('facebook')->user();
            $create['first_name'] = $user->name;
            $create['email'] = $user->email;
            $create['password'] = md5('password');
            $create['type'] = 'user';
            $create['provider'] = 'facebook';
            $create['provider_id'] = $user->id;
             $create['remember_token'] = Session::token();
             $create['active'] = '1';
            //print_r($user['email']); exit;
             $userif = User::where('email', '=', $user['email'])->first();;
             //print_r($userif); exit;
             if ($userif === null)
            {
            $userModel = new User;
            $cookieJar->queue(cookie('emailid', $user->email, 45000));
            $createdUser = $userModel->addNew($create);
            Auth::loginUsingId($createdUser->id);
            //echo $createdUser; exit;
           // return redirect()->route('userwebsite');
           // echo $createdUser->id. 'binside'; exit;
            if (Auth::attempt(['email' => $user->email, 'password' => 'password', 'active' => 1]))
			{
				$userin = User::where('id', $createdUser->id)->first();

				Session::set('name', $userin->first_name);
            	Session::set('email', $userin->email);
            	Session::set('type', 'user');
            	Session::set('active', '1');
            	
				return redirect()->route('userwebsite');
				
			}
            }
            else
            {
            $userModel = new User;
            $cookieJar->queue(cookie('emailid', $user->email, 45000));
            $createdUser = $userModel->addNew($create);
            Auth::loginUsingId($createdUser->id);
            //echo $createdUser; exit;
           // return redirect()->route('userwebsite');
           // echo $createdUser->id. 'binside'; exit;
            if (Auth::attempt(['email' => $user->email, 'password' => 'password', 'active' => 1]))
            {
                $userin = User::where('id', $createdUser->id)->first();

                Session::set('name', $userin->first_name);
                Session::set('email', $userin->email);
                Session::set('type', 'user');
                Session::set('active', '1');
                
                return redirect()->route('userdashboard');
                
            } 
            }
        } catch (Exception $e) {
            return redirect('/facebook');
        }
    }


}