<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at','desc')->paginate(10);
        return view('news.index',compact('news'));

    }
    public function show($id){
        $news = News::find($id);
        return view('news.show',compact('news'));
    }
}
