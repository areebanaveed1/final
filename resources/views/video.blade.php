@extends('layout1')
@extends('layouts.app')
@section('title','Upload Video')
@section('content')
<head>
            <style>
input[type=submit] {
  background: linear-gradient(to top, #8662DF, #3B2278);
  color: white;
  padding: 12px 10px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  margin-left:0%;
  width:10px;
}
input[type="submit"]:hover{
                 background: linear-gradient(to top, #3B2278,#8662DF);
}
.wrapper{
                background:white;
                color: #fff;
                width: 800px;
                height: 700px;
                top: 60%;
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
<body >
<div class="wrapper">
<div class="container" style="background:linear-gradient(to right, #3466B8,#831BDA);width:500px;" >
    <div class="row">
        <img style="margin-left:18%;margin-top:-260px"src="images/video.png"height=100% width=80%>
            <h1 style="margin-left:20%;margin-top:-190px">Upload Videos</h1>
            <form><br><br><br>
            <h3 align="center "  style="  font-family:serif; "><font color="white"><b>Insert and Display Video As You Desire </b></font> </h3>  
            <br>  
            <h1>File Upload</h1>
                <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                    <label>Select image to upload:</label>
                    <input type="file" name="file" id="file">
                    <input type="submit" value="Upload" name="submit">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                </form>
            <table class="table table-bordered">  
                 <tr> 
                      <th> <b align='center' > <font color="white">Your Video</font> </b>
                    </th>  
                 </tr> </div>
               
                </table>
        </div>
</div>
</div>
     
  @endsection