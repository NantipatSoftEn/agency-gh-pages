<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Article;
use File;

class ArticleController extends Controller
{
     function index()
    {
		$article = Article::all();
    	return view('Article.show-article',['article' => $article]);
    }

    function insert(Request $req){
    	$con = "Insert fail";
    	if($req->file('picture')){
    		$newname = time().'.'.$req->file('picture')->getClientOriginalExtension();
    		$req->file('picture')->move(public_path('article'),$newname);
    		$article = new Article([
	    		'title'=>$req->input('title'),
	    		'content'=>$req->input('title'),
	    		'path_pic'=> public_path('article').'\\'.$newname
    		]);
    		$article->save();
    	$con = "insert success";
    	}
    	return $con;
	}
	public function  edit  ($id) {}
    function update(Request $req){
    	$con = "Update fail";
    	$id = $req->input('article_id');
    	$path = $req->input('path_pic');
    	if($req->file('picture')){
    		if(File::delete($path)){
    			$newname = time().'.'.$req->file('picture')->getClientOriginalExtension();
    			$req->file('picture')->move(public_path('article'),$newname);
    			$path =  public_path('article').'\\'.$newname;
    		}
		}
    	DB::table('article')->where('id',$id)->update([
                    'title'=> $req->input('title'),
                    'content'=>$req->input('content'),
                    'path_pic'=>$path,
                ]);
    	return $con;
    }

    function delete(Request $req){
    	$con = "Delete fail";
    	$id = $req->input('picture_id');
    	$image_path = public_path('article').'\\'.$req->input('picture_del');
    	$con = "Error can't Delete file!!";
    	if(File::exists($image_path)) {
    		if(File::delete($image_path)){
    			DB::table('article')->where('id',$id)->delete();
    			$con =  "Delete Complete";
    		}
    	}
		return $con;
    }

}
