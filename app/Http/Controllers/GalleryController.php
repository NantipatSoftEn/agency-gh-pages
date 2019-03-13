<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery ;
use DB;

class GalleryController extends Controller
{
    function insert(Request $req){
        $gal = new Gallery([
                    'topic'=> $req->input('topic'),
                    'title'=>$req->input('title'),
                    'link'=>$req->input('link')
                ]);
                $gal->save();
        return "insert success";
    }

    function delete(Request $req){
        $id = $req->input('gallery_id');
        DB::table('gallery')->where('id',$id)->delete();
        return "delete success";
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
