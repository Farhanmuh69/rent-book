<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<style>
        .main{
        height: 100vh;
        box-sizing: border-box;
    }
    .register-box{
        width: 500px;
        border: solid 1px;
        padding: 20px;
    }
    form div{
        margin-bottom: 20px
    }

</style>

<body>
    <div class="main d-flex justify-content-center d-flex align-items-center">
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
            <div class="alert alert-succes" style="width: 500px">
                {{ session('message') }}
            </div>
        @endif
        <div class="register-box">
            <form action="" method="post">
                @csrf
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" >
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control" required >
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" >
                </div>
                <div>
                    <label for="addres">Addres</label>
                    <textarea name="addres" id="addres" class="form-control"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                <div>
                    Have Account?<a href="login" class="text-center">login</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>