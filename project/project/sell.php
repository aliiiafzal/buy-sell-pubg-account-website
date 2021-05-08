<?php
$user='id15637366_registeration';
$pass="RI@)8H=c}qEF05>n";
$database="id15637366_web_db";
$host="localhost";
$connect=mysqli_connect($host, $user, $pass, $database);

 if(isset($_POST['submit']))
 {
	 $level=$_POST['level'];
     $price=$_POST['price'];
     $description=$_POST['description'];
     
     $filename=$_FILES["inpFile"]["name"];
     $tempname=$_FILES["inpFile"]["tmp_name"];
     $folder="css/graphics/images/".$filename;
     move_uploaded_file($tempname,$folder);

	 $country=$_POST['country'];
     $state=$_POST['state'];
     $zipcode=$_POST['zipcode'];
     $fullname=$_POST['fullname'];
     $email=$_POST['email'];
     $contact=$_POST['contact'];
     
	 if(empty($level) || empty($price) || empty($description)|| empty($filename)|| empty($country)|| empty($state)|| empty($zipcode)|| empty($fullname)|| empty($email)|| empty($contact)){ 
        echo '<script>alert("Field is Empty!!!")</script>';
		
	 }
	else 
	{
	
			$query="INSERT INTO `sell`(`title`, `price`, `description`,`country`,`state`,`zipcode`,`fullname`,`email`,`contact`, `picsource`) VALUES ('$level','$price','$description','$country','$state','$zipcode','$fullname','$email','$contact','$folder')";
			if(mysqli_query($connect,$query))
			{
				echo '<script>alert("Published Successfully!!!")</script>';
				echo '<script>window.location.href = "index.php";</script>';
			}
			else
			{
				echo '<script>alert(" An Error Has Occured. Publish Again! ")</script>';
				
			}
	}
}


?>





