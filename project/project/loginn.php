<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<head>
<title>Log in</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/form.css">
</head>
<body class="Register">


<header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#" style="font-family: 'skranji' , cursive;">~ GameSpot ~</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto"></div>
          <div class="navbar-nav">
            <a class="nav-item nav-link active" id="abc" href="index.php">Home</a>
            <a class="nav-item nav-link" id="select" href="loginn.php">Log in</a>
          </div>
        </div>
      </nav>
    </header>


<div class="container-fluid bg">





    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form class="form-container" action="login.php" method="POST">
            <h1 style="text-align: center;">Login</h1>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php if(isset($_COOKIE['Email'])) { echo $_COOKIE['Email']; } ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php if(isset($_COOKIE['Password'])) { echo $_COOKIE['Password']; } ?>">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-success btn-block" name="submit" value="submit">Submit</button>
          </form>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
</div>
</div> 

<div class="bottom">
<div class="footer"  style="
position:fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #5A5560;
  color: white;
  text-align: center;
">
    <div class="footer_container">
        <div class="row text-center">
            <p id="bb">
                Copyright &copy; All rights Reserved <span>Ali Afzal</span>
            </p>
        </div>
    </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
};
</script>

</body>
</html>