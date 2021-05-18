<?php include 'header.php' ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  p{
    color:green;
    text-align:center;
  }
  .avatar{
    margin:20px;
    margin-left:36%;
  }
  .a{
    width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.cancelbtn{
  text-align: center;
  border: .1px solid green;
}
.a{
  text-align: center;
  border: .1px solid green;
  margin:20px;
    margin-left:34%;
}
.imp{
  font-family:sans-serif;
  margin:20px;
    margin-left:34%;
}
.submit{
  margin:20px;
    margin-left:47%;
}
.cancelbtn{
  margin:20px;
    margin-left:47%;
}
  </style>
<body>

<p><marquee>Welcome to Login Pannel. Please Enter the Id and Password.</marquee></p>
<?php

include_once("cnn.php");
?>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$user = $_POST["tuser"];
	$pass = $_POST["tpass"];
	$sql = "select * from admin where User='" . $user . "' and Pass='" . md5($pass) . "'";
	$r = mysqli_query($cnn,$sql);
	if(mysqli_num_rows($r)==1){
		session_start();
		$_SESSION["user"]=$user;
		?>
			<script language="javascript">
				window.location="welcome.php";
			</script>
		<?php
	}
	else
		echo "Invalid username or password.";
	
}
else
{?>
<form method="post" class="final">
  <div class="imgcontainer">
    <img src="user.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b class="imp">Username</b></label>
    <input type="text" placeholder="Enter Username" name="tuser" required class="a"><br>

    <label for="psw"><b class="imp">Password</b></label>
    <input type="password" placeholder="Enter Password" name="tpass" required class="a"><br>
    <button type="submit" class="submit">Login</button>
  </div>
  <div class="cancel">
    <button type="button" class="cancelbtn"><a href="home.php">Cancel</a></button>
  </div><br><br>
</form>

</body>
</html>
<?php	
}
?>
<?php include 'footer.php' ?>
