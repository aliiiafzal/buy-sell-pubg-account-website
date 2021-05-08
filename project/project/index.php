<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<head>
<title>Gaming</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Skranji:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body class="ash">

<div class="site-wrapper">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#" style="font-family: 'skranji' , cursive;">~ GameSpot ~</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto"></div>
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="signup.html">Sign up</a>
            <a class="nav-item nav-link" href="loginn.php">Log in</a>
            <a class="nav-item nav-link" href="dashboard.php">My Account</a>
          </div>
        </div>
      </nav>
    </header>

<main>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="css/graphics/1.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="css/graphics/2.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="css/graphics/3.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="css/graphics/4.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="css/graphics/6.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="css/graphics/7.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="css/graphics/8.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</main>

</div>
<div class="alignbtns">
	<button type="submit" id="submit" onclick="check(value);" name="submit" value="<?php session_start(); if(isset($_SESSION['Email'])) { echo "yes"; } else { echo "no"; } ?>" class="btn1" data-toggle="modal" data-target="#exampleModalLong" >Sell Your PUBG Account</button>
	<a href="buy.php"><button type="button" class="btn2">Buy A PUBG Account</button></a>
</div><br><br>
<section class="section-1">
<div class="container">
<div class="row">
<div class="col-md-4">
    <div class="card" style="width: 18rem; margin:auto">
        <img src="css/graphics/9.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
              been the industry's standard dummy text ever since the 1500s </p>
        </div>
      </div>
</div>
<div class="col-md-4">
    <div class="card" style="width: 18rem; margin:auto">
        <img src="css/graphics/10.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
              been the industry's standard dummy text ever since the 1500s </p>
        </div>
      </div>
</div>
<div class="col-md-4">
    <div class="card" style="width: 18rem; margin:auto">
        <img src="css/graphics/11.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
              been the industry's standard dummy text ever since the 1500s </p>
        </div>
      </div>
</div>

</div>

<div class="row my-4">
<div class="col-md-4 offset-md-2">
<div class="card" style="width: 18rem; margin:auto">
    <img src="css/graphics/12.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-white">Assassin's Creed</h5>
      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
        been the industry's standard dummy text ever since the 1500s</p>
    </div>
  </div>
</div>
<div class="col-md-4">
<div class="card" style="width: 18rem; margin:auto">
    <img src="css/graphics/13.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-white">Assassin's Creed</h5>
      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
        been the industry's standard dummy text ever since the 1500s</p>
    </div>
  </div>
</div>
</div>
</div>


</section>

<section class="section-2">

    <div class="card  text-center">
        <h5 class="card-header text-white">Featured</h5>
        <div class="card-body">
          <h5 class="card-title text-white">Upcoming Games</h5>
          <p class="card-text text-dark">With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <span class="parallax"></span>
      </div>
</section>

<section class="section-3 m-4">
<div class="container">
<div class="row mt-4">
<div class="col-md-12">
<h3 style="color: crimson;">Contact Us</h3>

</div>

</div>
<div class="row">
    <div class="col-md-12">
        <form class="mt-4" action="contact.php" method="POST">
<div class="form-row">
    <div class="col">
        <input type="text" class="form-control" name="Fname" placeholder="First Name">
    </div>
    <div class="col">
        <input type="text" class="form-control" name="Lname" placeholder="Last Name">
    </div>
</div>
<div class="form-row mt-3">
    <div class="col">
        <input type="email" class="form-control" name="Email" placeholder="Email">
    </div>
</div>
<div class="form-row mt-3">
    <div class="col">
        <label form="" class="text-white"> Comment</label>
        <textarea name="Message" id="inputAddress" rows="5" class="form-control" placeholder="Message"></textarea>
    </div>
  
</div>
<div class="modal-footer">
  <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
</div>
</form>
</div>
    </div>
</div>
</div>

</section>
<?php
if(isset($_POST['submit'])){     
	if(!(isset($_SESSION['Email']))){
		echo '<script>alert("You Have To Login First!!!");</script>';
		echo '<script>window.location.href = "loginn.php";</script>';
	}
}	
?>


<section class="section-4">
    <p class="text-center text-dark">
        Copyright &copy; All rights Reserved <span style="color: crimson;">Ali Afzal</span>
    </p>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLongTitle">Sell PUBG Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"  class="text-dark">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

        <form name="form"  action="sell.php" method="POST" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4" class="text-dark">Title</label>
              <input type="text" name="level" class="form-control " id="5Email4" placeholder="title">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4" class="text-dark">Price</label>
              <input type="number" name="price" class="form-control" id="Password4" placeholder="5$">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress" class="text-dark">Description</label>
            <textarea name="description" id="inputAddress" rows="5" class="form-control" placeholder="Description"></textarea>
          </div>

      <input type="file" name="inpFile" id="inpFile" class="text-dark">
      <div class="image-preview" id="imagePreview">
<img src="" alt="Image Preview" class="image-preview__image text-dark">
<span class="image-preview__default-text text-dark">Image Preview</span>
      </div>

<br>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity" class="text-dark">Country</label>
              <input type="text" name="country" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState" class="text-dark">State</label>
              <input type="text" name="state" class="form-control" id="City">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip" class="text-dark">Zip Code</label>
              <input type="text" name="zipcode" class="form-control" id="inputZip">
            </div>

            <div class="form-group col-md-6">
              <label for="inputEmail4" class="text-dark">Full Name</label>
              <input type="text" name="fullname" class="form-control " id="Email4" placeholder="aliafzal">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4" class="text-dark">Email</label>
              <input type="email" name="email" class="form-control" id="tEmail4"  placeholder="aliafzal@gmail.com">
            </div>

          </div>

          <div class="form-group row">
            <label for="example-tel-input" class="col-2 col-form-label text-dark">Contact</label>
            <div class="col-10">
              <input class="form-control" name="contact" type="tel" id="example-tel-input" placeholder="1-(555)-555-5555">
            </div>
          </div>
         
      
         

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Publish</button>
      </form>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="hello.js"></script>
<script>
$(document).ready(function(){
  window.onbeforeunload = function () {
    window.scrollTo(0, 0);
};

  </script>
</body>

</html>