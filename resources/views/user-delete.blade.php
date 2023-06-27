@extends('layouts.mainlayout')

@section('title', 'Ban User')

@section('content')
    <h2>Are you sure banned user {{$user->username}} ?</h2>
    <div class="mt-5">
        <a href="/user-destroy/{{$user->slug}}" class="btn btn-danger me-5"> sure </a>
        <a href="/users" class="btn btn-primary">cancel</a>
    </div>
@endsection
