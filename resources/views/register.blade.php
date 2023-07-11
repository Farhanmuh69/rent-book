

@extends('layouts.Pageuser')

@section('title', 'login')
@section('page-user')

<style>
    .main{
    height: 100vh;
    box-sizing: border-box;
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.register-box{
    box-shadow:0px 0px 40px 0px rgba(0, 0, 0, 0.30); 
    width: 500px;
    border: solid 0.5px;
    padding: 20px;
    border-radius: 20px;
    background-color: white;
}
form div{
    margin-bottom: 20px
}

</style>

<body>
<div class="main d-flex flex-column justify-content-center d-flex align-items-center">
    <div class="register-box">
        <img draggable="false" class="mb-5" src="{{ asset('img/logo.svg') }}" alt="" style="margin-left: 100px">
        <form action="" method="post">
            @csrf
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control" required >
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Ex. 6281222137590" required>
            </div>
            <div>
                <label for="addres">Addres</label>
                <textarea name="addres" id="addres" class="form-control" required></textarea>
            </div>
            <div>
                <button class="w-100 btn btn-lg btn-primary" style="background-color: #EF8732" type="submit" class="btn btn-primary">Register</button>
            </div>
            <div>
                Have Account?<a href="login" class="text-center">login</a>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" style="width: 500px">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success" >
                    {{ session('message') }}
                </div>
            @endif
        </form>
    </div>
</div>
@endsection
