<?php
$user='id15637366_registeration';
$pass="RI@)8H=c}qEF05>n";
$database="id15637366_web_db";
$host="localhost";
$connect=mysqli_connect($host, $user, $pass, $database);

 if(isset($_POST['submit']))
 {
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
	if(empty($Email) || empty($Password)){ 
		echo '<script>alert("Please Fill The Form Completely!")</script>';
		echo '<script>javascript:history.go(-1);</script>';
	}

	else if($Email=="aliafzal910415@gmail.com" && $Password=="Gamespot1122")
	{
		header("Location: adminpanel.html");
	}

	else 
	{
		$query="Select * From signup where `Email` = '$Email'";
		$result=$connect->query($query);
		if($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();
			 if($row['Password'] == $Password){
				 if(isset($_POST['remember']) ) {
				 setcookie('Email',$Email, time()+60*60*7);
				 setcookie('Password',$Password, time()+60*60*7);
				 }
				 session_start();
				 $_SESSION['Email']=$Email;  
				 $_SESSION['Password']=$Password;
				 echo '<script>alert("You logged in Successfully!!!");</script>';
				 echo '<script>window.location.href = "index.php";</script>';
			 }
			 else if($row['Password'] != $Password){
			 echo '<script>alert("Wrong Password!")</script>';
			 echo '<script>javascript:history.go(-1);</script>';
			 }
			 else{
			 echo '<script>alert("Login Failed!!")</script>';
			 echo '<script>javascript:history.go(-1);</script>';	 
			 }
		}
		else
		{
			echo '<script>alert(" Email Not Found. You Must Sign Up First.")</script>';
			echo '<script>window.location.href = "signup.html";</script>';
		}
	}
	 
 }
?>





