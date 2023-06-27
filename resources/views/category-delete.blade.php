@extends('layouts.mainlayout')

@section('title', 'Delete Category')

@section('content')
    <h2>are you sure delete category {{$category->name}} </h2>
    <div class="mt-5">
        <a href="/category-destroy/{{$category->slug}}" class="btn btn-danger m-5"> sure </a>
        <a href="/categories" class="btn btn-primary">cancel</a>
    </div>
@endsection
