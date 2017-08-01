<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
//use App\Product;
use App\User;
use Cookie;
use Illuminate\Cookie\CookieJar;

class APIController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->flush();
		Auth::logout();
		Cookie::queue(Cookie::forget('emailid'));

        return response(array(
                'status' => false,
                'message' =>'Logout successfully',
               ),200);     
    }
    public function store(Request $request)
    {
        //Product::create($request->all());
        return response(array(
                'error' => false,
                'message' =>'Product created successfully',
               ),200);
    }
    public function show(Request $request)
    {
        // $request->session()->flush();
		Auth::logout();
		Cookie::queue(Cookie::forget('emailid'));

        return response(array(
                'status' => false,
                'message' =>'Logout successfully',
               ),200);
    } 
    public function update(Request $request, $id)
    {
       // Product::find($id)->update($request->all());
        return response(array(
                'error' => false,
                'message' =>'Product updated successfully',
               ),200);
    }
    public function destroy($id)
    {
       // Product::find($id)->delete();
        return response(array(
                'error' => false,
                'message' =>'Product deleted successfully',
               ),200);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
		Auth::logout();
		Cookie::queue(Cookie::forget('emailid'));

        return response(array(
                'status' => false,
                'message' =>'Logout successfully',
               ),200);
    }
}
?>