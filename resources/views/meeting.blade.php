@extends('layout1')
@extends('layouts.app')
@section('title','Meeting Note')
<link href="js-alarm-clock.css" rel="stylesheet">
    <script src="js-alarm-clock.js"></script>
<style>
                input[type=submit] {
  background: linear-gradient(to top, #837CE2, #4A42AD);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  margin-left:30%;
  width:40%;
}
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 300%;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

</style>
@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-sm-8"><br><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-5"><br>
                        <img src="images/meeting.jpg"height=90% width=60% align="right">
                    </div>
                    <div class="col-sm-5"><br>
                        <h1 style="font-style: serif;font-size:50px">Meeting Note</h1>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-5"><br>
                <table border="2px"class="table table-hover">
                <tr>
                    <th>Date & Time</th>
                    <td><input style="border:none"type="text"size=100></td>
                </tr><br>
                <tr>
                    <th>Goals</th>
                    <td><input style="border:none" type="text"size=100 ></td>
                </tr><br>
                <tr>
                    <th>Attendees</th>
                    <td><input style="border:none" type="text"size=100 ></td>
                </tr>
                </table>

                <h2>Agenda</h2>
                <ul>
                    <li><input style="border:none"type="text"size=100 ></li>
                    <li><input style="border:none"type="text"size=100 ></li>
                    <li><input style="border:none"type="text"size=100></li>
                </ul>

                <h2>Notes</h2>
                <ul>
                    <li><input style="border:none"type="text"size=100></li>
                    <li><input style="border:none"type="text"size=100 ></li>
                    <li><input style="border:none"type="text"size=100></li>
                </ul>
                <br><br>
               
            </div>
            
</div>
  
<div class="popup" onclick="myFunction()"><input style="width:150%"type="submit"value="Add Alarm">
<span class="popuptext" id="myPopup">
                <div id="ctime">
                <h1 class="header">THE CURRENT TIME</h1>
                <div class="square">
                    <div class="digits" id="chr">00</div>
                    <div class="text">HR</div>
                </div>
                <div class="square">
                    <div class="digits" id="cmin">00</div>
                    <div class="text">MIN</div>
                </div>
                <div class="square">
                    <div class="digits" id="csec">00</div>
                    <div class="text">SEC</div>
                </div>
                </div>

                <!-- [SET ALARM] -->
                <div id="tpick">
                <h1 class="header">
                    SET ALARM
                </h1>
                <div id="tpick-h"></div>
                <div id="tpick-m"></div>
                <div id="tpick-s"></div>
                <div>
                    <input type="button" value="Set" id="tset"/>
                    <input type="button" value="Reset" id="treset" disabled/>
                </div>
                </div>

                <!-- [ALARM SOUND] -->
                <audio id="alarm-sound" loop>
                <source src="wake-up-sound.mp3" type="audio/mp3">
                </audio>
            </div> 
            
        </div> 
</span>
</div>     
<br><br>  
        <input type="submit"value="ADD MEETING PLAN">
   

        <script>

function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

    @endsection
