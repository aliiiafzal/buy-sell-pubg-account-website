<html>
  <head>
    <title> Sell Account Info </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
    body{
        background-color: silver;
    }
table, th,td{
  width: 100%;
  margin: auto;
  border: 1px solid white;
  border-collapse: collapse;
  text-align: center;
  font-size: 15px;
  table-layout: fixed;
  background: blue;

  color: white;
  margin-top: 50px;
}
th,td{
  padding: 20px;
  opacity: 0.9;
}
img {
  width:100px;
  height:100px;
}
    </style>
    </head>
<body>

  <center>
    <p style="font-size:50px">&nbsp;Sell Account Info </p>
    </center>
<table>
<tr>
<th> Title </th>
<th> Price </th>
<th> Description </th>
<th> Country </th>
<th> State </th>
<th> ZipCode </th>
<th> Full Name </th>
<th> Email </th>
<th> Contact </th>
<th> Picture </th>
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

	  $query="Select * From sell";
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
echo "<th>$row[title]</th>";
echo "<th>$row[price]</th>";
echo "<th>$row[description]</th>";
echo "<th>$row[country]</th>";
echo "<th>$row[state]</th>";
echo "<th>$row[zipcode]</th>";
echo "<th>$row[fullname]</th>";
echo "<th>$row[email]</th>";
echo "<th>$row[contact]</th>";
echo "<th><a href='$row[picsource]'><img src='$row[picsource]' align='left'></a></th>";
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

