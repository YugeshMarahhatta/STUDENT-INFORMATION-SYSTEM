<?php
include_once 'cnn.php';
if(isset($_POST['save']))
{	
    $Name = $_POST['Name'];
    $User = $_POST['User'];
    $Pass = $_POST['Pass'];
    $Email = $_POST['Email'];
    $Image = $_POST['Image'];
    $filename = rand(1000,9999).$_FILES['Image']['name'];
    $filetmp = $_FILES['Image']['tmp_name'];
    $folder = "../uploads/".$filename;
    move_uploaded_file($filetmp,$folder);
	 $sql = "INSERT INTO student(Name,User,Pass,Email,Image)
	 VALUES ('$Name','$User','$Pass','$Email','$Image')";
	 if (mysqli_query($conn, $sql)) {
        ?>
        <script language="javascript">
        alert("User Added Succesfully");
            window.location="user.php";
        </script>
    <?php
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>