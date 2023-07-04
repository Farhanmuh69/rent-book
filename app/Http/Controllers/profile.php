<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profile extends Controller
{
    public function profile()
    {
        return view('profile');
    }
    public function bookList(Request $request)
    {
        $categories = Category::all();

        if ($request->category) {
            // $books = Book::where('title','like','%'.$request->title.'%')->get();
            $books = Book::whereHas('categories', function($q) use($request){
                $q->where('categories.id', $request->category);
            })->get();
        }
        elseif($request->title){
            $books = Book::where('title','like','%'.$request->title.'%')->get();
        }
        else{
            $books = Book::all();
        }

        return view('bookList',['books'=>$books, 'categories'=>$categories]);
    }
}
