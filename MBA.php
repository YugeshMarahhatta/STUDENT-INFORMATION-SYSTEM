<?php include 'header2.php' ?>
<!DOCTYPE html><head>
    <style>
        h5{
    font-family: Georgia;
     font-size: 12px;
     color: black;
     text-align: center;
     letter-spacing: 1px;
     text-transform: uppercase;
     top: 0;
     padding: 5px;
     width: auto%;
     margin-bottom: 1px;
     height: 28px;
     text-decoration: none;
}
    </style>
    </head>
<html>
<body>

<?php
include 'cnn.php';
$sql = "SELECT id, firstname, lastname,dob,course,image FROM addstudent WHERE course='MBA'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <table border='1' width='700' cellspacing='0' align="center"> 
    <tr bgcolor='#64E986'>
    <th>Roll No</th>
    <th>College ID</th>
    <th> First Name </th>
    <th> Last Name </th>
    <th> Date of Birth </th>
    <th> Course </th>
    <th> Photo </th>
    <th colspan= "2"> Action </th>
    </td>
 </tr>
     <?php
include 'cnn.php';
$sql = "SELECT ID, firstname, lastname,course,dob,image FROM addstudent WHERE course='MBA'";
$result = $conn->query($sql);
$i=0;
if ($result->num_rows > 0) {
    // output data of each row
   while($row = $result->fetch_assoc()) {
       $i++;
?>
   <tr>
   <td><?php echo $i; ?></td>
   <td><?php echo $row["ID"];  ?></td>
   <td><?php echo $row["firstname"];  ?></td>
   <td><?php echo $row["lastname"];  ?></td>
   <td><?php echo $row["dob"]; ?> </td>
   <td><?php echo $row["course"];  ?></td>
   <td><img src="../uploads/<?php echo $row['image']; ?>" alt="photo" width="100px" height="100px"></td>
   <td><a href="updatestudent.php?ids=<?php echo $row["ID"]; ?>"><img src="edit.png" style="height:20px;width:20px"></a></td>
   <td><a href="delete/deletestudentmba.php?ids=<?php echo $row["ID"]; ?>"><img src="delet.png" style="height:24px;width:22px"></a></td>

   </tr>

   <?php
       
    }
} else {
    echo "No Record Found";
}
}

$conn->close();
?>
</table>
<br>
<a href="addstudent.php"> <h5> <img src="user.png" style="height:55px;width:50px"> </h5> </a>
<br>
<br><br><br>

</body>
</html>
