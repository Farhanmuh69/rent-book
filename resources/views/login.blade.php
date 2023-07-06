
@extends('layouts.Pageuser')

@section('title', 'login')
@section('page-user')
<style>
    .main{
        height: 100vh;
        box-sizing: border-box;
        background-image: url('{{ asset("img/bglogin.svg") }}');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .login-box{
        
        box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.30);
        width: 500px;
        border: solid 1px;
        padding: 20px;
        border-radius: 20px;
        background-color: aqua;
    }
    form div{
        margin-bottom: 20px
    }


</style>
<body>
    <div class="main d-flex justify-content-center d-flex align-items-center color-dark" >
        @if (Session('status'))
            <div class="alert">
                {{ Session('message') }}
            </div>
        @endif
        {{-- <img class="align-self-center mr-3" src="{{ asset('img/logo.svg') }}" alt=""> --}}
        <div class="login-box" style="background-color: white">
        <img draggable="false" class="mb-4 " src="{{ asset('img/logo.svg') }}" alt="" style="margin-left: 100px; margin-right:10px">
            <form action="" method="POST">
                @csrf
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required >
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required >
                </div>
                <div>
                    <button class="w-100 btn btn-lg btn-primary" style="background-color: #EF8732" type="submit" class="btn btn-primary">Login</button>
                </div>
                <div>
                    <span>don't have an account?</span><a href="register" class="text-center">Sign Up</a>
                </div>
            </form>
        </div>
    </div>

@endsection
