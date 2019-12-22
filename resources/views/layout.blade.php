<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EasyNote- @yield('title')</title>

    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
    display:block;
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
  height:100%;
}



    </style>
</head>
<body>
    @section('header')

    <div class="container-fluid"style="background-color:white">
            <div class="row"><br>
                <div class="col-sm-1"><br>
                    <img src="images\en.jpg"height="60%" width="110%">
                    
                </div>
                <div class="col-sm-4"><br>
                    <h1 style="font-style: serif;font-size:50px;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"><b>EasyNote</b></h1>
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-4"><br>
               


                <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"><input style="border: none;outline: none;height: 40px;font-size: 18px;cursor: pointer;border-radius: 20px; width:30%;margin-left:20px;"type="submit"value="Login"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><input style="border: none;outline: none;height: 40px;font-size: 18px;cursor: pointer;border-radius: 20px; width:30%;margin-left:20px;"type="submit"value="SignUp"></a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
            </div>
        </div>
    </div>
    @show

    @section('nav')
    <div class="container-fluid"style=" background: linear-gradient(to right, #84C7F6,#4E71C2);">
            <div class="row"><br><br>
                
                <div class="col-sm-12"style="font-size:30">
                    
                        <div class="container">
                                <div class="btn-group">
                                          <a href="{{ url('/') }}"><button style="text-decoration:none;width:100%;color:black"type="button" class="btn">Home</a></button>
                                          <button style="width:100%"type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                          Features</button>
                                          <ul class="dropdown-menu" role="menu">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <li><a href="#reminder">Add Reminder</a></li>
                                                    </div><br>
                                                    <div class="col-sm-6">
                                                        <li><a href="#schedule">Schedule Meeting</a></li>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <li><a href="#record">Keeping Record</a></li>
                                                    </div><br>
                                                    <div class="col-sm-6">
                                                        <li><a href="#upload"> Upload File</a></li>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <li><a href="#share">Share Data</a></li>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                          </ul>
                                          <a href="{{ url('/working') }}"><button style="width:100%"type="button" class="btn">Working?</button>
                                          <a href="{{ url('/contact') }}"><button style="width:100%"type="button" class="btn">Contact</button>
                                          <a href="{{ url('/help') }}"><button style="width:100%"type="button" class="btn">Help</button>
                                        </div>
                                      </div>
                        </div>
                        </div>
                    </ul>
                    </a>
                </div>
                
        </div>
    @show            

    
    @yield('content')    

  
</body>
</html>