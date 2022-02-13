<?php ob_start();
include('connect.php');
 class data
{	
	// Tạo hàm  Contact
	public function in_contact($name,$email,$sub,$mess,$term,$subcrible)
	{
		global $conn;
		$sql="insert into contact(Name,Email,Subject,Message,Term,Subcrible)
		     values('$name','$email','$sub','$mess','$term','$subcrible')";
		  $run=mysqli_query($conn,$sql);
		  return $run;   
	}

	// Tạo hàm Đăng nhập
	public function login($name,$pass,$email)
	{
		global $conn;
		$sql="select * from login where name='$name' and pass='$pass' and email='$email'";	
		$run=mysqli_query($conn,$sql);
		$dem = mysqli_num_rows($run);
		return $dem;

		// Tạo hàm Change pass
	}



	// Tạo hàm Đăng ký
	public function register($user,$pass,$address,$date,$file,$gender,$hobbies)
	{	
		global $conn;		

        // Xử lý tên User đã tồn tại
        $sql="SELECT * FROM register WHERE user='$user'";
        $run = mysqli_query($conn,$sql);
        if(mysqli_num_rows($run) > 0)
        {
          header("location: register.php");
		  echo("<script> alert('No.....Already exist login name !!! Try again')</script>");
          ob_end_flush(); // Fix lỗi  modify header information - headers already
		  exit;
        }

		// Xử lý thêm dữ liệu
		$sql="insert into register(user,pass,address,date,file,gender,hobbies) 
			values('$user','$pass','$address','$date' ,'$file','$gender','$hobbies')";
			$run=mysqli_query($conn,$sql);
			return $run;
	}
}
?>