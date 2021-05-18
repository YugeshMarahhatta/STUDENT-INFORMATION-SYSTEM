<?php include 'header2.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
    <style> 
    .form{
        text-align:center;
        align:center;
    }
    .name{
        border: 1px solid #ccc;
        width: 37%;
        height: 40px;
        padding: 0 20px;
        border-radius: 20px;
        font-family: "Muli-Bold";
        background: #E5E4E2; 
    }
    .btn{
        
        font-family: "Muli-Bold";
        border-radius: 20px;
        margin:10px;
        align:center;
    }
    h3{
        text-align:center;
        color:green;
        font-family: "Muli-Bold";
        }
        
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
                }
    </style>
</head>
<body>
<div class="container">
  <img src="account2.jpg" alt="Snow" style="width:100%;">
  <div class="centered">
    <h3> To see your fees enter the required field </h3>
<form method="post">

<form class="form" action="" method="POST">
        College Id: &nbsp;&nbsp;&nbsp;<input type="text" name="ID" class="name" placeholder="Enter your College Id"><br>
        First Name : <input type="text" name="firstname" class="name" placeholder="Enter your First name"><br>
        Last Name : <input type="text" name="lastname" class="name" placeholder="Enter your Last name"><br>
       <input type="submit" value="See Result" name="submit" class="btn">

</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=studentmgmt",'root','');

if (isset($_POST["submit"])) {
    $str = $_POST["firstname"];
	$str1 = $_POST["lastname"];
    $str2= $_POST["ID"];
	$sth = $con->prepare("SELECT * FROM `addstudent` WHERE firstname = '$str' AND lastname = '$str1' AND ID = '$str2'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table border='1' width='700' cellspacing='0' align="center"> 
			<tr bgcolor='#64E986'>
				<th>First Name</th>
                <th> Last Name </th>
				<th>Total Fee</th>
                <th> Remaning Fee </th>
			</tr>
			<tr bgcolor="white">
				<td><?php echo $row->firstname; ?></td>
				<td><?php echo $row->lastname; ?></td>
				<td><?php echo $row->totalfee;?></td>
                <td><?php echo $row->duefee;?></td>
                
			</tr>

		</table>
        </div>
<?php 
	}
		
		
		else{
            ?>
            <script>
            alert("Name and Roll no doenot exist")
            </script>
            <?php
			echo "Name and Roll no Does not exist";
		}


}

?>