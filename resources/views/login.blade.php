@extends('layout.app')

@section('content')
    <body class="text-center">
        @if(isset($error) && $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{__("Wrong Username or Password")}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$error}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
        @endif
        <main class="form-signin">
            <form method="post">
                <h1 class="h3 mb-3 fw-normal">{{__("Login Page")}}</h1>
                <label for="username" class="visually-hidden">{{__("Username")}}</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="{{__("Username")}}" required autofocus>
                <label for="password" class="visually-hidden">{{__("Password")}}</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="{{__("Password")}}" required>
                <button class="w-100 btn btn-lg btn-primary" type="submit" value="true" name="btnSignIn">{{__("Sign In")}}</button>
            </form>
        </main>
    </body>
@stop

@section('script')
    <link href={{asset("dist/css/signin.css")}} rel="stylesheet">
    <link href={{asset("dist/css/form-validation.css")}} rel="stylesheet">
@stop
