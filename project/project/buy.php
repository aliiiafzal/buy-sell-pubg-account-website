<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<head>
<title>Gaming</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Skranji:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
</head>
<body class="ash">

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="#" style="font-family: 'skranji' , cursive;">~ GameSpot ~</a>
		<div class="navbar-nav mr-auto"></div>
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
          </div>
        </div>
      </nav>
    </header>
<form class="search-form" method="POST">
  <input class="search" type="number" placeholder="Enter Max Price Range..." name="search">
  <button class="search-btn" name="search-submit" type="submit"><i class="fa fa-search"></i></button>
</form>
<div class="offer-header">
<div id="writ">
<h2>Buy PUBG Mobile Accounts</h2>
</div>
</div>
<div class="cardd">
  <h4>Accounts</h4>
</div><br><br>
<table>
<tr>
<th> Picture </th>
<th> Title </th>
<th> Price </th>
<th> Details </th>
</tr>
</table>

<?php
$user='id15637366_registeration';
$pass="RI@)8H=c}qEF05>n";
$database="id15637366_web_db";
$host="localhost";
$conn=mysqli_connect($host, $user, $pass, $database);

if(isset($_POST['search-submit']) && $_POST['search'] != "")
{
		$price=$_POST['search'];
		$query="Select * From sell where `price` <= '$price' ";
			  $result=$conn->query($query);
			 if(mysqli_query($conn,$query))
			 {
				 if ($result->num_rows > 0) {
		?>		
		<table>
		<?php	 
		echo "<hr><hr>";
		while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td><a href='$row[picsource]'><img src='$row[picsource]' alt='...'></a></td>";
		echo "<td>$row[title]</td>";
		echo "<td>$row[price] $</td>";
		echo "<td><form action='detail.php' method='POST'><button type='submit' class='btn2' name='submit' value='$row[id]'>See Details</button></form></td>";
		echo "</tr>	";
		}
			} 
		else {

				echo '<script>alert("Found Nothing In That Range!")</script>';
		}	
	
}
?>
</table>
<?php
}
else{
	  $query="Select * From sell";
	  $result=$conn->query($query);
	 if(mysqli_query($conn,$query))
	 {
		 if ($result->num_rows > 0) {
?>		
<table>
<?php	 
echo "<hr><hr>";
		while($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td><a href='$row[picsource]'><img src='$row[picsource]' alt='...'></a></td>";
echo "<td>$row[title]</td>";
echo "<td>$row[price] $</td>";
echo "<td><form action='detail.php' method='POST'><button type='submit' class='btn2' name='submit' value='$row[id]'>See Details</button></form></td>";
echo "</tr>	";
			}
	} 
else {

		echo '<script>alert("No Accounts For Sale!")</script>';
}
?>
</table>
<?php
	 }
else
{
		echo '<script>alert("Accounts Retrieval Failed!")</script>';
 }
}
?>
</body>

<footer>
<div class="bottom">
<div class="footer">
    <div class="footer_container">
        <div class="row text-center">
            <p id="bb">
                Copyright &copy; All rights Reserved <span>Ali Afzal</span>
            </p>
        </div>
    </div>
    
    </div>
</div>
</footer>
</html>