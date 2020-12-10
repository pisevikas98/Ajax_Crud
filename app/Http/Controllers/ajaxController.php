<?php

namespace App\Http\Controllers;
use App\Ajax;

use Illuminate\Http\Request;

class ajaxController extends Controller
{
    public function ajaxCreate(){
    	return view('ajaxCreate');
    }

    public function ajaxSave(Request $request){
    	$data = new Ajax();
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->phone = $request->phone;
    	if($data->save()) {
            $response["status"] = "success";            
        }
        else {
            $response["status"] = "failure";
        }
        return $response;

    }

    public function ajaxread(){
    	$data = Ajax::all();
    	return view('ajaxread' ,compact('data'));
    }

    public function ajaxEdit($ajax_id){
    	$data = Ajax::find($ajax_id);
    	return view('ajaxEdit',compact('data'));
    }
    public function ajaxUpdate(Request $request,$ajax_id){
    	$data = Ajax::find($ajax_id);
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->phone = $request->phone;
    	if($data->save()) {
            $response["status"] = "success";            
        }
        else {
            $response["status"] = "failure";
        }
        return $response;
    }

    public function ajaxDelete($ajax_id){
    	$data = Ajax::find($ajax_id);
    	$data->delete();

    	return redirect('ajaxread')->with("success","data deleted successfully");
    }
       public function index()
    {
        return view('home');
    }
}
