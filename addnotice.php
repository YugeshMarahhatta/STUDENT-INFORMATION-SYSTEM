<?php include 'header2.php' ?>
<?php include_once 'cnn.php';
if(isset($_POST['save']))
{	 
        $title = $_POST['title'];
        $notice = $_POST['notice'];
        $sql = "INSERT INTO notice(title,notice)
        VALUES ('$title','$notice')";
        if (mysqli_query($conn, $sql)) {
            ?>
            <script language="javascript">
            alert("Notice Added Successfully.");
                window.location="notice.php";
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
                  
            }
            .a:hover{
                 background-color: #f4511e;
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                font-size: 15px;
                margin:20px;
                opacity: 0.6;
                transition: 0.5s;
            }
            .message{
                width: 80%;
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
        <table width="70%" border="3" cellpadding="5" cell spacing="5" class="message">
    <tr>
    <td>
            <b class="imp"> Titile:</b><br>
            <textarea name="title" rows="2" cols="40" class="a">
            </textarea><br>
            <b class="imp"> Message:</b><br>
            <textarea name="notice" rows="4" cols="110" class="a">
            </textarea>
                <center>
            <input type="submit" name="save" class="b" value="Add Notice">
            <br><br>
        </form>
    </div><br>
    </table><br><br><br>
</body>
</html>