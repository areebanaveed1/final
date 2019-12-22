@extends('layout')
   @section('title','Contact')
   <style>
body {font-family: Arial, Helvetica, sans-serif;}
{box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background: linear-gradient(to top, #837CE2, #4A42AD);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  margin-left:40%;
  width:20%;
}

input[type=submit]:hover {
    background: linear-gradient(to top, #4A42AD,#837CE2);
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
   @section('content')
   <div class="container-fluid">
            <div class="row"><br>
            <div class="col-sm-4"><br>
                   
                </div>
                <div class="col-sm-1"align=><br>
                    <img src="images\contact.png"height="60%" width="55%">
                    
                </div>
                <div class="col-sm-4"><br>
                    <h1 style="font-style: serif;font-size:50"><b>CONTACT US</b></h1>
                </div>
            </div>
            </div>
        <div class="container-fluid"style="background-color:white;background: linear-gradient(to right, #00d2ff, #3a7bd5)">
            <div class="row">
                <div class="col-sm-12"style="text-align:center"><pre>
                   <h4 style="color:black;"> 
Need help with EasyNote? Check out our <a style="color:white" href="{{ url('/help') }}">Help</a> page for
answers to frequently asked questions. If you can’t
find an answer there, fill in the form below and be
in touch with us..
                </h4>
                </pre>
                </div>
         
    <div class="container">
        <form action="mailto:areebanaveed082@gmail.com" method="post" enctype="text/plain">
            <label for="fname"><h5>First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="country">Country</label>
            <select id="country" name="country">
            <option value="pakistan">Pakistan</option>
            <option value="India">India</option>
            <option value="Turkey">Turkey</option>
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
    </div>
    </div>
    @endsection