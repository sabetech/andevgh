<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\News;
use App\Inbox;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){

        $news = News::whereNull('archived_at')->orderBy('news_date_unix', 'desc')->paginate(10);

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
        $news->author = $posted['news_author'];
        $news->news_date_unix = isset($posted['news_date']) ? strtotime($posted['news_date']) : strtotime(date("Y-m-d"));    
        $news->news_content = $posted['news_content'];

        $news->save();

        return redirect()->route('admin_home');
    }

    public function archive(){

        $news = News::whereNotNull('archived_at')->orderBy('news_date_unix', 'desc')->paginate(10);

        return view('admin.archive')
             ->with('news', $news);
    }

    public function inbox(){

        $messages = Inbox::whereNull('archived_at')
             ->where('direction', 'incoming')
             ->whereNull('drafted_at')
             ->whereNull('outboxed_at')
             ->orderBy('date_created', 'desc')->paginate(15);

        return view('admin.inbox')
            ->with('messages', $messages);


    }
}
