@extends('layout1')
@extends('layouts.app')
@section('title','All Notes')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
ul.timeline {
    list-style-type: none;
    position: relative;
    padding-left: 1.5rem;
}

 /* Timeline vertical line */
ul.timeline:before {
    content: ' ';
    background: #fff;
    display: inline-block;
    position: absolute;
    left: 16px;
    width: 4px;
    height: 100%;
    z-index: 400;
    border-radius: 1rem;
}

li.timeline-item {
    margin: 20px 0;
}

/* Timeline item arrow */
.timeline-arrow {
    border-top: 0.5rem solid transparent;
    border-right: 0.5rem solid #fff;
    border-bottom: 0.5rem solid transparent;
    display: block;
    position: absolute;
    left: 2rem;
}

/* Timeline item circle marker */
li.timeline-item::before {
    content: ' ';
    background: #ddd;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #fff;
    left: 11px;
    width: 14px;
    height: 14px;
    z-index: 400;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

body {
    background: #E8CBC0;
    background: -webkit-linear-gradient(to right, #E8CBC0, #636FA4);
    background: linear-gradient(to right, #E8CBC0, #636FA4);
    min-height: 100vh;
}

.text-gray {
    color: #999;
}
</style>
</head>
<body>

<div class="container py-5">



        <div class="row">
            <div class="col-lg-7 mx-auto">
                
                
                <ul class="timeline">
                    <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <input style="border:none;font-size:30px"type="text"value="Meeting Note"size=30%>
                        <span class="small text-gray">
                        <table border="2px"class="table table-hover">
                <tr>
                    <th>Date & Time</th>
                    <td><input style="border:none"type="text"size=40%></td>
                </tr><br>
                <tr>
                    <th>Goals</th>
                    <td><input style="border:none" type="text"size=40%></td>
                </tr><br>
                <tr>
                    <th>Attendees</th>
                    <td><input style="border:none" type="text"size=40%></td>
                </tr>
                </table>

                Agenda
                <ul>
                    <li><input style="border:none"type="text"size=40%></li>
                    <li><input style="border:none"type="text"size=40%></li>
                    <li><input style="border:none"type="text"size=40%></li>
                </ul>

                Notes
                <ul>
                    <li><input style="border:none"type="text"size=40%></li>
                    <li><input style="border:none"type="text"size=40%></li>
                    <li><input style="border:none"type="text"size=40%></li>
                </ul>
                <br><br>
                        </span>
                        
                    </li>

                    <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <input style="border:none;font-size:30px"type="text"value="To-Do"size=30%>
                        <span class="small text-gray"> <input style="border:none;"type="text" value="Today"><br>
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;"type="text" value="Start a to-do list"></li>
                    <li style="list-style-position: inside"><input style="border:none;"type="text" value=" "></li>
                </ul>

                <input style="border:none;"type="text" value="Tommorow"><br>
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                </ul>

                <input style="border:none;"type="text" value="This Week"><br>
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                </ul>

                <input style="border:none;"type="text" value="Someday"><br>
                <ul>
                    <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                </ul>
                    </li>
                    <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <input style="border:none;font-size:30px"type="text"value="Project Planner"size=30%>
                        <input style="border:none;"type="text" value="Summary"size="10">
                        <ul>
                            <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                        </ul>

                        <input style="border:none;"type="text" value="Milestones"size="10">
                        <ul>
                            <li style="list-style-position: inside"><input style="border:none;font-size:20px;"type="text" value=" "></li>
                        </ul>
                    </li>
                    
                </ul>

            </div>
        </div>
    </div>
    @endsection