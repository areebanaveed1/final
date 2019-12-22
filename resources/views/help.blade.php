@extends('layout')
   @section('title','Help')
    
   @section('content')
   <br><br>
   <div class="container"style="cursor: pointer;">
    <div class="row">
        <div class="col-sm-4">
            <div class="container-fluid">
            <div id="test">
                <div class="row"><br><br>
                    <div class="col-sm-6"><br>
                        <img src="images/contact.png"align="right"height="50%"width="25%">
                    </div>
                    <div class="col-sm-6">
                        <a style="text-decoration:none;color:blue"href="{{url('/contact')}}"><h4>Contact Us</h4></a>
                        <h6>We will reply you in few minutes.</h6>
                    </div>
                </div>
            </div>
            </div>
        </div><br>
        <div class="col-sm-8">
            <div class="container-fluid">
                <div class="row"><br><br>
                    <div class="col-sm-6"><br>
                        <img src="http://www.iconarchive.com/download/i43047/oxygen-icons.org/oxygen/Categories-system-help.ico"align="right"height="50%"width="25%">
                    </div>
                    <div class="col-sm-6">
                        <a style="text-decoration:none;color:blue"href="#help"><h4>Need Help</h4></a>
                        <h6>Have any issue? We will answer you.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
    <br><br>
    <div id="help">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"style="font-size:45;background-size:100% 100%;text-align:center;">
                   <img src="http://www.iconarchive.com/download/i43047/oxygen-icons.org/oxygen/Categories-system-help.ico"height=70% width=40% align="right">
                </div>
                <div class="col-sm-8"style="font-size:45;background-size:100% 100%;text-align:center;"><br><br>
                   <h1 style="font-style: serif;font-size:50px;text-align:left">How can we Help you?</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12"style="font-size:45;background-size:100% 100%;text-align:center;">
                   <a style="text-decoration:none"href="#contact"><h3>How can I contact you?</h3></a><br>
                   <a style="text-decoration:none"href="#delete"><h3>I accidentally deleted a note. Can I recover it?</h3></a><br>
                   <a style="text-decoration:none"href="#lost"><h3>I lost a note or some text from a note. What can I do?</h3></a><br>
                   <a style="text-decoration:none"href="#length"><h3>What’s the maximum length of a note?</h3></a><br>
                   <a style="text-decoration:none"href="#share"><h3>How can I share a note?</h3></a><br>
                </div>
            </div>
        </div><br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8"style="font-size:45;background-size:100% 100%;text-align:center;">
                   <div id="contact">
                   <h1>How can I contact you?</h1>
                   <p style="font-size:20px">If the questions below don’t answer your questions please contact us <a href="{{ url('/contact') }}">here!</a></p>
                   </div><br>
                   <div id="delete">
                   <h1>I accidentally deleted a note. Can I recover it?</h1>
                   <p style="font-size:20px;text-align: justify;">Yes, all deleted notes go into your Trash. To see the notes that are in your Trash,<br>you need to view the “Trash” tag. 
                   On iOS and Android, simply return to your main<br>notes list and open the tags drawer. 
                   You’ll see “Trash” below the “All Notes” row. In the web app, hover over the tag in your note list, and select Trash.</p><br>
                   <p style="font-size:20px;text-align: justify;">When viewing your Trash, you can choose to restore a previously deleted note by swiping from
                    right to left on the note then by tapping “restore.” It will then appear back inside All Notes.</p>
                   </div>
                   <div id="lost">
                   <h1>I lost a note or some text from a note. What can I do?</h1>
                   <p style="font-size:20px;text-align: justify;">In the vast majority of cases, EasyNote’s synchronization works great. 
                   We handle millions of synchronization requests each day without any problems. But if you do lose your data, even just a single character, and even if it’s not our fault, we want to hear about it. 
                   The integrity of your notes is our top priority. Any form of data loss is completely unacceptable.</p><br>
                   <p style="font-size:20px;text-align: justify;">The first thing is to check the note history, most EasyNote apps support viewing previous versions of a note. 
                   Be sure to check the history of any blank or duplicate notes you can see. Most of the time you will find your content there. If not, you may want to check the
                   Trash and restore the note from there. Notes put in the Trash still retain their version history.</p><br>
                   <p style="font-size:20px;text-align: justify;">We’re in the process of adding additional safeguards and fallback measures for your notes. 
                   Please contact us regarding any form of data loss and try to provide as many details as you can remember about the circumstances that caused
                   the problem so we can ensure it won’t happen again in the future.</p>
                   </div>
                   <div id="length">
                   <h1>What’s the maximum length of a note?</h1>
                   <p style="font-size:20px;text-align: justify;">If You can create very long notes if you absolutely have to, but we don’t recommend making notes longer than several thousand words. 
                   Huge notes can take a long time to process both in the web app and on your device.</p>
                   </div><br>
                   <div id="share">
                   <h1>How can I share a note or collaborate with others?</h1>
                   <p style="font-size:20px;text-align: justify;">If you’d like others to view and edit one of your notes, add their email address as a tag. 
                   The shared note will then pop up in their list of notes. They’ll need to have their own EasyNote
                    account first. Similarly, if you’d like to work on a note together, 
                   have them add your email address as a tag to collaborate. On iOS and Android, instead of adding your
                   email address as a tag, you can tap the Info panel icon when viewing a note, then tap Collaborate.</p><br>
                   <p style="font-size:20px;text-align: justify;">If you’d like to share a view-only version, you can use the publish to web feature.</p><br>
                   </div><br>
                </div>
                <div class="col-sm-2">
            </div>
        </div>
</div>
        
    @endsection