<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Commonsetting;
use App\Site;
use App\Payment;
use App\Page;
use App\Frame;
use App\Siteform;
use File;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssetController extends Controller
{
	/**
	 * List all image from image directory
	 */
	public function getAsset()
	{
		//Get Admin Images
		$adminImages = array();
		//get image file array
		$images_dir = Setting::where('name', 'images_dir')->first();
		$folderContentAdmin = File::files($images_dir->value);
		//dd($images_dir); exit;
		//check the allowed file extension and make the allowed file array
		$allowedExt = Setting::where('name', 'images_allowedExtensions')->first();
		$temp = explode('|', $allowedExt->value);
		foreach ($folderContentAdmin as $key => $item)
		{
			if( ! is_array($item))
			{
    			//check the file extension
				$ext = pathinfo($item, PATHINFO_EXTENSION);
    			//prep allowed extensions array
				if (in_array($ext, $temp))
				{
					array_push($adminImages, $item);
				}
			}
		}

		//Get User Images
		$userImages = array();
		$userID = Auth::user()->id;
		$images_uploadDir = Setting::where('name', 'images_uploadDir')->first();
		if (is_dir( $images_uploadDir->value . "/" .$userID ))
		{
			$folderContentUser = File::files($images_uploadDir->value . "/" .$userID );
			if ($folderContentUser)
			{
				foreach ($folderContentUser as $key => $item)
				{
					if ( ! is_array($item))
					{
    					//check the file extension
						$ext = pathinfo($item, PATHINFO_EXTENSION);
    					//prep allowed extensions array
    					//$temp = explode("|", $this->config->item('images_allowedExtensions'));
						if (in_array($ext, $temp))
						{
							array_push($userImages, $item);
						}
					}
				}
			}
		}

		//var_dump($folderContent);
		//var_dump($adminImages);

		return view('assets/images', compact('adminImages', 'userImages'));
	}

	/**
	 * Upload image file
	 * @param  Request $request
	 */
	public function uploadImage(Request $request)
	{
		if ($request->hasFile('userFile'))
		{
			//User upload directory
			$userID = Auth::user()->id;
			$images_uploadDir = Setting::where('name', 'images_uploadDir')->first();
			$userFolder = $images_uploadDir->value . '/' . $userID;

			//Check if the file extension is valid
			$allowedExt = Setting::where('name', 'images_allowedExtensions')->first();
			$temp = explode('|', $allowedExt->value);
			$file = $request->file('userFile');
			$ext = File::extension($file->getClientOriginalName());

			if (in_array($ext, $temp))
			{
				if ($file->move($userFolder, $file->getClientOriginalName()))
				{
					$request->session()->flash('success', 'Successfully image uploaded!');
				}
				else
				{
					$request->session()->flash('error', 'There was an error in upload image!');
				}
			}
			else
			{
				$request->session()->flash('error', 'File extension is not a valid one!');
			}
		}
		return redirect()->route('assets');
	}

	public function imageUploadAjax(Request $request)
	{
		if ($request->hasFile('imageFile'))
		{
			//User upload directory
			$userID = Auth::user()->id;
			$images_uploadDir = Setting::where('name', 'images_uploadDir')->first();
			$userFolder = $images_uploadDir->value . '/' . $userID;

			//Check if the file extension is valid
			$allowedExt = Setting::where('name', 'images_allowedExtensions')->first();
			$tempExt = explode('|', $allowedExt->value);
			$file = $request->file('imageFile');
			$ext = File::extension($file->getClientOriginalName());

			if (in_array($ext, $tempExt))
			{
				if ($file->move($userFolder, $file->getClientOriginalName()))
				{
					$return = array();
					$temp = array();
					$temp['header'] = 'All set!';
					$temp['content'] = 'Your image was uploaded successfully and can now be found under the \'My Images\' tab.';
					//include the partials "myimages" with all the uploaded images
					$userFolderContent = directory_map($userFolder, 2);
					if ($userFolderContent)
					{
						$userImages = array();
						foreach ($userFolderContent as $userKey => $userItem)
						{
							if ( ! is_array($userItem))
							{
								// Check the file extension
								$ext = pathinfo($userItem, PATHINFO_EXTENSION);
								// Prepared allowed extensions file array
								if (in_array($ext, $tempExt))
								{
									array_push($userImages, $userItem);
								}
							}
						}
					}
					if (isset($userImages))
					{
						$elementsDir = Setting::where('name', 'elements_dir')->first();
						$uploadDir = Setting::where('name', 'images_uploadDir')->first();
						$userSrc = url('/') . '/' . $userFolder;
						$dataURL = str_replace($elementsDir->value . '/', '', $uploadDir->value);
						$myImages = View('partials.myimages', array('userImages' => $userImages, 'userSrc' => $userSrc, 'dataURL' => $dataURL));
						$return['myImages'] = $myImages->render();
					}
					$return['responseCode'] = 1;
					$view = View('partials.success', array('data' => $temp));
					$return['responseHTML'] = $view->render();
					die(json_encode($return));
				}
				else
				{
					$temp = array();
					$temp['header'] = 'Ouch! Something went wrong:';
					$temp['content'] = 'Something went wrong when trying to upload your image.';
					$return = array();
					$return['responseCode'] = 0;
					$view = View('partials.error', array('data' => $temp));
					$return['responseHTML'] = $view->render();
					die(json_encode($return));
				}
			}
			else
			{
				$temp = array();
				$temp['header'] = 'Ouch! Something went wrong:';
				$temp['content'] = 'Something went wrong when trying to upload your image.';
				$return = array();
				$return['responseCode'] = 0;
				$view = View('partials.error', array('data' => $temp));
				$return['responseHTML'] = $view->render();
				die(json_encode($return));
			}
		}
		
	}

	/**
	 * Delete image file of user with ajax request
	 */
	public function delImage()
	{
		//echo "Rts"; exit;
		if (isset($_POST['file']) && $_POST['file'] != '')
		{
			$userID = Auth::user()->id;
			//disect the URL
			$temp = explode("/", $_POST['file']);
			$fileName = array_pop( $temp );
			$userDirID = array_pop( $temp );
			//make sure this is the user's images
			if ($userID == $userDirID)
			{
				//print_r($userDirID); exit;
				//all good, remove!
				$images_uploadDir = Setting::where('name', 'images_uploadDir')->first();
				unlink( './'. $images_uploadDir->value . '/' . $userID. '/' . $fileName );
			}
		}
	}
public function getuploadDoitforme(Request $request)
	{
	$data=array();
	$data['builder'] = false;
	$data['page'] = 'Website Form';
	$data['sess'] = $request->session()->all();
	$doit = Commonsetting::where('name', 'doit_init_cost')->first();
	$data['doit_cost']=$doit->value;
	$scost = Commonsetting::where('name', 'need_setup_costs')->first();
	$data['setup_cost']=$scost->value;
	return view('userboard.doitforme_form', $data);
	}

public function uploadDoitforme(Request $request)
	{
			$data = $request->input();

			//dd();
			/*
			$user = new Site();
			$user->user_id = Auth::user()->id;
			$user->site_name = $data['site_name'];
			if(Session::get('whodo')!=""){$user->create_category = Session::get('whodo');}else{$user->create_category  = '';}
			if(Session::get('site_email')!=""){$user->domain_email = Session::get('site_email');}else{$user->domain_email = '';}
			$user->site_trashed = 0;
			$user->save();
			$site_id=$user->id;

			$pge = new Page();
			$pge->site_id = $site_id;
			$pge->name = 'index';
			$pge->save();
			Session::set('site_id', $site_id);
			*/
			//$siteData = Site::where('id', $data['site_category'])->orderBy('id', 'asc')->first();

			$doc = new Siteform();
			$doc->user_id = Auth::user()->id;
			$doc->site_category = $data['site_category'];
			$doc->site_id = $data['site_id'];
			$doc->site_name =$data['site_name'];
			$doc->home_title =$data['home_title'];
			$doc->home_text =$data['home_text'];
			$doc->products_title =$data['products_title'];
			$doc->contact_address =$data['contact_address'];
			$doc->google_map =$data['google_map'];
			//$doc->home_title =$data['home_title'];
			//$doc->home_title =$data['home_title'];

			$doc->save();
			$doc_id=$doc->id;

		if ($request->hasFile('sliderFile'))
		{
			//User upload directory
			$userID = Auth::user()->id;
			$images_uploadDir = Commonsetting::where('name', 'docs_uploadDir')->first();
			$userFolder = $images_uploadDir->value;

			//Check if the file extension is valid
			$allowedExt = Commonsetting::where('name', 'docs_allowedExtensions')->first();
			$temp = explode('|', $allowedExt->value);
			$file = $request->file('sliderFile');
			$ext = File::extension($file->getClientOriginalName());

			if (in_array($ext, $temp))
			{
				if ($file->move($userFolder, $file->getClientOriginalName()))
				{
					//Update document name in DB
					//$updata=array('doc_name' =>$file->getClientOriginalName());
					//Site::where('id', $site_id)->update($updata);
					$updata1=array('sliderFile' =>$file->getClientOriginalName());
					Siteform::where('id', $doc_id)->update($updata1);
					//dd($updata1);
					$request->session()->flash('success', 'Successfully image uploaded!');
				}
				else
				{
					$request->session()->flash('error', 'There was an error in upload image!');
				}
			}
			else
			{
				$request->session()->flash('error', 'File extension is not a valid one!');
			}
		}

		if ($request->hasFile('userFile'))
		{
			//User upload directory
			$userID = Auth::user()->id;
			$images_uploadDir = Commonsetting::where('name', 'docs_uploadDir')->first();
			$userFolder = $images_uploadDir->value;

			//Check if the file extension is valid
			$allowedExt = Commonsetting::where('name', 'docs_allowedExtensions')->first();
			$temp = explode('|', $allowedExt->value);
			$file = $request->file('userFile');
			$ext = File::extension($file->getClientOriginalName());

			if (in_array($ext, $temp))
			{
				if ($file->move($userFolder, $file->getClientOriginalName()))
				{
					//Update document name in DB
					$updata=array('doc_name' =>$file->getClientOriginalName());
					Site::where('id', $site_id)->update($updata);
					$updata1=array('userFile' =>$file->getClientOriginalName());
					Siteform::where('site_id', $site_id)->update($updata1);
					$request->session()->flash('success', 'Successfully image uploaded!');
				}
				else
				{
					$request->session()->flash('error', 'There was an error in upload image!');
				}
			}
			else
			{
				$request->session()->flash('error', 'File extension is not a valid one!');
			}
		}
		
//return redirect()->route('paymentodo');
return redirect()->route('paymentodo', ['site_id' => $doc_id]);
	}
}