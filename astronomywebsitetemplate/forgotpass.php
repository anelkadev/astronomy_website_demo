<?php
	$loi = "";
    if(isset($_POST['txtforgot']) == true) {
		$txtemail = $_POST['txtemail'];
		$conn = new PDO("mysql:host=localhost;dbname=astronomy;charset=utf8","root", "");
		$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM login WHERE email = ?";
		$stmt = $conn->prepare($sql); // Tạo 1 prepare stement
		$stmt->execute([$txtemail]);
		$count = $stmt ->rowCount();
		if ($count==0){
			$loi = "Email bạn nhập chưa đăng ký thành viên với chúng tôi";
		}
		else {
			$matkhaumoi = substr(md5( rand(0,999999)) , 0 , 8);
			$sql = "UPDATE login SET pass = ? WHERE email = ?";
			$stmt = $conn->prepare($sql); // Tạo 1 prepare stement
			$stmt->execute([$matkhaumoi, $txtemail]);
			// echo "Đã cập nhập mật khẩu mới";
			$kq = GuiMatKhauMoi($txtemail,$matkhaumoi);
			if ($kq==true) 
			{
				// header("location:login.php");
				echo "<script>document.location='login.php'</script>";
			}
		}
	}
?>

<?php
	function GuiMatKhauMoi($txtemail,$matkhau) {
		require "PHPMailer-master/src/PHPMailer.php"; 
    	require "PHPMailer-master/src/SMTP.php"; 
    	require 'PHPMailer-master/src/Exception.php'; 
    	$mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'Gõ tài khoản Gmail'; // SMTP username 
        $mail->Password = 'Gõ mật khẩu Gmail';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('Gõ tài khoản Gmail', 'Mạnh Nguyễn' ); 
        $mail->addAddress($txtemail); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư gửi lại mật khẩu';
        $noidungthu = "<p>Bạn nhận được thư này do bạn hoặc ai đó yêu cầu mật khẩu mới từ Website Astronomy</p>
			Mật khẩu của bạn là {$matkhau}
		"; 
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        return true;
		// echo "Đã gửi email xong";
    } catch (Exception $e) {
        return false;
		// echo 'Error: ',$mail->ErrorInfo;
    }
	}
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Forgot pass - Astronomy Website Template</title>
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
				<h1>Forgot password</h1>
				<form  method="post">
					<ul>
						<li>
							<input style="padding:10px 295px 10px 0px;" type="email" value="Email" name="txtemail" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>							
							<input type="text" value="<?php if($loi!=""){?> <?php echo $loi?><?php } ?>" name onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
							<input type="submit" name="txtforgot" value="Request" class="btn3">						
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