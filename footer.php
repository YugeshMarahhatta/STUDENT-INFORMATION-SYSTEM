
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* footer */
  * {
        box-sizing: border-box;
      }
      
      .row {
        display: flex;
        background-color: #20291f;
      }
      
      /* Create two equal columns that sits next to each other */
      .column1{
        margin: 20px;
        flex: 50%;
        padding: 10px;
        height: 250px;
        color: #5fcf80;
        width:90%
      }
      .column2{
      margin-left: 30%;
      flex: 50%;
      padding: 10px;
      height: 250px; 
      color:#5fcf80;
    }
        .addr{
    text-align: center;
    color:#152018;
    text-decoration-color: tan;
  }
  .smedia{
    text-align: center;
  }
  .facebook{
    padding: 20px;
    width: 50px;
    color: white;
    background-color: blue;  
  }
  .instagram{
    padding: 20px;
    width: 50px;
    color: white;
    background-color: #8a3ab9;  
  }
  .twitter{
    padding: 20px;
    width: 50px;
    color: white;
    background-color: #00acee;  
  }
  .copyright{
    text-align: center;
  }
  .quotes{
    font-family: "Lucida Console", "Courier New", monospace;
    color:#152018;
    text-align:center;
  }

        </style>
</head>
<body>
<div class="quotes">
"A quality education grants us the ability to fight the war on ignorance and poverty."
</div><br>
<div class="row">
            <div class="column1" >
                <h2>Connect with us</h2>
          Banasthali Chwok 44600 <br>
          Bagmati, Kathmandu<br>
          Nepal <br><br>
          <strong>Phone:</strong> +01-4424146<br>
          <strong>Email:</strong> ygproduction@gmail.com<br>
            </div>
        <div class="column2" >
            <h2>Models</h2>
                <ul>
                    <li><a href="dashbord.php">Dashbord</a></li>
                    <li><a href="attendence.php">Attendence</a></li>
                    <li><a href="account.php">Account</a></li>
                    <li><a href="allstudent.php">Students</a></li>
                    <li><a href="notice.php">Notice</a></li>

                </ul>
        </div>
</div>
<div class="addr">
        <h3><a href="home.php">Student Information System</a></h3>
        <p>
          Banasthali Chowk 44600 <br>
          Bagmati, Kathmandu<br>
          Nepal <br><br>
          <strong>Phone:</strong> +01-4424146<br>
          <strong>Email:</strong> ygproduction@gmail.com<br>
        </p>
      </div>
      <br><br>
      <!-- <a href="#"> <img src="up.png" width:10px;height:10px;> </a> -->

        <div class="smedia">
            <h4>Follow us on</h4> 
            <a href="#" class="facebook">F</a>
            <a href="#" class="instagram">I</a>
            <a href="#" class="twitter">T</a>
        </div><br><br>
        <div class="copyright"> &#169;SIS Education. Designed and Developed by Yugesh Marahatta & Gagan Palli</div>
            
</body>
</html>