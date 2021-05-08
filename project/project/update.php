<?php
$user='id15637366_registeration';
$pass="RI@)8H=c}qEF05>n";
$database="id15637366_web_db";
$host="localhost";
$connect=mysqli_connect($host, $user, $pass, $database);






 if(isset($_POST['submit']))
 {
    $Uname=$_POST['fname'];
    $Password=$_POST['password'];
    $PhoneNo=$_POST['phone'];
    $City=$_POST['city'];
    if(empty($Uname)  || empty($Password)|| empty($PhoneNo)|| empty($City)){ 
		echo '<script>javascript:history.go(-1);</script>';
     }
     else
     {
    session_start();
    $email=$_SESSION['Email'];
    $query="UPDATE signup SET  `Uname`='$Uname', `Password` ='$Password',`PhoneNo`='$PhoneNo',`City`='$City' WHERE `Email`='$email' ";
    $result=$connect->query($query);
    if(mysqli_query($connect,$query))
    {    
         echo '<script>alert("Data Updated Successfully!!!")</script>';
         echo '<script>window.location.href = "dashboard.php";</script>';
     }
     else
     {
         echo '<script>alert(" An Error Has Occured. Update Again! ")</script>';
         echo '<script>window.location.href = "dashboard.php";</script>';
     }
    }
   
 }
	 
?>





