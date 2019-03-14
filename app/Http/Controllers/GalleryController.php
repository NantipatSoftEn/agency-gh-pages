<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery ;
use App\Picture ;
use DB;

class GalleryController extends Controller
{
    public function  index() {
        $gallery = Gallery::all();
        return view ('Album.show-album', ['gallery' => $gallery]);
        
    }

    function insert(Request $req){
        //dd($req);
        $gal = new Gallery([
                    'title'=>$req->input('title'),
                    'content'=>$req->input('content'),
                    'link'=>$req->input('link')
                ]);
                $gal->save();
        return "insert success";
    }

    function  create()
	{
        
		return  view('Album.form-album');
    } 
    function edit($id){
        $picture = Picture::where('gallery_id',$id)->get();

        //dd($picture);
        return view('Album.edit-album',['picture' => $picture]);
    }

    function delete($id){
        DB::table('gallery')->where('id',$id)->delete();
        return back();
    }

    function update(Request $req){
        $id = $req->input('gallery_id');
        DB::table('gallery')->where('id',$id)->update([
                    'topic'=> $req->input('topic'),
                    'title'=>$req->input('title'),
                    'link'=>$req->input('link')
                ]);
        return "update success";
    }
}
