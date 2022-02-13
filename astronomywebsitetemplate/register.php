<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Register - Astronomy Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <style>
      .padding-240 {
        padding: 10px 240px 10px 0px;
        margin: 10px 1px;
      }

      .padding-315 {
        padding: 10px 315px 10px 0px;
        margin: 10px 1px;
      }

      .padding-265 {
        padding: 10px 265px 10px 0px;
        margin: 10px 1px;
      }

      .padding-155 {
        padding: 10px 155px 10px 0px;
        margin: 10px 1px;
      }

      .padding-235 {
        padding: 10px 235px 10px 0px;
        margin: 10px 1px;
      }

      .padding-118 {
        padding: 10px 118px 10px 0px;
        margin: 10px 1px;
      }

      #register {
        padding: 2px 20px;
        margin-left: 100px;
        margin-top: 20px;
        cursor: pointer;
        background: #0F4086;
        border-radius: 5px;
        color: #fff;
        border: none;
      }

      #register:hover {
        background-color:  #469FE0;
      }
    </style>
  </head>
  <body>
    <div id="header">
      <div class="wrapper clearfix">
        <div id="logo">
          <a href="index.php"><img src="images/logo.png" alt="LOGO" /></a>
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
              <a href="blog.php"
                ><img
                  src="images/earth-small.jpg"
                  alt="Img"
                  height="154"
                  width="213"
              /></a>
            </li>
            <li>
              <a href="blog.php"
                ><img
                  src="images/spaceshuttle-closeup.jpg"
                  alt="Img"
                  height="154"
                  width="213"
              /></a>
            </li>
          </ul>
          <div class="click-here">
            <h1>Login</h1>
            <a href="login.php" class="btn1">Click Here!</a>
          </div>
        </div>
        <div class="main">
          <h1>Register</h1>
          <form method="post" enctype="multipart/form-data" action="">
            <table id="container-register">
              <tr>
                <th>
                  <input name="txtuser" class="padding-240" required placeholder="Nhập tên" />
                </th>
              </tr>
              <tr>
                <th>
                  <input
                    type="password"
                    class="padding-240"
                    name="txtpass"
                    required
                    placeholder="Nhập mật khẩu"
                  />
                </th>
              </tr>
              <tr>
                <th>
                  <input
                    type="password"
                    class="padding-240"
                    name="txtrepass"
                    required
                    placeholder="Nhập lại mật khẩu"
                  />
                </th>
              </tr>
              <tr>
                <th>
                  <select name="txtaddress" id="address" class="padding-315" >
                    <option value="Miền Bắc">Miền Bắc</option>
                    <option value="Miền Trung">Miền Trung</option>
                    <option value="Miền Nam">Miền Nam</option>
                  </select>
                </th>
              </tr>
              <tr>
                <th><input type="date" class="padding-265" name="txtdate" placeholder="" /></th>
              </tr>
              <tr>
                <th>
                  <input
                    type="file"
                    class="padding-155"
                    name="txtfile"
                    value="Choose File"
                    placeholder="Choose File"
                  />
                </th>
              </tr>
              <tr>
                <th class="padding-235">
                  <p style="color: #f2f2f2; display: inline">Giới tính:</p>
                  <input
                    type="radio"
                    name="txtgender"
                    id="gender"
                    value="1"
                  />Nam
                  <input
                    type="radio"
                    name="txtgender"
                    id="gender"
                    value="0"
                  />Nữ
                </th>
              </tr>
              <tr>
                <th class="padding-118">
                  <p style="color: #f2f2f2; display: inline">Sở thích:</p>
                  <input
                    type="checkbox"
                    placeholder=""
                    name="txthobbies[]"
                    value="Học"
                  />Học
                  <input
                    type="checkbox"
                    placeholder=""
                    name="txthobbies[]"
                    value="Xem phim"
                  />Xem phim
                  <input
                    type="checkbox"
                    placeholder=""
                    name="txthobbies[]"
                    value="Game"
                  />Game
                </th>
              </tr>
            </table>
            <button name="txtregister" class="btn3" id="register">Đăng Ký</button>
          </form>
        </div>
      </div>
    </div>
    <div id="footer">
      <ul id="featured" class="wrapper clearfix">
        <li>
          <img src="images/astronaut.jpg" alt="Img" height="204" width="220" />
          <h3><a href="blog.php">Category 1</a></h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec
            mi tortor. Phasellus commodo semper vehicula.
          </p>
        </li>
        <li>
          <img src="images/earth.jpg" alt="Img" height="204" width="220" />
          <h3><a href="blog.php">Category 2</a></h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec
            mi tortor. Phasellus commodo semper vehicula.
          </p>
        </li>
        <li>
          <img
            src="images/spacecraft-small.jpg"
            alt="Img"
            height="204"
            width="220"
          />
          <h3><a href="blog.php">Category 3</a></h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec
            mi tortor. Phasellus commodo semper vehicula.
          </p>
        </li>
        <li>
          <img
            src="images/space-shuttle.jpg"
            alt="Img"
            height="204"
            width="220"
          />
          <h3><a href="blog.php">Category 4</a></h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec
            mi tortor. Phasellus commodo semper vehicula.
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
                  <a
                    href="http://freewebsitetemplates.com/go/googleplus/"
                    target="_blank"
                    >Google +</a
                  >
                </li>
                <li>
                  <a
                    href="http://freewebsitetemplates.com/go/facebook/"
                    target="_blank"
                    >Facebook</a
                  >
                </li>
                <li>
                  <a
                    href="http://freewebsitetemplates.com/go/youtube/"
                    target="_blank"
                    >Youtube</a
                  >
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
            <p>Sign up for Our Newsletter</p>
            <form action="index.php" method="post">
              <input type="text" value="" />
              <input type="submit" value="Sign Up!" />
            </form>
          </div>
          <p class="footnote">
            © Copyright © 2023.Company name all rights reserved
          </p>
        </div>
      </div>
    </div>
    <!------------------------------- Code PHP --------------------------------->
    <?php ob_start();
        include('control.php');
        $get_data = new data ();

        // Xử lý Pass và Repass trùng nhau
        $pass=$_POST['txtpass'];
		    $repass=$_POST['txtrepass'];
        if($pass != $repass)
        {
          // header("location: register.php");
          echo("<script> alert('No.....Passwords must match !!! Try again')</script>");
          exit;
        }

        // Xử lý Checkbox
        $hobbies = "";
                foreach ($_POST['txthobbies'] as $key) //Duyệt mảng dữ liệu 
                {
                    $hobbies .= $key."";
                }
        move_uploaded_file($_FILES["txtfile"]["tmp_name"],"images/".$_FILES["txtfile"]["name"]); //Update File vào Database

        // Xử lý không để Textbox rỗng
        if(isset($_POST['txtregister']))
        {
          if(empty ($_POST["txtuser"])||empty($_POST["txtpass"]))
        echo("<script> alert('Username and password cannot be left blank !')</script>");
        else
        {	
      	$register=$get_data->register($_POST["txtuser"],$_POST["txtpass"],$_POST["txtaddress"],$_POST["txtdate"],$_FILES["txtfile"]["name"],$_POST["txtgender"],$hobbies);
      	if($register)
        {
         echo"<script> alert('Successful register!')</script>";
         echo "<script>document.location='login.php'</script>";
        }
        else echo"<script> alert('You have failed to register!')</script>";
        }
      }
     ?>
  </body>
</html>
