<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class MainController
{
    public function index()
    {
        $latestNews = News::latest()->limit(10)->get();

        return view('home', ['title' => 'Главная', 'news' => $latestNews]);
    }

    public function about()
    {
        return view('about', ['title' => 'О нас']);
    }
    public function news()
    {
        return view('news', ['title' => 'Добавить новость']);
    }
    public function submitNews(Request $request)
    {
        try {
            News::query()->create($request->all());
        } catch (Exception $e) {
            return view('news', ['title' => 'Добавление новости', 'message' => 'Новость не добавлена']);
        }

        return view('news', ['title' => 'Добавление новости', 'message' => 'Новость добавлена']);
    }
}