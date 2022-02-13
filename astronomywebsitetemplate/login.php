<?php ob_start(); session_start(); 
?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Login - Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="wrapper clearfix">
			<div id="logo">
				<a href="index.php"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<!-- <li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				<li class="selected">
					<a href="contact.php">Contact Us</a>
				</li>
				<li>
					<a href="login.php">Login</a>
				</li> -->
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="contact" class="wrapper clearfix">
			<div id="sidebar">
				<ul>
					<li>
						<a href="blog.php"><img src="images/earth-small.jpg" alt="Img" height="154" width="213"></a>
					</li>
					<li>
						<a href="blog.php"><img src="images/spaceshuttle-closeup.jpg" alt="Img" height="154" width="213"></a>
					</li>
				</ul>
				<div class="click-here">
					<h1>Register</h1>
					<a href="register.php" class="btn1">Click Here!</a>
				</div>
			</div>
			<div class="main">
				<h1>Login</h1>
				<form  method="post">
					<ul>
						<li>
							<input type="text" value="Account" name="txtname" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>
							<input type="text" value="Password" name="txtpass" name onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>
							<input style="padding:10px 295px 10px 0px;"  type="email" value="Email" name="txtemail" name onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
							<input type="submit" name="txtlogin" value="Login" class="btn3">
							<a class="btn1" style=" color: white; text-decoration: none; margin-left:20px; " href="forgotpass.php">Forgot Password</a>
							<!-- <input type="submit" class="btn1" onclick="alert('Relax and try to remember your password')" value="Forgot password"/> -->
						</li>
						<li>
						
						</li>
					</ul>
				</form>
				<?php
                  include("control.php");
                  $get_data=new data();
                  if(isset($_POST['txtlogin']))
                  {
                    if(empty ($_POST["txtname"])||empty($_POST["txtpass"]))
                    echo("<script> alert('Username and password cannot be left blank !')</script>");
                    else{	
                      $login=$get_data->login($_POST["txtname"],$_POST["txtpass"],$_POST["txtemail"]);
                      if($login==1){
                          $_SESSION["name"]=$_POST["txtname"];
                          header("location:index.php");
                      ob_end_flush();
                          echo("<script> alert('Successful login!')</script>");
						//   echo "<script>document.location='index.php'</script>";
                      }
                      else
                          echo("<script> alert('You have failed to login!')</script>");
                     }
                  } 
				?>
			</div>
		</div>
	</div>
		<div class="body">
			<div class="wrapper clearfix">
				<div id="links">
					<div>
						<h4>Social</h4>
						<ul>
							<li>
								<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank">Google +</a>
							</li>
							<li>
								<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank">Facebook</a>
							</li>
							<li>
								<a href="http://freewebsitetemplates.com/go/youtube/" target="_blank">Youtube</a>
							</li>
						</ul>
					</div>
					<div>
						<h4>Heading placeholder</h4>
						<ul>
							<li>
								<a href="index.php">Link Title 1</a>
							</li>
							<li>
								<a href="index.php">Link Title 2</a>
							</li>
							<li>
								<a href="index.php">Link Title 3</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="newsletter">
					<h4>Newsletter</h4>
					<p>
						Sign up for Our Newsletter
					</p>
					<form action="index.php" method="post">
						<input type="text" value="">
						<input type="submit" value="Sign Up!">
					</form>
				</div>
				<p class="footnote">
					© Copyright © 2023.Company name all rights reserved
				</p>
			</div>
		</div>
</body>
</html>