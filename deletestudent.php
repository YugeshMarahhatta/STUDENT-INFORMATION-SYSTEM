<?php
include 'cnn.php';
$id = $_GET['ids'];
$deletestudent = "delete from addstudent where ID = $id";


$del = mysqli_query($conn,$deletestudent);


?>
<script>
window.location.href = "http://localhost/student/admin/BBM.php";
</script>

