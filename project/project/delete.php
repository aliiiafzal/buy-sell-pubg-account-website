<?php
$user='id15637366_registeration';
$pass="RI@)8H=c}qEF05>n";
$database="id15637366_web_db";
$host="localhost";
$conn=mysqli_connect($host, $user, $pass, $database);

    session_start();
    $email=$_SESSION['Email'];
	$query="DELETE From signup WHERE `Email`='$email' ";
      $result=$conn->query($query);
	 if(mysqli_query($conn,$query))
	 {
        echo '<script>alert("Account deleted Successfully!!!")</script>';
		echo '<script>window.location.href = "index.php";</script>';
}
else
{
    echo '<script>alert(" An Error Has Occured. Delete Again! ")</script>';
    echo '<script>window.location.href = "dashboard.php";</script>';
   
 }
	 

?>




