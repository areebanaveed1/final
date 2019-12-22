@extends('layout1')
@extends('layouts.app')
@section('title','Meal Planner')
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
            <div class="col-sm-3"><br>
                <img src="https://lh3.googleusercontent.com/g1fNflTWRuLqRO8Ijx0V8NX2gObwoJ0NhGQtmiq3-kHhiUJnr7mAw__Xwk6Xn3g17Sg"height=80% width=60% align="right">
            </div>
            <div class="col-sm-3"><br>
            <h1 style="font-style: serif;font-size:80">Meal Planner</h1>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-10"style="text-align:center">
                <input style="margin-left:-140px;border:none;font-size:30px;font-weight:bold"type="text" value="Plan"><br><br><br><br>
                <table border="1px">
                <col width="100">
                <col width="50">
                <tr style="text-align:center">
                <th><input style="border:none;font-size:25px;font-weight:bold;"type="text" value=" "size="10"></th>
                <th><input style="border:none;font-size:25px;font-weight:bold"type="text" value="Breakfast"size="10"></th>
                <th><input style="border:none;font-size:25px;font-weight:bold"type="text" value="Lunch"size="10"></th>
                <th><input style="border:none;font-size:25px;font-weight:bold;"type="text" value="Dinner"size="10"></th>
                </tr>
                <tr style="text-align:center">
                <td><input style="border:none;font-size:30px;font-weight:bold;background-color:lightgrey"type="text" value="Sunday"size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                <tr style="text-align:center">
                <td><input style="border:none;font-size:30px;font-weight:bold;background-color:lightgrey"type="text" value="Monday"size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                <tr style="text-align:center">
                <td><input style="border:none;font-size:30px;font-weight:bold;background-color:lightgrey"type="text" value="Tuesday"size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                <tr style="text-align:center">
                <td><input style="border:none;font-size:30px;font-weight:bold;background-color:lightgrey"type="text" value="Wednesday"size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                <tr style="text-align:center">
                <td><input style="border:none;font-size:30px;font-weight:bold;background-color:lightgrey"type="text" value="Thursday"size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                <tr style="text-align:center">
                <td><input style="border:none;font-size:30px;font-weight:bold;background-color:lightgrey"type="text" value="Friday"size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                <tr style="text-align:center">
                <td><input style="border:none;font-size:30px;font-weight:bold;background-color:lightgrey"type="text" value="Saturday"size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                <td><input style="border:none;font-size:30px;"type="text" value=" "size="10"></td>
                </tr>
                </table><br><br><br>
                <input style="border:none;font-size:30px;font-weight:bold"type="text" value="Shopping List"size="10">
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                </ul>
            </div>
            <input type="submit"value="ADD MEAL PLAN">
        </div>
    </div>
    @endsection