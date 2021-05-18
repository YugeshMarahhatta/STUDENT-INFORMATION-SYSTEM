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
    margin-left:40%;
  }
  .a{
    width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border: .1px solid green;
  margin-left:40%;
}
.cancelbtn{
  text-align: center;
  border: .1px solid green;
}

.a:hover{
  background-color: #B9DEA8;
  border: none;
  padding: 16px 32px;
  text-align: center;
  font-size: 15px;
  opacity: 0.6;
  transition: 0.5s;
  color: black;
  font-family:sans-serif;
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
<marquee>Welcome to Login Pannel. Please Enter the Id and Password.</marquee>
<?php
include_once ("cnn.php");
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
				window.location="admin/dashbord.php";
			</script>
		<?php
	}
	else
		echo "Invalid username or password.";
        ?>
			<script language="javascript">
        alert("Invalid Username and Password  Try again !!!");
				window.location="loginadmin.php";
			</script>
		<?php
	
}
else
{?>
<form method="post" class="final">
  <div class="imgcontainer">
    <img src="admin.jpg" alt="Avatar" class="avatar" style="width:20%;height:25%">
  </div>

  <div class="container">
    <input type="text" placeholder="Enter Username" name="tuser" required class="a"><br>

  
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
