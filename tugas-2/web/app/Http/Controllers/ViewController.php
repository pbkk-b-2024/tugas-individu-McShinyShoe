<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index($category)
    {
        $articles = Article::paginate(10); // Adjust the number per page as needed
        return view('template.view.' . $category, compact('articles'), ['category' => $category]);
    }
}
