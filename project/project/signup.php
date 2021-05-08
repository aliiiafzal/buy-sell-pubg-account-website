<?php
$user='id15637366_registeration';
$pass="RI@)8H=c}qEF05>n";
$database="id15637366_web_db";
$host="localhost";
$connect=mysqli_connect($host, $user, $pass, $database);

 if(isset($_POST['submit']))
 {
	 $Uname=$_POST['fname'];
     $Email=$_POST['email'];
     $Password=$_POST['password'];
	 $PhoneNo=$_POST['phone'];
	 $City=$_POST['city'];
	 if(empty($Uname) || empty($Email) || empty($Password)|| empty($PhoneNo)|| empty($City)){ 
		echo '<script>javascript:history.go(-1);</script>';
	 }
	else 
	{
		
		$query="Select * From signup where `Email` = '$Email'";
		$result=$connect->query($query);
		if($result->num_rows > 0)
		{
			echo '<script>alert("Email Already Exist. Enter New Email!")</script>';
			echo '<script>javascript:history.go(-1);</script>';
		}
		else
		{
			$query="INSERT INTO `signup`(`Uname`, `Email`, `Password`,`PhoneNo`,`City`) VALUES ('$Uname','$Email','$Password','$PhoneNo','$City')";
			if(mysqli_query($connect,$query))
			{
				echo '<script>alert("Signed Up Successfully!!!")</script>';
				$to = $Email;
				$subject = "Welcome to GameSpot";
				$message = "Hi! ".$Uname." !!!\nWelcome To Our Website, Thank you for your choosing GameSpot.GameSpot may be a offering and buying PUBG accounts site that gives diverse PUBG account, and other information on video games.On this website you'll be able effectively purchase and offer PUBG accounts along with your intrigued and interface with diverse clients proficiently.



The site was made by Ali Afzal, Zeeshan Mustafa and Usama Waris.
Thanks!!!";
				$from = "aliafzal91041567@gmail.com";
				$header = "From : $from";
				mail($to , $subject , $message , $header);
				echo '<script>window.location.href = "loginn.php";</script>';
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





