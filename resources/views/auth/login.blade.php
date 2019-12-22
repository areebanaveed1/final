@extends('layout')
@section('title','Login')
@section('nav')
@endsection
<style>
            #bdy{
              margin: 0;
              padding: 0;
              font-family: sans-serif;
              background-size: cover;
              background-repeat: no-repeat;
            }
              .wrapper{
                background:white;
                color: #fff;
                width: 450px;
                height: 590px;
                top: 80%;
                left: 50%;
                transform: translate(-50%, -50%);
                box-sizing: border-box;
                position: absolute;
                padding: 70px 30px;
              }    
              .wrapper input{
                width: 100%;
                 /* margin-bottom: 20px; */
            }  
            
            .wrapper input[type="text"],
            .wrapper input[type="password"]
            {
             border: none;
             border-bottom: 1px solid #fff;
             background: transparent;
             outline: none;
             height: 40px;
             color: #fff;
             font-size: 16px;
            }
            .wrapper input[type="submit"]{
             border: none;
             outline: none;
             height: 40px;
             font-size: 18px;
             cursor: pointer;
             border-radius: 20px;
            }
            
            .signup{
             border: none;
             outline: none;
             height: 40px;
             font-size: 18px;
             cursor: pointer;
             border-radius: 20px;
             margin-left:0px;
             /* margin-top:20px; */
             
            }
            input[type="submit"]:hover{
                 background-color: blue;}
            body button:hover{
                 background-color: blue;}
            .rounded-circle{
                margin-top:-200px;
            }
            
            
            </style>
@section('content')
<body id="bdy"style="background: linear-gradient(to right, lightblue, #A767DA)">
    <div class="wrapper">
<div class="container">
<img style="margin-left:80px;margin-top:-160px"src="images\login.jpg" class="rounded-circle"height=32% width="50%" align="middle">
        <div class="row">
        <div class="col-sm-2">
        

        </div>
    
    <div class="row justify-content-center">
        <div class="col-lg-8">
        
                    <form method="POST" action="{{ route('login') }}"><br><br>
                        @csrf

                        <h2 style="color:blue;text-align:center">Email</h2>
                            <div class="col-md-6">
                                <input style="color:black"id="email" type="email" placeholder="Email"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>

            
                            <h2 style="color:blue;text-align:center">Password</h2>


                            <div class="col-md-6">
                                <input style="color:black"id="password" type="password"placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>
                            <input type="submit"value="Login"><br>
                            <div class="container-fluid">
                            <div class="row">
                            <div class="col-sm-6">
                            <p style="color:black;text-align:left">New to EasyNote?<a href="{{ url('/register') }}">Signup</a></p>
                            </div>
                            <div class="col-sm-4">
                            <div class="col-md-6 offset-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        <pre><p style="color:black;margin-left:0px">Remember Me</p></pre>
                                    </label>
                                </div>
                            </div>
                            </div>
                                </div>
                            </div>

                        

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
