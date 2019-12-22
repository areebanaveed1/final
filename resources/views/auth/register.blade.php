@extends('layout')
@section('title','Signup')
@section('nav')
@endsection
@section('content')
<style>
#bdy{
              margin: 0;
              padding: 0;
              font-family: sans-serif;
              background-size: cover;
              
            }
              .wrapper{
                background:white;
                color: #fff;
                width: 400px;
                height: 650px;
                top: 95%;
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
        <div class="row">
        <div class="col-sm-2">
        <img style="margin-left:60px"src="images\signup.jpg" class="rounded-circle"height=32% width="700%" align="middle">

        </div>
                    <div class="col-sm-8"style="text-align: center;">

                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                
                        <h2 style="color:blue">User Name</h2>

                            <div class="col-md-6">
                                <input style="color:black"id="name" type="text" placeholder="User Name"class="form-control @error('name') is-invalid @enderror"size=30 name="name" value="{{ old('name') }}" width=100px required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>
            

                            <h2  style="color:blue">Email</h2>

                            <div class="col-md-6">
                                <input style="color:black" id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>
                    

                        <h2 style="color:blue;">Password</h2>

                            <div class="col-md-6">
                                <input style="color:black"id="password" type="password" placeholder="Password"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            
                        </div>

                        <h2  style="color:blue">Confirm Password</h2>

                            <div class="col-md-6">
                                <input style="color:black"id="password-confirm" placeholder="Confirm Password"type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div><br>
                        
                        <p  style="color:blue">Already have an account? <a href="{{ url('/login') }}">Login</a>

                           
                                <input type="submit"value="Signup">
                                
                            </div>
                        </div>
                    </form>
        
            </div>
        </div>
    </div>
</div>
@endsection
