<html>
  <head>
    <title> Contact Info </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
    body{
        background-color: silver;
    }
table, th,td{
  width: 90%;
  margin: auto;
  border: 1px solid white;
  border-collapse: collapse;
  text-align: center;
  font-size: 15px;
  table-layout: fixed;
  background: blue;
  opacity: 0.5;
  color: white;
  margin-top: 50px;
}
th,td{
  padding: 20px;
  opacity: 0.9;
}
    </style>
    </head>
<body>

  <center>
    <p style="font-size:50px">&nbsp;Contact Info </p>
    </center>
<table>
<tr>
<th> First Name </th>
<th> Last Name </th>
<th> Email </th>
<th> Message </th>
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

	  $query="Select * From contact";
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
echo "<tr>";
echo "<th>$row[Fname]</th>";
echo "<th>$row[Lname]</th>";
echo "<th>$row[Email]</th>";
echo "<th>$row[Message]</th>";
echo "</tr>	";
			}
	} 
else {

		echo '<script>alert("No Data Found!")</script>';
		echo '<script>javascript:history.go(-1);</script>';
}
?>
</table>
</body>
<?php
}

