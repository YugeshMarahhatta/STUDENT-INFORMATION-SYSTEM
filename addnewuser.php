<!DOCTYPE html>
<html>
<head><title> Add User </title>
<style>
.fullform{
  background-color:#b2cfba;
}
#table{
  background-color:#D3E8AF;
  color:#000001;
  
}
.register{
  font-size: 17px;
}
.register:hover{
  color:#F7FBF5 ;
  background-color: #E2AC1D;
  font-size: 20px;
}
.hov:hover{
  background-color:#85BB65;
  font-size: 15px;
}
/* Header */

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
        #element1{float:center;}
        #element2{
            float:right;
            height:30px; 
            width:30px;}
            
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
</style>
</head>
  <body>
  <div id="element2"><a href="../home.php"> <img src="logout.png" name="logout" id="element2" caption="Log out" ></div>
<!-- Main Content -->
<div style="background-color:#b2cfba; margin-top: 20px; border: 2px solid #f7f1be; border-radius: 10px;">
<a href="#" ><h1> STUDENT INFORMATION SYSTEM </h1></a><br>
<a href="dashbord.php"> <p>GO TO DASHBOARD <br></p> </a>
  <div class="fullform">
  <marquee>Fil up the User Details</marquee>
  <br><br>
  <center>
	<form method="post" action="newprocess.php" id="form" enctype="multipart/form-data">
    <table width="50%" border="7" cellpadding="5" cell spacing="5" id="table">
    <tr>
    <td>
    <center>
    Name:<br>
		<input type="text" name="Name" class="hov" placeholder="Enter Name here">
		<br>
    Username:<br>
		<input type="text" name="User" class="hov" placeholder="Enter Username here">
		<br>
		Password:<br>
		<input type="password" name="Pass" class="hov" placeholder="Enter Password here">
		<br>
		Email:<br>
		<input type="text" name="Email" class="hov" placeholder="Enter Email here">
    <br>
    Image:<br>
		<input type="file" name="Image" class="hov" accept="image/*">
		<br>
		<br><br>
		<input type="submit" name="save" value="Register" class="register">
        </center>
    </td>
    </tr>
    </table>
    </form>
    </center>
    <br><br>
    </div>
    <br>
    <a href="../home.php">
    <img src="logout.png" style="height:100px; width:100px;display: block;margin-left:auto; margin-right:auto;"></a>
    <br>
    <br>
  </body>
</html>

