<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GalleryController extends Controller
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
     		$num++;
     		}
     	}
    	// $this->validate($req,[
    	// 'picture_up'=>'required|image|mime:jpg,png,jpeg,gif|max:2048']);
    	return back();
    }
}
