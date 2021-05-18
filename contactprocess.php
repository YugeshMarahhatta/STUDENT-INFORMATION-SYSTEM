<?php
include_once 'conn.php';
if(isset($_POST['save']))
{	 
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
	$comment = $_POST['comment'];
    
	$sql = "INSERT INTO feedback(fullname,address,email,comment)
	 VALUES ('$fullname','$address','$email','$comment')";
	 if (mysqli_query($conn, $sql)) {
        ?>
        <script language="text/javascript">
        alert("fullname Added Succesfully");
            window.location="#";
        </script>
    <?php
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>