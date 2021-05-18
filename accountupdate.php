<?php include_once 'header2.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="process.php" id="form" enctype="multipart/form-data" align="center">
    <table width="50%" border="7" cellpadding="5" cell spacing="5" id="table" align="centern">
    <tr>
    <td>
    <center>
        Roll no:<br>
        <input type="int" name="roll" class="hov">
        <br>
		Full Name:<br>
		<input type="text" name="firstname" class="hov">
		<br>
        Total Amount:<br>
        <input type="double" name="amount" class="hov"><br>
        Recently Paid:<br>
        <input type="double" name="recent" class="hov"><br>
        Paid:<br>
        <input type="double" name="paid" class="hov"><br>
        Due Amount:<br>
        <input type="double" name="due" class="hov"><br>
		<br><br>
		<input type="submit" name="save" value="Register" class="register">
        </center>
    </td>
    </tr>
    </table>
    </form>
</body>
</html>