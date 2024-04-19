
<html>

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> SIGN IN </title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  </link>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
  <header>
    <div class="topnav">

        <td style="float:left;"><img src="images/piet logo.jpg" width="6%" height="10%" style="margin-left: 40px; margin-top: 10px; margin-bottom: 10px;"></td>
        <td><a href="contact.php"><b>Contact us</b></a></td>
       
        <td><a href="index.php"><b>Home</b></a></td>
    </div>
    </header>
    <br>
    <div class="line"></div>
  <br>
  <div class="container1">
    <img src="images/piet.jpg" style="border-radius: 40px; margin: 25px 30px 30px 40px; width: 180%;height: 60%; box-shadow: 0px 0px 12px -15px;">
  
  </div>
 
  
  <div class="container">
  <center>
    <h3>
      LOGIN
    </h3>
  </center>
  <center>
      <form action="index.php" method="POST">
        <div class=button>
          <div class="box">
            <table>
              <tbody>

                <tr>
                  <td>
                    <div class="input-container">
                      <i class='far fa-user icon'></i>
                      <input type="text" placeholder="Enter Username" name="username"  required="">
</input>
                    </div>
                  </td>
                </tr>
                <br><br>
                <tr>
                  <td>
                    <div class="input-container">

                      <i class='fas fa-lock icon'></i>
                      <input type="password" placeholder="Enter password" name="password" required="">
                      </input>

                    </div>
                    
                    <h4><a href="mailto:2021pietcsmahak100@poornima.org">Forget password?</a></h4>
                  </td>
                </tr>

                <tr>
                  <td>
                    <center> <input type="submit" name="savedata" value="LOGIN"  ></input></center>
          </div>
         <br>
          <hr>
          <center>
            <div>
            <a href="https://accounts.google.com/SignOutOptions?hl=en&continue=https://www.google.com/"><img src="images/google.jpg" width="9%" height="8%"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp;
            <a href="https://www.linkedin.com/in/mahak-garg-09197523b"><img src="images/linkedin.png"
                width="7%" height="8%"></a>
            &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp;
            <a href="https://twitter.com/MahakGa?t=dOoon2VVEow8PqOkUyktvQ&s=08"><img src="images/twitter.jpg"
                width="7%" height="8%"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp;
            <a href="https://github.com/MAHAK0804"><img src="images/github.jpg" width="7%" height="8%"></a>
            <p>Not have any account?<a href="signup.php">Signup</a>
            <br><br>
            </center>
            </div>
          </td>

          </tr>
          </tbody>
      </table>
      </form>
  

<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "faculty";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn)
    {
    die("Error". mysqli_connect_error());
    }
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "SELECT * FROM `user` where Username='$username' AND Password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if ($num == 1){
                //session_start();
                //$_SESSION['name'] = $row['name'];
               header("location: Application.php");
            } 
            else
            {
                //$showError = "Invalid Credentials";
                echo "<script>alert('Invalid Credentials');</script>";
            }
        
        
} 
   
?>

</body>
</html>
