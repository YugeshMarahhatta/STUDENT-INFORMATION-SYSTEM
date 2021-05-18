
<!DOCTYPE html>
<html>
<head>
<title>All Student </title>
<link href="allstudent.css" rel="stylesheet">
<style>
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
.element2{
    display: block;
  margin-left: auto;
  margin-right: auto;
  height:100px;
  width: 100px;
    }
    
  p{
    font-family: Georgia;
     font-size: 18px;
     color: white;
     text-align: center;
     letter-spacing: 1px;
     text-transform: uppercase;
     background-color: #31B64F;    
     position: absolute;
     top: 0;
     padding: 5px;
     width: 98%;
     margin-bottom: 1px;
     height: 28px;
     text-decoration: none;
}
 h4{
    font-family: Georgia, Times New Roman, serif;
     font-size: 12px;
     color: black;
     text-align: center;
     letter-spacing: 1px;
     text-transform: uppercase;    
     top: 0;
     padding: 5px;
     width: 100%;
     margin-bottom: 1px;
     height: 28px;
     text-decoration: none;
} 
 p:hover {
  color: hotpink;
}
 .buttom{
     text-decoration:none;
     color:white;
 }
  .buttom:hover{
    background-color: yellow;
    font-size: 150%;
 }
 h3{
     text-align:center;
 }
    </style>
<body>
<!-- Main Content -->
<div style="background-color:; margin-top: 20px; border: 2px solid #f7f1be; border-radius: 10px;">
<a href="#" ><p> STUDENT INFORMATION SYSTEM </p></a><br>
<a href="dashbord.php"> <h4>DASHBOARD-ADMIN </h4> </a>
<div class="allstudent">
    <h3><b>Choose the related faculty of student</b></h3>
    <?php include 'course.php' ?> 
</div>
    <!-- Footer -->
    <a href="../home.php"><img src="logout.png" name="logout" caption="Log out" class="element2" ></div>
</body>
</html>