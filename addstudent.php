
<!DOCTYPE html>
<html>
<head><title> Add Student </title>
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
/* Header CSS*/
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
</style>
</head>
  <body>
  <div id="element2"><a href="../home.php"> <img src="logout.png" name="logout" id="element2" caption="Log out" ></div>
<!-- Main Content -->
<div style="background-color:#b2cfba; margin-top: 20px; border: 2px solid #f7f1be; border-radius: 10px;">
<a href="#" ><h1> STUDENT INFORMATION SYSTEM </h1></a><br>
<a href="dashbord.php"> <p>GO TO DASHBOARD <br></p> </a>


  <div class="fullform">
  <marquee>Fil up the Student Details</marquee>
  <br><br>
  <center>
	<form method="post" action="process.php" id="form" enctype="multipart/form-data">
    <table width="50%" border="7" cellpadding="5" cell spacing="5" id="table">
    <tr>
    <td>
    <center>
		First name:<br>
		<input type="text" name="firstname" class="hov">
		<br>
		Last name:<br>
		<input type="text" name="lastname" class="hov">
		<br>
		Permanent Address:<br>
		<input type="text" name="permanentaddress" class="hov">
        <br>
        Temporary Address:<br>
		<input type="text" name="temporaryaddress" class="hov">
        <br>
        Phone:<br>
        <input type="int" name="phone" class="hov"><br>
        Email Id:<br>
        <input type="email" name="email" class="hov"><br>
        Date of Birth:<br>
		    <input type="date" name="dob" class="hov">
		    <br>
        Course:<br>
        <select name="course" id="course" class="hov">
        <option>BCA</option>
        <option>BBA</option>
        <option>BBS</option>
        <option>MBA</option>
        <option>BBM</option>
        </select><br>
        Gender:<br>
		<input type="radio" name="gender"> Male
        <input type="radio" name="gender"> Female
		<br>
        Image:<br>
        (Upload Passport size photo only)<br>
        <input type="file" name="image" class="hov" accept="image/*">
        <br>
        Document:<br>
        <input type="file" name="document" class="hov" accept=".pdf,.jpg,.docx,.png">
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
  </body>
</html>

