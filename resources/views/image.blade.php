@extends('layout1')
@extends('layouts.app')
@section('title','Upload Images')
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
                width: 900px;
                height: 700px;
                top: 70%;
                left:45%;
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
<div class="container" style="align:left;background:linear-gradient(to bottom, #5324C0,#3136C9);width:500px;" >
    <div class="row">
        <img style="margin-left:25%;margin-top:-200px"src="images/image.png"height=60% width=60%>
            <h1 style="margin-left:20%;margin-top:-100px">Upload Images</h1>
            <form><br><br><br>
            <h3 align="center "  style="  font-family:serif; "font color="white"><b>Insert and Display Images As You Desire </b></font> </h3>  
            <br>  
            <form enctype="multipart/form-data" method="post" action="{{url('admin/post/insert')}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="imageInput">File input</label>
        <input data-preview="#preview" name="input_img" type="file" id="imageInput">
        <img class="col-sm-6" id="preview"  src="">
    </div>
    <div class="form-group">
        <input class="form-control" type="submit">
    </div>
</form>
            <table class="table table-bordered">  
                 <tr> 
                      <th> <b align='center' > <font color="white">Your Image</font> </b>
                    </th>  
                 </tr> </div>
               
                </table>
        </div>
</div>
</div>
     
  @endsection