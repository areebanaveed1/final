@extends('layout1')
@extends('layouts.app')
@section('title','Share Data')
@section('content')
<head>
            <style>
input[type=submit] {
  background: linear-gradient(to top, #837CE2, #4A42AD);
  color: white;
  padding: 12px 10px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  margin-left:0%;
  width:10px;
}
input[type="submit"]:hover{
                 background: linear-gradient(to top, #4A42AD,#837CE2);
}
.wrapper{
                background:white;
                color: #fff;
                width: 800px;
                height: 600px;
                top: 50%;
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
</style>
</head>
<body style="background:linear-gradient(to bottom, #A878F7,#E26FF7);">
<div class="wrapper">
    <form>
<div class="container" >
    <div class="row">
        <div class="col-sm-12">
            <img style="margin-left:20%;margin-top:-70px"src="images/share.jpg">
            <h1 style="color:black;text-align:center">Share Data</h1><br>
            <p style="color:black;font-size:20px"><i>Share your work with your friends through Facebook, Twitter, and Instagram</i></p>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=example.org" target="_blank">
                        <img border="0" src="https://townsquare.media/site/11/files/2017/04/facebook-logo.png?w=980&q=75" width="50%" height="100%"></a>
                    </div>

                    <div class="col-sm-4">
                    <a href="https://twitter.com/" target="_blank">
                        <img border="0" src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" width="50%" height="100%"></a>
                    </div>

                    <div class="col-sm-4">
                    <a href="https://www.instagram.com/?url=https://www.drdrop.co/" target="_blank" rel="noopener">
                        <img border="0" src="https://www.pnglot.com/pngfile/detail/81-816579_whatsapp-twitter-instagram-facebook-logo.png" width="60%" height="100%"></a>
                    </div>
                </div>
            </div>
        </div>
</div>
        </form>
</div>
     
  @endsection