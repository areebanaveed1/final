@extends('layout1')
@extends('layouts.app')
@section('title','Project Planner')
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
            <div class="col-sm-3"><br><br>
                <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/77/e174d0e74611e6b2743b9a2fd00feb/projectplan1logo.png?auto=format%2Ccompress&dpr=2.625"height=60% width=50% align="right">
            </div>
            <div class="col-sm-6">
            <h1 style="font-style: serif;font-size:80;text-align:left">Project Planner</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="text-align:left">
                <input style="border:none;font-size:30px;font-weight:bold"type="text" value="Summary"size="10">
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                </ul>

                <input style="border:none;font-size:30px;font-weight:bold"type="text" value="Milestones"size="10">
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-10"style="text-align:center">
                <br><br>
                <table border="1px">
                <col width="80">
                <col width="80">
                <tr style="text-align:center">
                <th width="10%"><input style="border:none;font-size:25px;font-weight:bold;"type="text" value=" "size="10"></th>
                <th width="10%"><input style="border:none;font-size:25px;font-weight:bold;text-align:center"type="text" value="Week 1"size="10">
                <input style="border:none;font-size:25px;"type="text" value="DD/MM/YYYY"size="10"></th>
                <th width="10%"><input style="border:none;font-size:25px;font-weight:bold;text-align:center"type="text" value="Week 2"size="10">
                <input style="border:none;font-size:25px;"type="text" value="DD/MM/YYYY"size="10"></th>
                <th width="10%"><input style="border:none;font-size:25px;font-weight:bold;text-align:center"type="text" value="Week 3"size="10">
                <input style="border:none;font-size:25px;"type="text" value="DD/MM/YYYY"size="10"></th>
                </tr>
                <tr width="10%"style="text-align:center">
                <td width="10%"><input style="border:none;font-size:30px;font-weight:bold;background-color:lightgrey"type="text" value="Task 1"size="10"></td>
                <td width="10%"><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td width="10%"><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td width="10%"><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                <tr width="10%"style="text-align:center">
                <td width="10%"><input style="border:none;font-size:30px;font-weight:bold;background-color:lightgrey"type="text" value="Task 2"size="10"></td>
                <td width="10%"><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td width="10%"><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td width="10%"><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                <tr width="10%" style="text-align:center">
                <td width="10%"><input style="border:none;font-size:30px;font-weight:bold;background-color:lightgrey"type="text" value="Task 3"size="10"></td>
                <td width="10%"><input style="border:none;font-size:30px;"type="text" value=" "size="15"></td>
                <td width="10%"><input style="border:none;font-size:30px;"type="text" value=" "size="15"></td>
                <td width="10%"><input style="border:none;font-size:30px;"type="text" value=" "size="15"></td>
                </tr>              
                </table><br><br><br>
                
            </div>
        </div>
        <input type="submit"value="ADD PROJECT PLAN">
    </div>
    @endsection