<?php
require('connection.php');
if(isset($_SESSION['USERNAME'])){
  header('Location: index.php');
}

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $result = mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND password='$password'");

        if(mysqli_num_rows($result) > 0 )
        { 
            $_SESSION["USERNAME"] = $username; 
            echo "<script type='text/javascript'>alert('Welcome {$_SESSION['USERNAME']}'); location.replace('index.php');</script>";    
        }
        else
        {
            echo "<script>alert('The username or password are incorrect!');</script>";
        }

}    
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>FLORO_LAB8</title>
	<meta charset="utf-8">
	<!-- Bootstrap 4 is mobile-first -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" > -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Zen+Tokyo+Zoo" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Staatliches" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Quicksand" />

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
	<script src="js/bootstrap.min.js"></script>
</head>

<section>
    <div class="row">
        <div class="col pt-5 pl-2 pr-2 justify-content-center">
            <!-- <h6 class="pt-4" style="font-family: ">
                LOIX 
            </h6> -->
 
            <h3 class="headings3 mt-5">
                Sign In to <span class="home-title" style="font-size: 2rem"> LOIX </span> 
            </h3>
                <div class="headings2 text-center text-muted"> Welcome back please log-in to your account.</div>


<!-- sign in kinemelatik -->
<div class="container p-5 ">
<form method="POST">
    <div class="form-group pl-5 pr-5">
   <!--    <label for="email" class="headings3">Email:</label> -->
      <input type="text" class="form-control headings2 text-danger card shadow" id="email" placeholder="Username" name="username" required>
    </div>
    <div class="form-group pl-5 pr-5">
      <!-- <label for="pwd" class="headings3">Password:</label> -->
      <input type="password" class="form-control headings2 text-danger card shadow" id="pwd" placeholder="Password" name="password" required>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label pl-5 pr-5 headings3 ">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <center>
    <button type="submit" name="login" class="btn btn-outline-danger headings3">Log In</button> <br> 
    <span class="headings2 pt-4"> or </span> <br>       
    <i class="fab fa-facebook  pr-4 fa-2x text-danger"></i>
    <i class="fab fa-google  pl-2 fa-2x text-danger"></i>
    </center>
  </form>

    <footer class="pt-3">
        <span class="headings2">Dont have an account? <u> <a class="headings2" href="#">Click Here </u> </a></span>
    </footer>
</div>
        <!-- end col -->
        </div>

        <div class="col home">
            <ul class="nav justify-content-end mt-5 mr-5">
                <li class="nav-item pr-5">
                  <a class="nav-link headings3" href="#">About</a>
                </li>
                <li class="nav-item pr-5">
                  <a class="nav-link headings3" href="#">Albums</a>
                </li>
                <li class="nav-item pr-5">
                  <a class="nav-link headings3" href="#">Reviews</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link headings3" href="#">Contact Us</a>
                </li>
            </ul>

            <h1 class="home-title text-center" style="text-shadow: 1px 2px  #C43A37">
                LOIX
            </h1>

            <div class="row">
            <div class="col-3 justify-content-end">
            <a href="https://www.facebook.com/john.lois.floro"><i class="fab fa-facebook-square text-danger p-3 fa-md text-right"></i></a>   <br>
            <a href="https://twitter.com/dumb_loixxx"><i class="fab fa-twitter text-danger p-3 fa-md"></i></a>  <br>
            <a href=""><i class="fab fa-pinterest text-danger p-3 fa-md"></i></a>  <br>
            <a href="#"><i class="fab fa-instagram text-danger p-3 fa-md"></i></a>   <br>
            </div>

            <div class="col justify-content-center">
                <h1 class="headings3 font-italic" style="text-shadow: 1px 1px  #AE0A13">
                    "The goal is the never go in <br> and out of style."
                </h1>
                
            </div>


            </div>
        </div>

    </div>
</section>

</html>


<style>
    html{
    overflow: hidden;
    }

    .home {
    width: auto;
    display: table;
    margin: 0;
    max-width: 100%;

    background-image: url("cam.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    }

    .home-title{
    padding: .5em .1em;
    font-size: 10em;
    font-family: Zen Tokyo Zoo;
    color: #AE0A13;
    letter-spacing: .2em;
    }

    .headings{
    font-family: Staatliches;
    font-size: 2.5em;
    color: #C43A37;
    }

    .headings2{
    color: #A21F1E;
    font-family:Quicksand;
    font-weight: bolder;
    }

    .headings3{
    font-family: Staatliches;
    color: #C43A37;
    font-weight: lighter;
    letter-spacing: .3em;
    text-align: center;
    }

    .form-control , .btn{
    border-radius: 2em;
    border: .3em solid #C43A37;
    }
</style>