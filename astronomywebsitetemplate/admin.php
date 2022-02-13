<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Astronomy Website Template</title>
  <style>
    /* Code CSS */
      /* Reset  */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      html {
        height: 100%;
        box-sizing: border-box;
      }

      *,
      *:before,
      *:after {
        box-sizing: inherit;
      }

    body {
        background-image: url(https://i.pinimg.com/564x/44/19/e6/4419e60333c019f507693d69ae696c69.jpg);
        font-family: Arial;
        margin: 0;
        /* padding-bottom: 150px; */
        position: relative;
        min-height: 100%;
        background-repeat: no-repeat; /*Không bị trùng lặp ảnh */
        background-size: cover; /*Để cho khung ảnh vừa với màn hình, k bị zoom to zoom nhỏ*/
        background-position: center; /*Để cho khung ảnh vừa với màn hình */
        image-rendering: auto;
        color: #fff;
        font-style: italic;
        margin-top: 10px;
      }
    
    body > a {
      color: #fff;
      text-decoration: none;
      background-color: #152436;
      padding: 5px 5px;
      padding-top: 10px;
      font-style: normal;
    }

    body > a:hover {
      color: red;
      font-size: 15px;
    }
  </style>
</head>
<body>
  
<?php session_start();
  if (empty($_SESSION["name"]))
  	header("location: login.php");
  else{
    echo"WELCOME"." ".$_SESSION['name']."&emsp;&emsp; "."<a href='index.php'>Home.</a>". "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"." " ."<a href='changepass.php'>ChangePass</a>". "&emsp; " .""."<a href='logout.php'>Logout.</a>";
}
 ?>
</body>
</html>