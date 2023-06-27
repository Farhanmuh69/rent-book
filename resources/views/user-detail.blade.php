@extends('layouts.mainlayout')

@section('title', 'Users')

@section('content')
    <h1>Detail Users</h1>
    
    @if ($user->status == 'inactive')
        <div class="mt-5 d-flex justify-content-end">
            <a href="/user-aprrove/{{$user->slug}}" class="btn btn-info">Aprroved User</a>
        </div>
    @endif

    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    

    <div class="my-5 w-25">
       <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" readonly value="{{$user->username}}">
       </div>
       <div class="mb-3">
        <label for="" class="form-label">Phone</label>
        <input type="text" class="form-control" readonly value="{{$user->phone}}">
       </div>
       <div class="mb-3">
        <label for="" class="form-label">Addres</label>
        <textarea name="" id="" cols="30" rows="5" class="form-control" readonly style="resize: none">{{$user->addres}}</textarea>
       </div>
       <div class="mb-3">
        <label for="" class="form-label">Status</label>
        <input type="text" class="form-control" readonly value="{{$user->status}}">
       </div>
    </div>
@endsection

