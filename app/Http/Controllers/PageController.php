<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Activity;
use App\Models\News;

class PageController extends Controller
{
    public function home() {
        $activities = Activity::latest()->take(3)->get();
        $news = News::latest()->take(3)->get();
        return view('home', compact('activities', 'news'));
    }

    public function about() {
        return view('about');
    }


    public function activities() {
        $activities = Activity::orderBy('date', 'desc')->paginate(5);
        return view('activities', compact('activities'));
    }

    public function news() {
        $news = News::orderBy('published_at', 'desc')->paginate(5);
        return view('news', compact('news'));
    }
}
