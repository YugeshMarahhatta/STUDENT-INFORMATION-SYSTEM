<!DOCTYPE html>
<html lang="en">
<head>
   <scirp
   t> 
</script>
    <title>Document</title>
</head>
<body>
    <form action="Student.php" method="post">
        <label >Firstname</label>
        <input type="name"name="fname"> &nbsp;&nbsp;&nbsp;
        <label >Lastname</label>
        <input type="name"name="lname"><br><br>
        <label>Age</label>&nbsp;&nbsp;&nbsp;
        <input type="number"name="age"><br><br>
        <label>Gender</label>
        <select name="gender">
        <option value="Male">Male </option>
        <option vlaue="Female"> Female </option>
        <option value="Other"> Other </option>
        </select> <br><br>
        <label>Student ID</label>
        <input type="number"name="ID"><br><br>
       <label> photo</label>
        <input type="file"name="photo"><br><br>
       <label>Department</label> 
        <select name="department">
            <option name="BBS">BBS</option>
            <option value="BBS">BCA</option>
            <option value="BBS">BIM</option>
            <option value="BBS">BBA</option>
            <option value="BBS">BBS</option>
        </select><br><br>

<input type="Submit"value="submit">
    </form>
<?php
   /* $prefix="NCS";*/
    $firstname=isset($_POST["fname"])?$_POST["fname"]:"";
    $lastname=isset($_POST["lname"])?$_POST["lname"]:"";
    $age=isset($_POST["age"])?$_POST["age"]:"";
    $gender=isset($_POST["gender"])?$_POST["gender"]:"";
    $stID=isset($_POST["ID"])?$prefix="NCS".$_POST["ID"]:"";
    $photo=isset($_POST["photo"])?$_POST["photo"]:"";
    $department=isset($_POST["department"])?$_POST["department"]:"";

    echo $stID;
    echo $firstname;
    echo $lastname;
    echo $age;
    echo $gender;
    echo $department;
    echo $photo;
    

?>
<?php
        if(empty($_POST["name"]))  
        {  
            $name_error = "Please Enter Name";  
        }  
        
        ?>
</body>
</html>