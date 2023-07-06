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
    // public function trending()
    // {
    //     $trend = RentLogs::where('user_id', $request->user_id)->where('book_id', $request->book_id)->where('actual_return_date',null);
    //     $rentData = $rent->first();
    // }

   
}
