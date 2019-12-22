@extends('layout')
   @section('title','Working')
   <style>
    .wrapper input[type="submit"]{
             border: none;
             outline: none;
             height: 40px;
             font-size: 18px;
             cursor: pointer;
             border-radius: 20px;
             margin-left:40%;
            }
  
    input[type="submit"]:hover{
            background-color: blue;}
     body button:hover{
            background-color: blue;}

            </style>
    @section('content')
    <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12"style="font-size:45;text-align:center;">
                    <h1>HOW EASYNOTE WORKS?</h1>
                    </div>
                </div>
            </div><br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="https://askleo.askleomedia.com/wp-content/uploads/2012/10/resolution_exmple.png"height=80% width=50%><br>
                </div>
                <div class="col-sm-3">
                    <img src="images/add.jpg"height=80% width=50%><br>
                </div>
                <div class="col-sm-3">
                    <img src="images/search.jpg"height=80% width=50%><br>
                </div>
                <div class="col-sm-3">
                    <img src="images/record.jpg"height=80% width=50%><br>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <b>SIGNUP</b>
                </div>
                <div class="col-sm-3">
                    <b>ADD CONTENT</b>
                </div>
                <div class="col-sm-3">
                    <b>SEARCH EVERYTHING</b>
                </div>
                <div class="col-sm-3">
                    <b>GET THINGS DONE</b>
                </div>
            </div>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                Create your free account and do what you want.
                </div>
                <div class="col-sm-3">
                Type notes, add attachments, share data, or schedule meetings. All in one place.
                </div>
                <div class="col-sm-3">
                Organize your notes, your way. Use notebooks, tags, or our powerful search to find everything you need quickly.
                </div>
                <div class="col-sm-3">
                Manage projects, take meeting notes, set reminders, and edit documents
                </div>
            </div>
        </div><br><br>
        <div class="signup">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <a href="{{ url('/signup') }}"><input type="submit"value="START EASYNOTE"></a></button>
                </div>
            </div>
        </div>
        </div>
    </div>
    @endsection