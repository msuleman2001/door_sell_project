<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    Font awsome cdn--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--    jquery cdn--}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--Bootstrap Css CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{--    Login Page Css--}}
    <link href="{{ asset('auth/login-css/login.css') }}" rel="stylesheet">

    <title>Document</title>

</head>
<body>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png')}}" alt=""/>
            <h3>Welcome</h3><br>
            <a href="{{route('userRegister')}}" class="btn btn-outline-primary text-white">Register</a>
        </div>
        <div class="col-md-9 register-right">

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Login</h3>

                    <form method="post" action="{{route('loggedIn')}}">
                        @csrf
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="user_name" type="text" class="form-control" placeholder=" Username *" value="" />
                            </div>
                            @if ($errors->any())
                                <span class="text-danger">
                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                </span>
                            @endif

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="user_password" type="password" class="form-control" placeholder="Password *" value="" />
                            </div>

                            <input type="submit" class="btnRegister"  value="Login"/>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">


</div></body>
</html>
