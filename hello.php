<?php
$name = $_POST['name'];
$to = $_POST['email'];
$branch = $_POST['branch'];
$specialization = $_POST['specialization'];
$subject="Thanks for your interest in NSUT.";
$message="
<!DOCTYPE html>
  <head>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Template</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&display=swap');

      * 
      {
        margin: 0;
        padding: 0;
        border: 0;
      }

      body 
      {
        font-family: 'Raleway', sans-serif;
        background-color: #d8dada;
        font-size: 19px;
        max-width: 800px;
        margin: 0 auto;
        padding: 3%;
      }

      img 
      {
        max-width: 100%;
      }

      header
      {
        width: 98%;
      }
      .one-col{
        padding-top:20%;}
      #logo 
      {
        max-width: 120px;
        margin: 3% 0 3% 3%;
        float: left;
      }

      #wrapper 
      {
        background-color: rgb(39, 36, 36);
      }

      #social 
      {
        float: right;
        margin: 3% 2% 1% 3%;
        list-style-type: none;
      }
      li{
        color: white;
        font-size: 20px;
      }

      h1,h2,p 
      {
        margin: 3%;
      }
      .btn 
      {
        float: right;
        margin: 0 2% 4% 0;
        background-color: yellow;
        color: black;
        text-decoration: none;
        font-weight: 800;
        padding: 8px 12px;
        border-radius: 8px;
        letter-spacing: 2px;
      }

      hr 
      {
        height: 1px;
        background-color: white;
        clear: both;
        width: 96%;
        margin: auto;
      }

      #contact 
      {
        text-align: left;
        padding-bottom: 3%;
        line-height: 16px;
        font-size: 12px;
        color: white;
      }
      .content 
      {
          color: white;
      }
      
    </style>
  </head>
  <body>
    <div id='wrapper'>
      <header>
        <div id='logo'>
          <img
            src='https://i.imgur.com/WVRFhTt.png'>
        </div>
        <div>
          <ul id='social'>
            <li>Netaji Subhas University of Technology</li>
            <li>formerly known as Netaji Subhas Institute of Technology</li>
            <li>(Govt. of NCT of Delhi)</li>
          </ul>
        </div>
      </header>
      <div class='one-col'>
        <h1 class='content'>Greetings, ".$name.".</h1>

        <h2 class='content'>We’re pleased that you’re interested in B.Tech in ".$branch." with specialization in ".$specialization."  at Netaji Subhas University of Technology. You’ve made the right choice as our graduates often secure fulfilling career at major MNCs.</h2>

        <h2 class='content'>I would like to inform you that the deadline to apply for B.Tech is on 31st December, 2021. Please complete your application, so that you don’t miss the chance of getting trained from one of the world’s best faculties. Feel free to visit our campus Mon-Sat, 9AM-5PM for quick and easy application and registration.</h2>

        <a href='http://localhost/group2/' class='btn'>Visit Our Website</a>

        <hr />

        <footer>
          <p id='contact'>
            Netaji Subhas University Of Technology <br>
            Dwarka Sector-3, Dwarka,<br>
            New Delhi-110078<br>
            Contact :- group2universitywebsite@gmail.com<br>
            Phone No:- 011-12345678
          </p>
        </footer>
      </div>
    </div>
  </body>
</html>
";
$header='MIME-Version: 1.0' . "\r\n";
$header .='Content-type: text/html; charset=iso-8859-1' . "\r\n";
$res=mail($to,$subject,$message,$header);
if($res){
  header("Location: index.html");
  die;
}
else {echo "<h1 >Failure!!!!</h1>";}
?>