<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Site;
use App\Page;
use App\Frame;
use App\Setting;
use App\Commonsetting;
use App\Payment;
use App\Site_check_report;
use App\Web_common_info;

use App\Website;
use DateTime;
use Session;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\Datatables\Facades\Datatables;
class ReportController extends Controller
{
   public function getUsereportsHome(Request $request)
	{
		//dd($request->all());

	$data=array();
	$data['page'] = 'Reports Home';
	if (Auth::user()->type != 'admin')
		{
			$data['sites'] = Website::where('user_id', Auth::user()->id)->where('site_trashed', 0)->orderBy('id', 'asc')->get()->toArray();
		}
		else
		{
			$data['sites'] = Website::where('site_trashed', 0)->orderBy('id', 'asc')->get()->toArray();
		}
	$data['builder'] = false;
	$data['site_info'] = Site_check_report::where('id', $request->get('sitename'))->get();

	return view('usereport.home', $data);
	}

public function getUserShowreports(Request $request)
	{

	$data=array();
	//$cstep=$request->get('step');
	//dd($cstep);
	$data['builder'] = false;
	$data['page'] = 'Reports Tools';
	$data['sess'] = $request->session()->all();
	$doit = Commonsetting::where('name', 'doit_init_cost')->first();
	$data['doit_cost']=$doit->value;
	$scost = Commonsetting::where('name', 'need_setup_costs')->first();
	$data['setup_cost']=$scost->value;
	//$data['site_report'] = Site_check_report::where('id', 3)->get();
	
		if (Auth::user()->type != 'admin')
		{
			$data['sites'] = Website::where('user_id', Auth::user()->id)->where('site_trashed', 0)->orderBy('id', 'asc')->get()->toArray();
		}
		else
		{
			$data['sites'] = Website::where('user_id', Auth::user()->id)->where('site_trashed', 0)->orderBy('id', 'asc')->get()->toArray();
		}
	return view('usereport.sitereports',$data);
	}	
public function postUserShowreports(Request $request)
	{
		//dd($request->all());
	$data=array();
	$data['page'] = 'Reports Home';
	/* Site lists */
	if (Auth::user()->type != 'admin')
		{
			$data['sites'] = Website::where('user_id', Auth::user()->id)->where('site_trashed', 0)->orderBy('id', 'asc')->get()->toArray();
		}
		else
		{
			$data['sites'] = Website::where('user_id', Auth::user()->id)->where('site_trashed', 0)->orderBy('id', 'asc')->get()->toArray();
		}
	/* Sitedoctor reports */	
	$data['site_info'] = Site_check_report::where('id', $request->get('sitename'))->get();
 	if(isset($data["site_info"][0])) $page_title= strtolower($data["site_info"][0]["domain_name"]);
       else exit();

       $data["page_title"]=str_replace(array("www.","http://","https://"), "", $page_title);
    /* Sitespy reports */
    $data['domain_info'] = Web_common_info::where('id', $request->get('sitename'))->get();  

	/* Website Review reports */
    $data['_info'] = Web_common_info::where('id', $request->get('sitename'))->get(); 

	return view('usereport.home', $data);
	}		

}

