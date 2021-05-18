<?php
include_once 'cnn.php';
if(isset($_POST['save']))
{	 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $permanentaddress = $_POST['permanentaddress'];
    $temporaryaddress = $_POST['temporaryaddress'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $image = $_POST['image'];
    $document = $_POST['document'];
    $filename = rand(1000,9999).$_FILES['image']['name'];
    $filetmp = $_FILES['image']['tmp_name'];
    $folder = "../uploads/".$filename;
    move_uploaded_file($filetmp,$folder);
	 $sql = "INSERT INTO addstudent(image,firstname,lastname,permanentaddress,temporaryaddress,email,phone,gender,document,course)
	 VALUES ('$filename','$firstname','$lastname','$permanentaddress','$temporaryaddress','$email','$phone','$gender','$document','$course')";
	 if (mysqli_query($conn, $sql)) {
        ?>
        <script language="javascript">
        alert("Student Added Succesfully");
            window.location="allstudent.php";
        </script>
    <?php
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>