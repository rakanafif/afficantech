<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Post;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $books = Book::where('status', 'published')->get();
        $posts = Post::where('is_approved', true)->get();

        return response()->view('sitemap', [
            'books' => $books,
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }
}

