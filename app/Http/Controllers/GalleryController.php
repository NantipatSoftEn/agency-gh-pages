<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
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
        $this->validate($req, [
           'title'   => 'required|max:255',
           'content' => 'required',
           'picture_up' => 'required',
        ]);        
        $path;
        if($req->file('picture_up')){
    		$newname = time().'.'.$req->file('picture_up')->getClientOriginalExtension();
    		$req->file('picture_up')->move('headAlbum',$newname);
            $path ='article/'.$newname;
    	$con = "insert success";
        }
        
        $gal = new Gallery([
                    'title'=>$req->input('title'),
                    'content'=>$req->input('content'),
                    'link'=>$req->input('link')
                ]);
                $gal->save();
         $gallery = Gallery::all();
        return view ('Album.show-album', ['gallery' => $gallery]);
    }

    function  create()
	{
        
		return  view('Album.form-album');
    } 
    function edit($id){
        $picture = Picture::where('gallery_id',$id)->get();

        //dd($picture);
        return view('Album.edit-album',['picture' => $picture, 'id'=> $id]);
    }

    function delete($id){
        DB::table('gallery')->where('id',$id)->delete();
        return back();
    }

    function update(Request $req){
        $this->validate($req, [
           'title'   => 'required|max:255',
           'content' => 'required',
           'link' => 'required',
        ]);  
        $id = $req->input('gallery_id');
        DB::table('gallery')->where('id',$id)->update([
                    'topic'=> $req->input('topic'),
                    'title'=>$req->input('title'),
                    'link'=>$req->input('link')
                ]);
        return "update success";
    }
}
