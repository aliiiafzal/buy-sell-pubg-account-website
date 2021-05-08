<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Skranji:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style1.css">
</head>
<body id="all">
<form name="form" action="display.php" method="POST">
<div class="header-admin">
    <div class="container">
        <div class="header-content">
         
             <div class="header_dropdown">
                 <div class="admin_content">
                     <div class="admin_data">
                     <div class="image">
                         <img class="profile_image" src="css/graphics/18.jpg" alt=""/>
                     </div>
                    <div class="admin_name">
                        <a href="#">
                            Profile
                        </a>
                    </div>
                    <div class="admin_dropdownicon">
                        <i class="fas fa-sort-down"></i>
                    </div>
                </div>
                 </div>
                <div class="account_dropdown">
					<div class="account_dropdown_body">
                        <div class="account_dropdown_item">
                            <a href="index.php">
                                <i class="fas fa-user"></i>Home
                            </a>
                        </div>
                    </div>

                    <div class="account_dropdown_body">
                        <div class="account_dropdown_item">
                            <a href="view.php">
                                <i class="fas fa-user"></i>View Account
                            </a>
                        </div>
                    </div>

                    <div class="account_dropdown_body">
                        <div class="account_dropdown_item">
                            <a href="updsign.html">
                                <i class="fas fa-user" name="ali"></i>Update Account
                            </a>
                        </div>
                    </div>
                    <div class="account_dropdown_body">
                        <div class="account_dropdown_item">
                            <a href="delete.php">
                                <i class="fas fa-user"></i>Delete Account
                            </a>
                        </div>
                    </div>
                    <div class="account_dropdown_body">
                    <div class="account_dropdown_item">
                        <a href="logout.php">
                            <i class="fas fa-user"></i>Logout
                        </a>
                    </div>
                    </div>
                </div>
                </div>

             </div>

        </div>
    </div>
</div>
</form>
</body>
<body>
<div class="cardd">
  <h4>My Accounts</h4>
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
 session_start();
     
if(!(isset($_SESSION['Email']))){
		echo '<script>alert("You Have To Login First!!!");</script>';
		echo '<script>window.location.href = "loginn.php";</script>';
}
else
{
			  	$email=$_SESSION['Email'];
			  $query="Select * From sell WHERE `Email`='$email'";
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



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="helloooo.js"></script>

</html>