<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function books()
    {
        $books = Book::all();
        return view('book',['books'=> $books]);
    }

    public function add()
    {
        $categories = Category::all();
        return view('book-add', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_code' => 'required|unique:books|max:255',
            'title' => 'required|max:255'
        ]);

        $newName = '';
        
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $book = Book::create($request ->all());
        $book->categories()->sync($request->categories);
        Session::flash('message','Book Added Succesfully');
        Session::flash('alert-class','alert-success');
        return redirect('books');
    }
    
    public function edit($slug)
    {
        $book = Book::where('slug', $slug)->first();
        $categories = Category::all();

        return view('book-edit',['categories'=>$categories], ['book'=>$book]);
    }

    public function update(Request $request, $slug)
    {
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }

        $book = Book::where('slug', $slug)->first();
        $book->update($request->all());

        if($request->categories){
            $book->categories()->sync($request->categories);
        }
        Session::flash('message','Book Updated Succesfully');
        Session::flash('alert-class','alert-success');
        return redirect('books');
    }
    public function delete($slug)
    {

        $book = Book::where('slug', $slug)->first();
        return view('book-delete', ['book'=>$book]);
    }

    public function destroy($slug)
    {
        $book = Book::where('slug',$slug)->first();
        if ($book ['status'] != 'in stock') {
            Session::flash('message','Cannot delete, Books are being borrowed');
            Session::flash('alert-class','alert-danger');
            return redirect('books');
        }
        $book -> delete();
        Session::flash('message','Book Delete Succesfuly');
        Session::flash('alert-class','alert-success');
        return redirect('books');
    }

    public function deletedBook()
    {
        $deletedBooks = Book::onlyTrashed()->get();
        return view('book-delete-list', ['deletedBooks'=>$deletedBooks]);
    }

    public function restore($slug)
    {
        $book = Book::withTrashed()->where('slug', $slug)->first();
        $book -> restore();
        Session::flash('message','Book Restore Succesfuly');
        Session::flash('alert-class','alert-success');
        return redirect('books');
    }
}

