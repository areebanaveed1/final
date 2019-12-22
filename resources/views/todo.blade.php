@extends('layout1')
@extends('layouts.app')
@section('title','To-Do')

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
            <div class="col-sm-6">
                <img src="images/add.jpg"height=100% width=20% align="right">
            </div>
            <div class="col-sm-6">
            <h1 style="font-style: serif;font-size:80">To-Do</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12"style="text-align:center">
                
                
                    <input style="border:none;font-size:30px;font-weight:bold"type="text" value="Today"><br>
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value="Start a to-do list"></li>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                </ul>

                <input style="border:none;font-size:30px;font-weight:bold"type="text" value="Tommorow"><br>
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                </ul>

                <input style="border:none;font-size:30px;font-weight:bold"type="text" value="This Week"><br>
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                </ul>

                <input style="border:none;font-size:30px;font-weight:bold"type="text" value="Someday"><br>
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
<input type="submit"value="ADD TO-DO">
</div>
@endsection