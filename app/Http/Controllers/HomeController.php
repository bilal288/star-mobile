<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleType;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articleTypes = ArticleType::getArticleTypes();
        return view('frontend.welcome', compact('articleTypes'));
    }
}
