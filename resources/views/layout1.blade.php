<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <title>EasyNote- @yield('title')</title>

    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
    </style>
</head>
<body>
      
<div class="container-fluid">
        <div class="row">
                @section('nav')
                <div class="col-sm-2">
                <div class="container-fluid" style="position:sticky;background-color:gray">
                    <div class="row">
                                    <div class="col-sm-12"style="position:sticky"><br><br>
                                        <input style="border-radius: 7px"type="text" value="" placeholder="Search Notes..."size="15">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </div>
                                </div>
                                
                                <div class="row">
                                        <div class="col-sm-12"><br><br>
                                            <button style="height:40px;width:150px"type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    New Note <span class="caret"></span></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <button style="border:none;"><a href="{{ url('/meeting') }}">Meeting Note</a></button>
                                                                <button style="border:none;"><a href="{{ url('/todo') }}">To-Do</a></button>
                                                                <button style="border:none;"><a href="{{ url('/meal') }}">Meal Planner</a></button>
                                                                <button style="border:none;"><a href="{{ url('/project') }}">Project Plan</a></button>
                                                                <button style="border:none;"><a href="{{ url('/lecture') }}">Lecture Notes</a></button>
                                                            </div><br>
                                                            </div><br>
                                                        </div>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <a href="{{ url('/all') }}"><button style="height:40px;width:150px"type="button" class="btn btn-primary">All Notes</button></a><br>
                                        </div>
                                </div><br>
                                <div class="row">
                                        <div class="col-sm-12">
                                        <a href="{{ url('/image') }}"><button style="height:40px;width:150px"type="button" class="btn btn-primary">Upload images</button></a><br>
                                        </div>
                                </div><br>
                                <div class="row">
                                        <div class="col-sm-12">
                                        <a href="{{ url('/audio') }}"><button style="height:40px;width:150px"type="button" class="btn btn-primary">Upload Audio</button></a><br>
                                        </div>
                                </div><br>
                                <div class="row">
                                        <div class="col-sm-12">
                                        <a href="{{ url('/video') }}"><button style="height:40px;width:150px"type="button" class="btn btn-primary">Upload Video</button></a><br>
                                        </div>
                                </div><br>
                                <div class="row">
                                        <div class="col-sm-12">
                                        <a href="{{ url('/share') }}"><button style="height:40px;width:150px"type="button" class="btn btn-primary">Share Data</button></a><br>
                                        </div>
                                </div><br>
                        
                    </div>

                </div>
                @show
                <div class="col-sm-10"style="text-align:left">
                        @yield('content')
                </div>
        </div>
</div>
</body>
</html>