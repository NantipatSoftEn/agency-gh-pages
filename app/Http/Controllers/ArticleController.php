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
	
	function  create()
	{
		return  view('Article.form-article');
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
    	return back();
	}

	 function  edit  ($id) {
		$article = Article::find($id);
    	return view('Article.edit-article',['article' => $article]);
	}

    function update(Request $req){
		//dd($req);
    	$con = "Update Sucess";
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
		return redirect('show-article');
    }

    function delete($id){
		$con = "delete Sucess";
		$article2 = DB::table('article')->find($id);
    	$image_path =	$article2->path_pic;
    	$con = "Error can't Delete file!!";
    	if(File::exists($image_path)) {
    		if(File::delete($image_path)){
    		
    		}
		}
		
    	$article = DB::table('article')->where('id',$id)->delete();
		$con =  "Delete Complete";
	
		return back();
    }

}
