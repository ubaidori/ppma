<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(): View
    {
        $news = News::latest()->paginate(5);

        return view('news.index', compact('news'));
    }
}
