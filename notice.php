<?php include 'header2.php' ?>
     <?php
include 'cnn.php';
$sql = "SELECT ID, title,notice FROM notice";
$result = $conn->query($sql);
$i=0;

if ($result->num_rows > 0) {
    // output data of each row
   while($row = $result->fetch_assoc()) {
       $i++;
?><br>
    <h2> <?php echo $i; ?> .
   <?php echo $row["title"];  ?></h2>
   <?php echo $row["notice"];  ?><br><br>
   <?php
    }
} else {
    echo "No Notice Found";
}

$conn->close();
?>
<html>
</body>
<a href="addnotice.php"> <h1>Add New Notice </h1></a><br><br><br>
</body>
</html>
