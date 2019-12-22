@extends('layout1')
@extends('layouts.app')
@section('title','Upload Audio')
@section('content')
<head>
            <style>
input[type=submit] {
  background: linear-gradient(to top, #5CC5D3, #13579B);
  color: white;
  padding: 12px 10px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  margin-left:0%;
  width:20px;
}
input[type="submit"]:hover{
                 background: linear-gradient(to top, #13579B,#5CC5D3);
}
.wrapper{
                background:white;
                color: #fff;
                width: 900px;
                height: 700px;
                top: 70%;
                left: 45%;
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
<div class="container" style="background:linear-gradient(to bottom, #5CC5D3,#2E8FB9);width:500px;" >
    <div class="row">
        <img style="margin-left:32%;margin-top:-90px"src="https://icon-library.net/images/music-file-icon/music-file-icon-20.jpg"height=50% width=40%>
            <h1 style="margin-left:20%;margin-top:0px">Upload Audio</h1>
            <form><br><br><br>
            <h3 align="center "  style="  font-family:serif; "><font color="white"><b>Insert and Listen Audios As You Desire </b></font> </h3>  
            <br>  
            <input type="file" name="audio" accept="audio/*">
                 <br>  <br>
                 <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                        </form>
            <br><br><br> 
            <table class="table table-bordered">  
                 <tr> 
                      <th> <b align='center' > <font color="white">Your Audio</font> </b>
                    </th>  
                 </tr> </div>
               
                </table>
        </div>
</div>
</div>
     
  @endsection