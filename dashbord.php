

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashbord</title>
    <style>
        .message{
            color:Olive;
            margin-left:5%;
            font-size:30px;
        }
        .logout{
            height:30px; 
            width:30px; 
            margin-left: 1100px;
        }
        h1{
            color:black;
            font-size:30px;
            text-align:center;
            text-decoration:none;
        }
        #element1{float:center;
        }
        #element2{
            float:right;
            height:30px; 
            width:30px;
            }
        p{
            color:#002106;
            font-size:20px;
            text-align:center; 
            text-decoration:none;
            background:#31B689;
         }
         .buttom{
             text-decoration:none;
             color:white;
         }
          .buttom:hover{
            background-color: yellow;
            font-size: 150%;
         }
         .element2{
    display: block;
  margin-left: auto;
  margin-right: auto;
  height:100px;
  width: 100px;
    }
        
    </style>

</head>
<body>


<div id="element2"><a href="../home.php"> <img src="logout.png" name="logout" id="element2" caption="Log out" ></div>
<!-- Main Content -->
<div style="background-color:#b2cfba; margin-top: 20px; border: 2px solid #f7f1be; border-radius: 10px;">
<a href="#" ><h1> STUDENT INFORMATION SYSTEM </h1></a><br>
<a href="#"> <p>DASHBOARD-ADMIN <br></p> </a>
<div class="profile">
<span id="name"></span>
<span id="course"></span>
</div>
	
	<div class="row" style="padding: 50px;">
		<div class="cols12">
			<a  href="allstudent.php" class="buttom">
            <div class="a" style="margin: 15px;width:800px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #b03595, #77c771);">
            All Students</div></a>
            <a href="addstudent.php" class="buttom">
            <div style="margin: 15px;width:800px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #b03595, #77c771);">
            Add Student</div></a>
            <a href="allteacher.php" class="buttom">
            <div style="margin: 15px;width:800px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #b03595, #77c771);">
            Teacher</div></a>
            <a href="user.php" class="buttom">
            <div style="margin: 15px;width:800px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #b03595, #77c771);">
            User</div></a>
            <a href="account.php" class="buttom">
            <div style="margin: 15px;width:800px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #b03595, #77c771);">
            Account</div></a>
            <a href="notice.php" class="buttom">
            <div style="margin: 15px;width:800px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #b03595, #77c771);">
            Notice</div></a>
            <a href="subscription.php" class="buttom">
            <div style="margin: 15px;width:800px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #b03595, #77c771);">
            Subscription Message</div></a>
            

		</div>

	</div>


    <a href="../home.php"><img src="logout.png" name="logout" caption="Log out" class="element2" ></div>
</div>
</html>