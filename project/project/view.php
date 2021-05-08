<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <head>
    <title> View Profile </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
      body{
  background-image:url("css/graphics/20.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
    background-size: cover;
    padding-top: 150px;
}
table, th,td{
  width: 90%;
  margin: auto;
  border: 1px solid white;
  border-collapse: collapse;
  text-align: center;
  font-size: 30px;
  overflow:hidden;
  table-layout: fixed;
  background: blue;
  opacity: 0.7;
  color: white;
}
th,td{
    padding:0px;
  opacity: 0.9;
}
#hash{
 padding-bottom:50px;
}
    </style>
    </head>
<body>
  <center>
    <p style="font-size:50px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; My Account </p>
    </center>
<table>
<tr >
<th> Name </th>
<th> Email </th>
<th> Password </th>
<th> Phone No </th>
<th> City </th>
</tr>
</table>
</body>
</html>
<?php
$user='id15637366_registeration';
$pass="RI@)8H=c}qEF05>n";
$database="id15637366_web_db";
$host="localhost";
$conn=mysqli_connect($host, $user, $pass, $database);

     session_start();
     
if(!(isset($_SESSION['Email']))){
		echo '<script>alert("You Have To Login First!!!");</script>';
		echo '<script>window.location.href = "loginn.php";</script>';
}
else{
				$email=$_SESSION['Email'];
			  $query="Select * From signup WHERE `Email`='$email'";
			  $result=$conn->query($query);
			 if(mysqli_query($conn,$query))
			 {
				 if ($result->num_rows > 0) {
		?>		
		<body>
		<table>
		<?php	 
		echo "<hr><hr>";
				while($row = $result->fetch_assoc()) {
		echo "<tr style='display:flex; flex-direction:column; padding-top:30px; padding-bottom:30px'>";
		echo "<th style='padding-top:20px; padding-bottom:20px'>$row[Uname]</th>";
		echo "<th  style='padding-top:20px; padding-bottom:20px'>$row[Email]</th>";
		echo "<th  style='padding-top:20px; padding-bottom:20px'>$row[Password]</th>";
		echo "<th  style='padding-top:20px; padding-bottom:20px'>$row[PhoneNo]</th>";
		echo "<th  style='padding-top:20px; padding-bottom:20px'>$row[City]</th>";
		echo "</tr>	";
					}
			} 
		else {

				echo '<script>alert("No Data Found!")</script>';
		}
		?>
		</table>
		<div id="hash"></div>
		</body>
		<?php
		}
		else
		{
				echo '<script>alert("Failed!")</script>';
		 }
	 
}