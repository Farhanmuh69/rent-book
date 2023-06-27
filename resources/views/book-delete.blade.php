@extends('layouts.mainlayout')

@section('title', 'Delete Book')

@section('content')
    <h2>are you sure delete book {{$book->title}} </h2>
    <div class="mt-5">
        <a href="/book-destroy/{{$book->slug}}" class="btn btn-danger me-5"> sure </a>
        <a href="/books" class="btn btn-primary">cancel</a>
    </div>
@endsection
