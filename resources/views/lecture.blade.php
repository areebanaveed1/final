@extends('layout1')
@extends('layouts.app')
@section('title','Lecture Notes')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <link rel="stylesheet" href="calandar.css">
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
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <img src="images/lecture.jpg"height=80% width=40% align="right">
            </div>
            <div class="col-sm-6">
            <h1 style="font-style: serif;font-size:80">Lecture Notes</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="text-align:left">
                &nbsp;&nbsp;&nbsp;&nbsp;<input style="border:none;font-size:30px;font-weight:bold;color:grey"type="text" value="Topic"size="10">
                <input style="border:none;font-size:20px;color:grey"type="text" value=" "><br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input style="border:none;font-size:20px;"type="text" value="Course"size="10">
                <input style="border:none;font-size:20px;"type="text" value=" "><br>
    
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input style="border:none;font-size:20px;"type="text" value="Date"size="10">
                <input style="border:none;font-size:20px;"type="text" value=" "><br>

                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input style="border:none;font-size:20px;"type="text" value="Instructor"size="10">
                <input style="border:none;font-size:20px;"type="text" value=" "><br>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-10"style="text-align:center">
                <br><br>
                <table border="1px">
                <col width="100">
                <col width="80%">
                <tr>
                <th>Questions</th>
                <th>Notes</th>
                </tr>
                <tr>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                <tr>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                <tr>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                </table><br><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input style="border:none;font-size:30px;font-weight:bold"type="text" value="Summary"size="10">
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                    
                </ul>
            </div>
        </div>
        <input type="submit"value="ADD LECTURE NOTES">
    </div>
</div>

    <div class="main">
  <div class="sideb">
    <div class="header"><i class="fa fa-angle-left" aria-hidden="true"></i><span><span class="month"> </span><span class="year"></span></span><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    <div class="calender">
      <table>
        <thead>
          <tr class="weedays">
            <th data-weekday="sun" data-column="0">Sun</th>
            <th data-weekday="mon" data-column="1">Mon</th>
            <th data-weekday="tue" data-column="2">Tue</th>
            <th data-weekday="wed" data-column="3">Wed</th>
            <th data-weekday="thu" data-column="4">Thu</th>
            <th data-weekday="fri" data-column="5">Fri</th>
            <th data-weekday="sat" data-column="6">Sat</th>
          </tr>
        </thead>
        <tbody>
          <tr class="days" data-row="0">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="1">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="2">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="3">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="4">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="5">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="showDate"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
  </div>
  <div class="right-wrapper">
    <div class="header"><span></span></div><span class="day"></span><span class="month"></span>
  </div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 
    <script  src="calandar.js"></script>
    @endsection