<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class WebController extends Controller
{
    //

    public function news(){

    	$news = News::paginate(1);
    	$newsAll = News::all();

    	return view('news')
    		->with('newsAll', $newsAll)
    		->with('news', $news);

    }

    public function newsItem($id){

    	$news = News::find($id);

    	return view('news')
    		->with('news', $news);

    }
}
