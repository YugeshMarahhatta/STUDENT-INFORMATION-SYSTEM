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
.btn{
    text-align:center;
}
    </style>
    </head>
<html>
<body>

<?php
include 'cnn.php';
$sql = "SELECT id, firstname, lastname,course,image FROM addstudent WHERE course='BBA'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <table border='1' width='700' cellspacing='0' align="center"> 
    <tr bgcolor='#64E986'>
    <th> Roll No </th>
    <th> First Name </th>
    <th> Last Name </th>
    <th> Photo </th>
    <th> Attendence </th>
    </td>
 </tr>
     <?php
include 'cnn.php';
$sql = "SELECT id, firstname, lastname,course,image FROM addstudent WHERE course='BBA'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   while($row = $result->fetch_assoc()) {
        echo "<tr bgcolor='#E0FFFF'><td> ". $row["id"]."</td><td>  ". $row["firstname"]. "</td><td> " . $row["lastname"]  ."</td><td> "?> . <img src="../uploads/<?php echo $row['image']; ?>" alt="photo" width="100px" height="100px">.<?php " ";
        ?>
       <form action="#">
    <td> Present:<input type="radio" name="present" value="P"><br>
        Absent:<input type="radio" name="absent" value="P">
        <script>
        const total = present.count();
        const total1 = absent.count();
        </script>
       <?php
    }
} else {
    echo "No Record Found";
}
}

$conn->close();
?>
</table>
<br><br><div class="btn">
<input type="submit" name="submit" value="Submit">
</div>
<br>
<a href="addstudent.php"> <h5> Add New Student </h5> </a>
<br>
<br><br><br>
<script>

alert(total);
</script>

</body>
</html>


