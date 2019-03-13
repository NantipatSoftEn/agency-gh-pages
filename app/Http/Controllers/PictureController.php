<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use File;
use DB;

class PictureController extends Controller
{
    function index()
    {
    	return view('form-album');
    }

     function upload(Request $req){

     	$input = $req->all();
     	$img = array();
     	$num = 0;
     	if($req->file('picture_up')){
     		foreach ($req->file('picture_up') as $pic) {
     			$newname = time().$num.'.'.$pic->getClientOriginalExtension();
     			$pic->move(public_path('album'),$newname);
                $picture = new Picture([
                	'path'=> public_path('album').'\\'.$newname,
                	'gallery_id'=>$req->input('gallery_id');
                ]);
                $picture->save();
     		$num++;
     		}
     	}
    	// $this->validate($req,[
    	// 'picture_up'=>'required|image|mime:jpg,png,jpeg,gif|max:2048']);
    	return back();
    }

    function delete(Request $req){
    	$id = $req->input('picture_id');
    	$image_path = public_path('album').'\\'.$req->input('picture_del');
    	$con = "Error can't Delete file!!";
    	if(File::exists($image_path)) {
    		if(File::delete($image_path)){
    			DB::table('picture')->where('id',$id)->delete();
    			$con =  "Delete Complete";
    		}
    	}
		return $con;
    }
}
