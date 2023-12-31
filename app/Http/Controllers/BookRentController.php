<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\RentLogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookRentController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=',1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();
        return view('book-rent',['users'=>$users, 'books'=>$books]);
    }
    public function store(Request $request)
    {
        $request['rent_date'] = Carbon::now()->toDateString();
        $request['return_date'] = Carbon::now()->addDay(3)->toDateString();

        $book = Book::findOrfail($request->book_id)->only('status');

        if ($book ['status'] != 'in stock') {
            Session::flash('message','Cannot rent, the book is not available');
            Session::flash('alert-class','alert-danger');
            return redirect('book-rent');
        }
        else{
            $count = RentLogs::where('user_id', $request->user_id)->where('actual_return_date',null)->count();
            if ($count >= 3) {
                Session::flash('message','User Reaches The limit');
                Session::flash('alert-class','alert-danger');
                return redirect('book-rent');
            }
            else{
                try {
                    DB::beginTransaction();
                    //proses insert ke rent log
                    RentLogs::create($request->all());
                    //proses update book table
                    $book = Book::findOrfail($request->book_id);
                    $book->status = 'not available';
                    $book->save();
                    DB::commit();
    
                    Session::flash('message','Succes');
                    Session::flash('alert-class','alert-success');
                    return redirect('book-rent');
    
                } catch (\Throwable $th) {
                    DB::rollBack();
                }
            }
        }
    }
    public function returnBook()
    {
        $users = User::where('id', '!=',1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();
        return view('book-return',['users'=>$users,'books'=>$books]);
    }

    public function returnedBook(Request $request)
    {


        $rent = RentLogs::where('user_id', $request->user_id)->where('book_id', $request->book_id)->where
        ('actual_return_date',null);
        $request['actual_rent_date'] = Carbon::now()->toDateString();
        $book = Book::findOrfail($request->book_id)->only('status');
        $rentData = $rent->first();
        $countData = $rent->count();

        if ($countData == 1) {
            $rentData->actual_return_date = Carbon::now()->toDateString();
            $rentData->save();
            try{
                DB::beginTransaction();
                RentLogs::where($request->all());

                $book = Book::findOrfail($request->book_id);
                $book->status = 'in stock';
                $book->save();
                DB::commit();
                

                Session::flash('message','Succes returned');
                Session::flash('alert-class','alert-success');
                return redirect('book-return');
            } catch(\Throwable $th){
                DB::rollBack();
            }

        }
        else{
            Session::flash('message','Data invalid');
            Session::flash('alert-class','alert-danger');
            return redirect('book-return');
        }
       
        
    }
}
