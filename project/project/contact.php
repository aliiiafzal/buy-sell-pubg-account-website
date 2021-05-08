<?php
$user='id15637366_registeration';
$pass="RI@)8H=c}qEF05>n";
$database="id15637366_web_db";
$host="localhost";
$connect=mysqli_connect($host, $user, $pass, $database);

     session_start();
     
if(!(isset($_SESSION['Email']))){
		echo '<script>alert("You Have To Login First!!!");</script>';
		echo '<script>window.location.href = "loginn.php";</script>';
}
else
{
		 if(isset($_POST['submit']))
		 {
			 $Fname=$_POST['Fname'];
			 $Lname=$_POST['Lname'];
			 $Email=$_POST['Email'];
			 $Message=$_POST['Message'];
			 
			 if(empty($Fname) || empty($Lname) || empty($Email)|| empty($Message)){ 
				echo '<script>alert("Form is Empty!!!")</script>';
				echo '<script>javascript:history.go(-1);</script>';
			 }
			else 
			{
				
					$query="INSERT INTO `contact`(`Fname`, `Lname`, `Email`,`Message`) VALUES ('$Fname','$Lname','$Email','$Message')";
					if(mysqli_query($connect,$query))
					{
						echo '<script>alert("Message Sent Successfully!!!")</script>';
						echo '<script>window.location.href = "index.php";</script>';
					}
					else
					{
						echo '<script>alert(" An Error Has Occured. Sign Up Again! ")</script>';
						echo '<script>javascript:history.go(-1);</script>';
					}
				}
			}
}
?>





