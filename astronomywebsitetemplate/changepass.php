<?php 
	if (session_id() =='') session_start();
	if(isset($_SESSION["name"])== false)
	{
		header("location: login.php");
		exit();
	}
	$tendangnhap = $_SESSION['name'];
	//print_r($_POST);
	$loi="";
	if(isset($_POST["txtupdate"])== true)
	{
		$txtoldpass = $_POST["txtoldpass"];
		$txtnewpass = $_POST["txtnewpass"];
		$txtrenewpass = $_POST["txtrenewpass"];
		
		$conn = new PDO("mysql:host=localhost;dbname=astronomy;charset=utf8","root", "");
		$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql="select * from login where name= '$tendangnhap' and pass ='$txtoldpass'";		
		$stmt = $conn->prepare($sql); // đối tượng prepare statement
		$stmt -> execute([$tendangnhap,$txtoldpass ] );
		if( $stmt->rowCount() == 0 ){
			$loi.="Wrong !!! Old password";
		}
		if (strlen($txtnewpass)<6){
			$loi.="New password is too short(>6)";
		}
		if($txtnewpass != $txtrenewpass) {
			$loi.="Two passwords do not match";
		}

		if ($loi==""){
			$sql = "UPDATE login SET pass = ? WHERE name = ?";
			$stmt = $conn->prepare($sql); // prepare giúp chạy câu lệnh 1 cách an toàn, bảo vệ mật khẩu
			$stmt-> execute([$txtnewpass,$tendangnhap]);
			// $message = "Change password successfully";
			// echo "<script type='text/javascript'>alert('$message');</script>";
			// header("location: login.php");
			// echo "Change password successfully";
			echo "<script>document.location='login.php';</script>";
			exit();
		}

	}
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>ChangePass - Astronomy Website Template</title>
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
					<h1>Login</h1>
					<a href="Login.php" class="btn1">Click Here!</a>
				</div>
			</div>
			<div class="main">
				<h1>ChangePass</h1>
				<form  method="post">
					<ul>
						<li>
							<input type="text" value="<?php echo $tendangnhap ?>" disabled name="txtname" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>
							<input type="text" value="Old password" name="txtoldpass" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>						
							<input type="text" value="New password" name="txtnewpass" name onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>						
							<input type="text" value="Renew password" name="txtrenewpass" name onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
							<input type="submit" name="txtupdate" value="UPDATE" class="btn3">
							<a href="admin.php">
								<span class="btn1">Return</span>
							</a>
							<li>							
							<input type="text" value="<?php if($loi!=""){?> <?php echo $loi?><?php } ?>" name onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>					
					</ul>
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
		<ul id="featured" class="wrapper clearfix">
			<li>
				<img src="images/astronaut.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 1</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/earth.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 2</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/spacecraft-small.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 3</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/space-shuttle.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 4</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
		</ul>
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
	</div>


</body>
</html>