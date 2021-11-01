<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="{{url('backend-ui/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('Login-ui/custom.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        @include('backend.layouts.message')
        <div class="admin-login-box">
            <div class="admin-login">
                <h2>Admin Login</h2>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username: <a style="color: red;">{{$errors->first('username')}}</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password: <a style="color: red;">{{$errors->first('password')}}</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <a href="" class="pull-right">Forget Password?</a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success login-custom-btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>