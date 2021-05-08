<html >
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

<head>
<title>Gaming</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Skranji:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
</head>
<body class="ash">

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="#" style="font-family: 'skranji' , cursive;">~ GameSpot ~</a>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto"></div>
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
          </div>
        </div>
	  </nav>
    </header>
<div class="offer-header">
<div id="writ">
<h2>PUBG Mobile</h2>
</div>
</div>
<?php
$user='id15637366_registeration';
$pass="RI@)8H=c}qEF05>n";
$database="id15637366_web_db";
$host="localhost";
$conn=mysqli_connect($host, $user, $pass, $database);
if(isset($_POST['submit']))
	{
		$ID=$_POST['submit'];
		$query="Select * From sell where `id` = '$ID'";
		$result=$conn->query($query);
		if($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();
			echo "
			<h4 class='cardd'>Account Information</h4>
			<a href='$row[picsource]'><img class='detailimg' src='$row[picsource]' align='left'></a>
			<ul>
				<li><h5>Tilte --></h5></li>
				<li><p>$row[title]</p></li>
			</ul>
			<ul>
				<li><h5>Price --></h5></li>
				<li><p>$row[price] $</p></li>
			</ul>
			<ul>
				<li><h5>Description --></h5></li>
				<li><p>$row[description]</p></li>
			</ul>
			<hr><hr>
			<h4 class='cardd'>Seller's Information</h4><br><br>
			<ul>
				<li><h5>Name --></h5></li>
				<li><p>$row[fullname]</p></li>
			</ul>
			<ul>
				<li><h5>Email --></h5></li>
				<li><p>$row[email]</p></li>
			</ul>
			<ul>
				<li><h5>Country --></h5></li>
				<li><p>$row[country]</p></li>
			</ul>
			<ul>
				<li><h5>State --></h5></li>
				<li><p>$row[state]</p></li>
			</ul>
			<ul>
				<li><h5>Zip Code --></h5></li>
				<li><p>$row[zipcode]</p></li>
			</ul>
			<ul>
				<li><h5>Contact Number --></h5></li>
				<li><p>$row[contact]</p></li>
			</ul>
			";
			
		}
		else
		{
		echo '<script>alert("Detail Retrieval Failed!")</script>';
		}
	}
else
{
		echo '<script>alert("Accounts Retrieval Failed!")</script>';
}
 ?>

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
</body>
</html>