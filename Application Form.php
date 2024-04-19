
<html>

<head>
    <title>
        Application Form
    </title>
    <link rel="stylesheet" type="text/css" href="css/Application form.css">
    </link>
</head>

<body>
    <header>
        <div class="topnav">

            <td style="float:left;">
                <img src="../nsp project/images/piet logo.jpg" width="6%" height="10%"
                    style="margin-left: 40px; margin-top: 10px; margin-bottom: 10px;">
            </td>
            <td><a href="leavearranagement.php"><b>Leave arranagements</b></a></td>
            <td><a href="contact.php"><b>Contact us</b></a></td>

            <td><a href="index.php"><b>Home</b></a></td>
        </div>
    </header>
    <br>
    <div class="line"></div>
    <br>
    <h1><b>
            <center>EMPLOYEE LEAVE/OD APPLICATION FORM</center>
        </b>
    </h1>
    <br>
    <br>
    <div class="slide-left">
        <center>
            <p>Please fill the APPLICATION FORM below to leave from work.</p>
        </center>
    </div>
    <center>
        <div class="container">
            <form action="Application Form.php" id="form1" method="POST">
                <div class="box">
                    <table>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>Faculty Name</b>
                            </td>
                            <td>
                                <input type="text" placeholder=" ENTER NAME" name="name" required>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>Designation</b>
                            </td>
                            <td>
                                <input type="text" placeholder="ENTER DESIGNATION" name="designation" required>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>Emp.ID</b>
                            </td>
                            <td>
                                <input type="text" placeholder="EMPLOYEE ID" name="EmpID" required>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>Institute</b>
                            </td>
                            <td>
                                <input type="text" placeholder="INSTITUTE NAME" name="institute" required>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>Department</b>
                            </td>
                            <td>
                                <input type="text" placeholder="ENTER DEPARTMENT" name="department" required>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>Type of leave:</b>
                            </td>
                            <td style="font-size:25px;">
                                <input type="radio" name="type" value="Planned" required><b>Planned</b>
                                &nbsp&nbsp&nbsp
                                <input type="radio" name="type" value="Telephonic" required><b>Telephonic</b>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>Leave/OD taken so far:</b>
                            </td>
                            <td>
                                <input type="text" name="leave" size="35" maxlength="35" value="" required>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>Out of total Sanctioned:</b>
                            </td>
                            <td>
                                <input type="text" name="sanctioned" size="35" maxlength="35" value="" required>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>HOD Name</b>
                            </td>
                            <td>
                                <input type="text" placeholder=" ENTER HOD NAME" name="HODname" required>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>Leave/OD applied from(Date):</b>
                            </td>
                            <td style="font-size:25px;">
                                <input type="date" placeholder="DD/MM/YYYY" name="datefrom" required> <b>To</b>
                                <input type="date" placeholder="DD/MM/YYYY " name="dateto" required>

                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>No. Of Days</b>
                            </td>
                            <td>
                                <input type="number" placeholder="ENTER NO. OF LEAVE DAYS" name="days" required>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:x-large;">
                                <b>Reason</b>
                            </td>
                            <td>
                                <textarea rows="10" cols="40" name="reason" required></textarea>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <center>
                            <div class="button">

                                <td>
                                <input type="submit" name="savedata" value="Submit" onclick="location.href='index.php';"></input>
                                    <br>
                                    <br>
                                </td>
                                </td>
                            </div>
                        </center>
                    </table>
                </div>
        </div>
        </form>
    </center>
<?php
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
    $facultyname=$_POST['name'];
    $designation=$_POST['designation'];
    $EmpID=$_POST['EmpID'];
  $institute=$_POST['institute'];
     $department=$_POST['department'];
$typeleave=$_POST['type'];
$leave=$_POST['leave'];
$Sanctioned=$_POST['sanctioned'];
$HODName=$_POST['HODname'];
$datefrom=$_POST['datefrom'];
$dateto=$_POST['dateto'];
$days=$_POST['days'];
$reason=$_POST['reason'];
    
     
    $sql = "INSERT INTO `application form` (`FacultyName`, `Designation`, `EmpolyeeID`, `Institute`, `Department`, `Typeofleave`, `Leave/ODtakensofar`, `OutoftotalSanctioned`, `HODName`, `Leave/ODappliedfrom(Date)`, `Leave/ODappliedto(Date)`, `NumberOfDays`, `Reason`) 
    VALUES ('$facultyname', '$designation', '$EmpID', '$institute ', '$department', '$typeleave', '$leave', '$Sanctioned', '$HODName', '$datefrom', '$dateto', '$days', '$reason ');";
    $result = mysqli_query($conn, $sql);
        if ($facultyname!="" && $designation!="" && $EmpID!="" && $institute!="" && $department!="" && $typeleave!="" && $leave!="" && $Sanctioned!="" && $HODName!="" && $datefrom!="" && $dateto!="" && $days!="" && $reason!=""){
                //session_start();
                //$_SESSION['name'] = $row['name'];
            //    header("location: leavearranagement.php");
            echo "<script>alert('data inserted');</script>";
            } 
            else
            {
                //$showError = "Invalid Credentials";
                echo "<script>alert('Please fill all fields');</script>";
            }
        
        
} 
   
?>

</body>

</html>
