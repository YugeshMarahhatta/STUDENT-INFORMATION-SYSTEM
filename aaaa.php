<?php include_once 'header.php'?>
<?php include_once 'conn.php';
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
            <script language="javascript">
            alert("Your Message was Sent.");
                window.location="contact.php";
            </script>
        <?php
        } else {
            echo "Error: " . $sql . "
            " . mysqli_error($conn);
        }
        mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style> 
            .a{
                text-align: center;
                border: .1px solid green;
                margin:20px;
                margin-left:34%;
            }
            .b:hover{
                background-color: #f4511e;
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                font-size: 15px;
                margin: 4px 2px;
                opacity: 0.6;
                transition: 0.5s;
            }
            .imp{
                    font-family:sans-serif;
                    margin:20px;
                    margin-left:34%;
            }
            .a:hover{
                 background-color: #f4511e;
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                font-size: 15px;
                margin:20px;
                margin-left:34%;
                opacity: 0.6;
                transition: 0.5s;
            }
            .message{
                width: 40%;
        margin: 0 auto;
        padding: 20px;
        background:#E0FFFF;
            
            }
    </style>
</head>
<body>
<table><center>
<h1>We'd love your feedback</h1>
    <div>
        <form action="" method="POST" >
        <table width="50%" border="3" cellpadding="5" cell spacing="5" class="message">
    <tr>
    <td>
            <b class="imp">Enter your Full Name: </b>
            <input type="text" id="name" name="fullname" class="a"><br><br>
            <b class="imp">Enter your Address: </b>
            <input type="text" id="addr" name="address" class="a"><br><br>
            <b class="imp">Enter your Email: </b>
            <input type="email" id="Email" name="email" value="@gmail.com"class="a"><br><br>
            <b class="imp"> Enter your Message:</b><br>
            <textarea name="comment" rows="4" cols="40" class="a">
            </textarea>
                <center>
            <input type="submit" name="save" class="b" value="Send">
            <br><br>
        </form>
    </div><br>
    </table>
</body>
</html>
<?php include 'footer.php' ?>
