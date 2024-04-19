<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="faculty";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
error_reporting(0);
?>


<html>

<head>
  <title> SIGN UP </title>
  <link rel="stylesheet" type="text/css" href="css/singup.css">
  </link>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
  <header>
    <div class="topnav">

        <td style="float:left;"><img src="../nsp project/images/piet logo.jpg" width="6%" height="10%" style="margin-left: 40px; margin-top: 10px; margin-bottom: 10px;"></td>
        <td><a href="index.php"><b>Login</b></a></td>
        <td><a href="contact.php"><b>Contact us</b></a></td>
       
        <td><a href="index.php"><b>Home</b></a></td>
    </div>
    </header>
    <br>
    <div class="line"></div>
    <br>
    <center>
    <div class="container2">
    <center>
      <h3>
        SIGN UP
      </h3>
    </center>
     
        <form action="signup.php" method="GET">
          <div class="box">
            <div class=button>
              <table>
                <tbody>
                  <tr>
                    <td>
                      <div class="input-container">
                        <i class='far fa-user icon'></i>
                        <input type="text" placeholder="Enter Username" name="username" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="input-container">
                        <i class='fas fa-lock icon'></i>
                        <input type="password" placeholder="Enter password" name="password" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="input-container">
                        <i class='fas fa-lock icon'></i>
                        <input type="password" placeholder="Confirm password" name="ConfirmPassword" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="input-container">
                        <i class='far fa-envelope icon'></i>
                        <input type="text" placeholder="Enter Email-ID" name="EmailID" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="input-container">
                        <i class='far fa-hand-point-right icon'></i>
                        <input type="text" placeholder="Enter Faculty ID" name="EmployeeID" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="input-container">
                        <i class='fas fa-phone icon'></i>
                        <input type="text" placeholder="Enter Mobile No." name="Mobile" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <center> <input type="submit" name="savedata" value="Submit"></input></center>
                      <br>
                      <center>
                        <a href="#"><img src="images/google.jpg" width="9%" height="8%"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp;
                        <a href="https://www.linkedin.com/school/poornima-group-of-colleges/"><img
                            src="images/linkedin.png" width="7%" height="8%"></a>
                        &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp;
                        <a href="https://twitter.com/PIET_Jaipur?t=MxeihiSvkKGELVDUssC_TA&s=35"><img
                            src="images/twitter.jpg" width="7%" height="8%"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp;
                        <a href="https://github.com/MAHAK0804"><img src="images/github.jpg" width="7%" height="8%"></a>

                      </center>
                    </td>

                  </tr>
                  </tbody>
        </table>
        </form>
        <?php

if($_GET['savedata'])
{
      $username=$_GET['username'];
       $password=$_GET['password'];
       $ConfirmPassword=$_GET['ConfirmPassword'];
  $mail=$_GET['EmailID'];
  $ID=$_GET['EmployeeID'];
  $Mobile=$_GET['Mobile'];

if($username!="" && $password!="" && $ConfirmPassword!="" && $mail!="" &&  $ID!="" && $Mobile!="")
{
    $minpasswordlength=6;
    $maxpasswordlength=8;
    if(strlen($password)>=$minpasswordlength && strlen($password)<=$maxpasswordlength)
    {
  	$query2="INSERT INTO `User` (`Username`, `Password`, `ConfrimPassword`, `EmailID`, `EmployeeID`, `MobileNumber`) VALUES ('$username', '$password', '$ConfirmPassword', '$mail', '$ID', '$Mobile');";
    }
    else{
      echo '<script type="text/javascript">';
    echo 'alert("Password between length 6 and 8");';
    echo '</script>';
    }

  }
if($password==$ConfirmPassword)
{
$data = mysqli_query($conn,$query2);
}
}
if($data)
{
  echo '<script type="text/javascript">';
  echo 'alert("Signup Successfull");';
  echo '</script>';
}
else{
  echo '<script type="text/javascript">';
echo 'alert("ConfirmPassword not matches Password and username, ID already exist does not signup");';
echo '</script>';
}
?>
      </div>

  </div>
  </div>
  </center>



</body>

</html>
