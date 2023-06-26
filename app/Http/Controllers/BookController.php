<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
// use App\Http\Controllers\BookController;

class BookController extends Controller
{
    public function index(Request $request)
    {
        dd('halaman buku');
    }
}
