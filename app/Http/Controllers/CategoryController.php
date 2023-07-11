<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        return view('categories', ['categories'=>$categories]);
    }
    public function add()
    {
        return view('category-add');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);
        $category = category::create($request->all());
        return redirect('categories')->with('status', 'Category Added Succesfully');
    }
    public function edit($slug)
    {
        $category = Category::where('slug',$slug)->first();
        return view('category-edit',['category' => $category]);
    }
    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);

        $category = Category::where('slug',$slug)->first();
        $category->slug = null;
        $category-> update($request->all());
        return redirect('categories')->with('status','Category Update Succesfuly');
    }
    public function delete($slug)
    {
        $category = Category::where('slug',$slug)->first();
        return view('category-delete',['category'=> $category]);
        // $category = Category::where('slug',$slug)->first();
        // $category -> delete();
        // return redirect('categories')->with('status','Category Delete Succesfuly');

    }
    public function destroy($slug)
    {
       
        $category = Category::where('slug',$slug)->first();
        $category -> delete();
        Session::flash('message','Category Delete Succesfuly');
        Session::flash('alert-class','alert-success');
        return redirect('categories');
    }
    public function deletedCategory()
    {
       $deletedCategories = Category::onlyTrashed()->get();
        return view('category-deleted',['deletedCategories' => $deletedCategories]);
    }
    public function restore($slug)
    {
        $category = Category::withTrashed()->where('slug',$slug)->first();
        $category-> restore();
        return redirect('categories')->with('status','Category restore succes');
    }
}

