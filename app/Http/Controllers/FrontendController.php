<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('frontend.index', compact('books'));
    }
}
