<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where username = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['id'] = $user_data['id'];	
					}
          else
          {
            header("Location: fail.html");
            die;
          }
				}
        else{
          header("Location: fail.html");
          die;
        }
			}
		}
    else
		{
			header("Location: fail.html");
      die;
		}
	}

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
              <img class="profile_img" src="<?php echo $user_data['id']; ?>.jpeg" alt="">
              <h3><?php echo $user_data['name']; ?></h3>
            </div>
            <div class="card-body">
              <p class="mb-0"><strong class="pr-1">Roll No:</strong><?php echo $user_data['rollno']; ?></p>
              <p class="mb-0"><strong class="pr-1">Date of Birth:</strong><?php echo $user_data['dob']; ?></p>
              <p class="mb-0"><strong class="pr-1">Gender:</strong><?php echo $user_data['gender']; ?></p>
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
                  <td><?php echo $user_data['degree']; ?></td>
                </tr>
                <tr>
                  <th width="30%">Branch Name</th>
                  <td width="2%">:</td>
                  <td><?php echo $user_data['bname']; ?></td>
                </tr>
                <tr>
                  <th width="30%">Specialization</th>
                  <td width="2%">:</td>
                  <td><?php echo $user_data['spec']; ?></td>
                </tr>
                <tr>
                  <th width="30%">Section</th>
                  <td width="2%">:</td>
                  <td><?php echo $user_data['sec']; ?></td>
                </tr>
                <tr>
                  <th width="30%">Blood Group</th>
                  <td width="2%">:</td>
                  <td><?php echo $user_data['blood']; ?></td>
                </tr>
                <tr>
                  <th width="30%">Mobile No</th>
                  <td width="2%">:</td>
                  <td><?php echo $user_data['mobile']; ?></td>
                </tr>
                <tr>
                  <th width="30%">Email Address</th>
                  <td width="2%">:</td>
                  <td><?php echo $user_data['email']; ?></td>
                </tr>
                <tr>
                  <th width="30%">Residential Address</th>
                  <td width="2%">:</td>
                  <td><?php echo $user_data['address']; ?></td>
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
                <td><?php echo $user_data['c1']; ?></td>
              </tr>
              <tr>
                <th width="30%">Computer Architecture and Organization</th>
                <td width="2%">:</td>
                <td><?php echo $user_data['c2']; ?></td>
              </tr>
              <tr>
                <th width="30%">Database Management System</th>
                <td width="2%">:</td>
                <td><?php echo $user_data['c3']; ?></td>
              </tr>
              <tr>
                <th width="30%">Design and Analysis of Algorithms</th>
                <td width="2%">:</td>
                <td><?php echo $user_data['c4']; ?></td>
              </tr>
              <tr>
                <th width="30%">Microprocessors and Microcontrollers</th>
                <td width="2%">:</td>
                <td><?php echo $user_data['c5']; ?></td>
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
                <td><?php echo $user_data['s1']; ?></td>
              </tr>
              <tr>
                <th width="30%">Semester 2</th>
                <td width="2%">:</td>
                <td><?php echo $user_data['s2']; ?></td>
              </tr>
              <tr>
                <th width="30%">Semester 3</th>
                <td width="2%">:</td>
                <td><?php echo $user_data['s3']; ?></td>
              </tr>
              <tr>
                <th width="30%">Semester 4</th>
                <td width="2%">:</td>
                <td><?php echo $user_data['s4']; ?></td>
              </tr>
              <tr>
                <th width="30%">Semester 5</th>
                <td width="2%">:</td>
                <td><?php echo $user_data['s5']; ?></td>
              </tr>
              <tr>
                <th width="30%">Semester 6</th>
                <td width="2%">:</td>
                <td><?php echo $user_data['s6']; ?></td>
              </tr>
              <tr>
                <th width="30%">Semester 7</th>
                <td width="2%">:</td>
                <td><?php echo $user_data['s7']; ?></td>
              </tr>
              <tr>
                <th width="30%">Semester 8</th>
                <td width="2%">:</td>
                <td><?php echo $user_data['s8']; ?></td>
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