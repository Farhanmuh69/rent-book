@extends('layouts.mainlayout')

@section('title', 'Book rent')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div class="col-12 col-md-6 offset-md-2 col-lg-6 offset-md-3">
    <h1>Form rent</h1>
    <form action="book-rent" method="post">
        <div class="mt-5">
            @if (session('message'))
                <div class="alert {{ session('alert-class') }}">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        @csrf
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <select name="user_id" id="" class="form-control userbox" required>
                <option value="">Select User</option>
                @foreach ($users as $item )
                    <option value="{{ $item->id }}">{{ $item->username}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="book" class="form-label">Book</label>
            <select name="book_id" id="book" class="form-control userbox " required>
                <option value="">Book</option>
                @foreach ($books as $item )
                <option value="{{ $item->id }}">{{ $item->book_code }} || {{ $item->title }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary ">submit</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.userbox').select2();
});
</script>
@endsection
