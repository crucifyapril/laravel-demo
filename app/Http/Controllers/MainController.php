<?php

namespace App\Http\Controllers;

class MainController
{
    public function index()
    {

        return view('welcome', ['title' => 'XNJ _ NJ']);
    }
}