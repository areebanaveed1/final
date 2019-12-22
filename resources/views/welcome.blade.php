   @extends('layout')
   @section('title','Home')
   
   @section('header')
   @parent
   @endsection

   @section('nav')
   @parent
   @endsection
  @section('content')
        

            <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12"style="font-size:45;background:url('http://getwallpapers.com/wallpaper/full/2/f/6/299760.jpg');text-align:center;">
                    <h3 style="text-align:right"><b style="color:white"> <br><br>
                    To Provide You With The Best You Want.<br>
                    In An Organized and Easy Way.<br>
                    Add Reminders If You Forgot Things.<br>
                    Schedule Meetings With Your Clients.<br>
                    Upload Files & Share Data.<br><br><br><br>
                    </b>
                    </h3>
                </div>
            </div>
        </div>
    <div id="reminder">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 style="color:#1D44B7;text-align:left;font-style: serif"><br><br><b>
                        Add Reminders &
                        Remember Everything
                    </b></h1><br>
                    <h2>Add reminders to remember important things and do at time.</h2>
                </div>
                <div class="col-sm-6"><br>
                    <img src="images\remind.jpg"  height=100% width=50% align="right">
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br>

    <div id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6"><br>
                        <img src="images\meeting.jpg" height=50% width=55% align="left">
                    </div>
                    <div class="col-sm-6">
                            <h1 style="color:#1D44B7;text-align:left;font-style: serif"><br><br><b>
                                Schedule Meeting
                                With Clients 
                        </b></h1><br>
                        <h2>Schedule meetings you will be on time and manage meetings easily.</h2>
                    </div>
                </div>
            </div>
    </div><br><br><br><br>

        <div id="record">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 style="color:#1D44B7;text-align:left;font-style: serif"><br><br><b>
                                Keep Record &
                                Manage Your Work
                            </b></h1><br>
                            <h2>Keep your record easily amd see them when you want.</h2>
                        </div>
                        <div class="col-sm-6"><br>
                            <img src="images\record.jpg" height=100% width=50% align="right">
                        </div>
                    </div>
                </div>
        </div><br><br><br><br>

        <div id="upload">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6"><br>
                            <img src="images\upload.jpg" height=100% width=50% align="left">
                        </div>
                        <div class="col-sm-6">
                            <h1 style="color:#1D44B7;text-align:left;font-style: serif"><br><br><b>
                                Upload Files &
                                See When You Want
                            </b></h1><br>
                            <h2>Upload files easily and can view anytime you want without loosing your files.</h2>
                        </div>
                       
                    </div>
                </div>
         </div><br><br><br><br>

            <div id="share">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 style="color:#1D44B7;text-align:left;font-style: serif"><br><br><b>
                                    Share Data
                                    With Your Friends
                                </b></h1><br>
                                <h2>Share your work with your friends and let them know want you have done.</h2>
                            </div>
                            <div class="col-sm-6"><br>
                                <img src="images\share.jpg" height=100% width=70% align="right">
                            </div>
                        </div>
                    </div>
            </div><br><br><br><br>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12"style="font-style: serif;text-align:center">
                    <a href="{{ url('/working') }}"><h1><b>How EasyNote Works?</b></h1></a>
                    </div>
                </div>
            </div>

            <div class="container-fluid" style="background-color:#1D44B7">
      <div class="row">
        <div class="col-sm-6"style="color:white"><br>
        Copyright &copy;
            Areeba Maida
        </div>
        <div class="col-sm-6"><br>
            <a href="https://www.facebook.com/">
            <img style="margin-left:50%" src="https://townsquare.media/site/11/files/2017/04/facebook-logo.png?w=980&q=75" width="5%" height="40%"></a>
            <a href="https://www.twitter.com/">
            <img style="margin-top:-25px;margin-left:59%" src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" width="7%" height="50%"></a>
            <a href="https://www.instagram.com/">
            <img style="margin-top:-25px;margin-left:68%"src="http://pluspng.com/img-png/instagram-png-instagram-png-icon-1024.png" width="5%" height="40%"></a>
        </div>
      </div>
    </div>
    </div>
    @endsection
    </body>
</html>
