<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;
use App\Http\Requests\CreateNewsRequest;

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
    public function create(){
        $teams = Team::all();
        return view('news.create',compact('teams'));
    }
    public function store(CreateNewsRequest $request){
        $news = News::create([
            'title' => request('title'),
            'content' => request('content'),
            'user_id' => auth()->user()->id
        ]);
        $news->teams()->attach(request('teams'));
        return redirect('/news')
        ->with('message', 'Thank you for publishing article on www.nba.com.');

    }
}
