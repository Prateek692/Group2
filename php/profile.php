<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>



















<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Student Profile</title>
        <link rel="icon" href="images/icon.jpg">
        <link rel="stylesheet" href="student_profile.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    </head>
<body onload="delay()">
    <div id="loading">
    </div>
    <div class="logout">
      <a href="login.html"><button>Logout</button></a>
    </div>
    <h1 style="color: black; font-size: 40px; text-align: center;">Student Profile</h1>
<!-- Student Profile -->
<div class="student-profile">
        <div class="card">
            <div class="card-header">
              <img class="profile_img" src="https://placeimg.com/640/480/arch/any" alt="">
              <h3><?php echo $user_data['username']; ?></h3>
            </div>
            <div class="card-body">
              <p class="mb-0"><strong class="pr-1">Roll No:</strong>321000001</p>
              <p class="mb-0"><strong class="pr-1">Date of Birth:</strong>4</p>
              <p class="mb-0"><strong class="pr-1">Gender:</strong>A</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
              <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
            </div>
            <div class="card-body pt-0">
              <table class="table table-bordered">
                <tr>
                  <th width="30%">Degree</th>
                  <td width="2%">:</td>
                  <td>125</td>
                </tr>
                <tr>
                  <th width="30%">Branch Name</th>
                  <td width="2%">:</td>
                  <td>2020</td>
                </tr>
                <tr>
                  <th width="30%">Specialization</th>
                  <td width="2%">:</td>
                  <td>Group</td>
                </tr>
                <tr>
                  <th width="30%">Section</th>
                  <td width="2%">:</td>
                  <td>B+</td>
                </tr>
                <tr>
                  <th width="30%">Blood Group</th>
                  <td width="2%">:</td>
                  <td>Male</td>
                </tr>
                <tr>
                  <th width="30%">Mobile No</th>
                  <td width="2%">:</td>
                  <td>Male</td>
                </tr>
                <tr>
                  <th width="30%">Email Address</th>
                  <td width="2%">:</td>
                  <td>Male</td>
                </tr>
                <tr>
                  <th width="30%">Residential Address</th>
                  <td width="2%">:</td>
                  <td>Male</td>
                </tr>
              </table>
            </div>
        </div>
</div>
<!-- Student Profile -->
<div class="student-profile">
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Course-Wise Attendance</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Web Technology</th>
                <td width="2%">:</td>
                <td>125</td>
              </tr>
              <tr>
                <th width="30%">Computer Architecture and Organization</th>
                <td width="2%">:</td>
                <td>2020</td>
              </tr>
              <tr>
                <th width="30%">Database Management System</th>
                <td width="2%">:</td>
                <td>Group</td>
              </tr>
              <tr>
                <th width="30%">Design and Analysis of Algorithms</th>
                <td width="2%">:</td>
                <td>B+</td>
              </tr>
              <tr>
                <th width="30%">Microprocessors and Microcontrollers</th>
                <td width="2%">:</td>
                <td>Male</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Semester Wise GPA</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Semester 1</th>
                <td width="2%">:</td>
                <td>125</td>
              </tr>
              <tr>
                <th width="30%">Semester 2</th>
                <td width="2%">:</td>
                <td>2020</td>
              </tr>
              <tr>
                <th width="30%">Semester 3</th>
                <td width="2%">:</td>
                <td>Group</td>
              </tr>
              <tr>
                <th width="30%">Semester 4</th>
                <td width="2%">:</td>
                <td>Group</td>
              </tr>
              <tr>
                <th width="30%">Semester 5</th>
                <td width="2%">:</td>
                <td>Group</td>
              </tr>
              <tr>
                <th width="30%">Semester 6</th>
                <td width="2%">:</td>
                <td>Group</td>
              </tr>
              <tr>
                <th width="30%">Semester 7</th>
                <td width="2%">:</td>
                <td>Group</td>
              </tr>
              <tr>
                <th width="30%">Semester 8</th>
                <td width="2%">:</td>
                <td>Group</td>
              </tr>
            </table>
          </div>
        </div>
</div>
</body>
    <script>/*Loader*/
    var preloader=document.getElementById('loading');
             function delay(){
                 setInterval(myFunction,1500);
             }
             function myFunction(){
                 preloader.style.display='none';
             }
    </script>
</html>