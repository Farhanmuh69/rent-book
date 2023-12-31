<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
  
    public function index()
    {
        $books = Book::all()->shuffle();
        return view('home',['books'=>$books]);
    } 
}
