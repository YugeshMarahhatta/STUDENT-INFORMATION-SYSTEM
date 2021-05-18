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
$sql = "SELECT id, firstname, lastname,course,permanentaddress,temporaryaddress,gender,email,phone,image FROM addstudent";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <table border='1' width='1000' cellspacing='0' align="center"> 
    <tr bgcolor='#64E986'>
    <th> S.N </th>
    <th> First Name </th>
    <th> Last Name </th>
    <th> Course </th>
    <th> Permanent Address</th>
    <th> Temporary Address </th>
    <th> Gender </th>
    <th> Email </th>
    <th> Phone </th>
    <th> Photo </th>
    <th> Action </th>
    </td>
 </tr>
     <?php
include 'cnn.php';
$sql = "SELECT id, firstname, lastname,course,permanentaddress,temporaryaddress,gender,email,phone,image FROM teacher";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
   while($row = $result->fetch_assoc()) {
        echo "<tr bgcolor='#E0FFFF'><td> ". $row["id"]."</td><td>  ". $row["firstname"]. "</td><td> " . $row["lastname"] ."</td><td> " 
        . $row["course"] ."</td><td> ". $row["permanentaddress"] ."</td><td> ". $row["temporaryaddress"] ."</td><td> "
        . $row["gender"] ."</td><td> ". $row["email"] ."</td><td> ". $row["phone"] ."</td><td> " 
        ?> . <img src="../uploads/<?php echo $row['image']; ?>" alt="photo" width="70px" height="70px">.<?php " ";
       
    }
} else {
    echo "No Record Found";
}
}

$conn->close();
?>
</table>
<br>
<a href="addteacher.php"> <h5> Add New Teacher </h5> </a>
<br>
<br><br><br>

</body>
</html>
