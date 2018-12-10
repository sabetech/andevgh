<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\News;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){

        $news = News::orderBy('news_date_unix', 'desc')->paginate(10);

    	return view('admin.home')
            ->with('news', $news);

    }

    public function addNews(){

    	return view('admin.addnews');
    	
    }

    public function post_addNews(){
        $posted = Input::get();


        $news = new News;
        $news->news_title = $posted['news_title'];
        $news->news_author = $posted['news_author'];
        $news->news_date_unix = isset($posted['news_date']) ? strtotime($posted['news_date']) : strtotime(date("Y-m-d"));    
        $news->news_content = $posted['news_content'];

        $news->save();

        return redirect()->route('admin_home');
    }
}
