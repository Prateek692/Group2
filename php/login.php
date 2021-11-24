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
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>University Website</title>
        <link rel="icon" href="/images/icon.jpg">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body onload="delay()">
        <div id="loading">
        </div>
    
        <section class="sub-header">
            <nav>
                <a href="index.html"><img src="images/logo.png"></a>
                <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="faq.html">FAQs</a></li>
					<li><a href="course.html">OUR COURSES</a></li>
					<li><a href="notices.html">NOTICES</a></li>
					<li><a href="contact.html">CONTACT US</a></li>
					<li><a href="login.php">LOGIN</a></li>
					<li><a href="locate.html"><i class="fa fa-map-marker" style="color: white; display: contents; font-size: 25px;"></i></a></li>
				</ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
        </section>
    <div class="login-container" id="login-container">
        <div class="form-container sign-up-container">
            <form action="php/signup.php" method="post">
                <h1>Create Account</h1>
                <input type="text" placeholder="Username" id="text" name="user_name">
                <input type="password" id="text" name="password" placeholder="Password" >
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="php/login.php" method="post">
                <h1>Sign in</h1>
                <input type="text" placeholder="Username" id="text" name="user_name">
                <input type="password" id="text" name="password" placeholder="Password" >
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('login-container');
	signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
	</script>
    <script>/*Loader*/
	var preloader=document.getElementById('loading');
             function delay(){
                 setInterval(myFunction,1500);
             }
             function myFunction(){
                 preloader.style.display='none';
             }
	</script>
    <script> /*For menu in mobile devices*/
		var navLinks = document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.right = "0";
            }
            function hideMenu(){
                navLinks.style.right = "-820px";
            }
	</script>
    </body>
</html>