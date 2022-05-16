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

<!-- nav bar kineme -->
<nav class="navbar navbar-expand-md fixed-top navbar-dark  main-nav">
        <div class="navbar-collapse collapse nav-content order-2">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolios">Portfolios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ppl">People</a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2">
            <li class="nav-item active"><a class="nav-link title" href="#home" style="font-family: Zen Tokyo Zoo; text-shadow: 1px 2px  #C43A37"> LOIX </a></li>
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".nav-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </ul>
        <div class="ml-auto navbar-collapse  nav-content order-3 order-md-3">
            <ul class="ml-auto nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="mailto:johnlois.floro@cvsu.edu.ph"><i class="fa fas fa-envelope fa-lg"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/john.lois.floro"><i class="fab fa-instagram fa-lg"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/dumb_loixxx"><i class="fab fa-twitter fa-lg"></i></a>
                  </li>
                  <li class="nav-item">
                      <!-- section lang -->
                    <a class="nav-link" href="logout.php" title="logout" onclick="return confirm('  Are you sure want to logout?');" ><i class="fas fa-sign-out-alt fa-lg"></i></a>
                  </li>
            </ul>
        </div>
</nav>


<section id="home" class="home">
    <h1 class="text-center home-title" style="text-shadow: 3px 3px rgba( 0 , 0, 0, .1)">
        LOIX ALBUMS
        <br>
        <h6 class="text-center headings3 font-weight-bolder">
            by John Lois Floro
        </h6>
    </h1>
    

   
    <h1 class="display 3 home-quo pl-5 font-italic" style="text-shadow: 3px 3px rgba( 0 , 0, 0, .1)">
        <span  class="headings">
        "The  goal is to never go in <br>and out of <span class="text-white">style.</span> "
        </span> 
    </h1>
</section>



<!--portfolio finished -->
<section class="samples" id="portfolios">
    <h3 class="p-5 text-right headings2 font-weight-bold"> Portfolios</h3>

    <div class="container">
        <div class="row pb-5">
        <div class="col-3 container">
            <span class="headings2">Captured By Dennise</span>
            <img class="card-img  pic" src="1.jpg" alt="Card image" >
            
            <span class="pb-5 pt-3 headings3 text-center">"Girl In the Wind"</span>
            <img class="card-img pt-3 pic" src="5.jpg" alt="Card image" >
            <span class="pb-5 pt-3 headings3 text-center">"Pink Clouds"</span>
        </div>
        <div class="col-3  container">
            <img class="card-img pic pt-4" src="hannah.jpg" alt="Card image" >
            <span class="pb-5 pt-3 headings3 text-center">"Taylor Swift"</span>
            <img class="card-img pt-3 pic" src="5.jpg" alt="Card image" >
            <span class="pb-5 pt-3 headings3 text-center">"Palawan"</span>
        </div>
        <div class="col-3 container">
            <img class="card-img pic" src="3.jpg" alt="Card image" >
            <span class="pb-5 pt-3 headings3 text-center">"Charcoal"</span>
            
        </div>
        </div>
        
        <div class="row pb-5">
            <div class="col-3 container">
                <img class="card-img pic pt-5" src="11.jpg" alt="Card image" >
                <span class="pb-5 pt-3 headings3 text-center">"china"</span>
            </div>
            <div class="col-3  container">
                <img class="card-img pt-4 pic" src="5.jpg" alt="Card image" >
                <span class="pb-5 pt-3 headings3 text-center">"daisy"</span>
                <img class="card-img pt-3 pic" src="hannah.jpg" alt="Card image" >
                <span class="pb-5 pt-3 headings3 text-center">"ecq"</span>
            </div>
            <div class="col-3 container">
                <span class="headings2">Captured By Loi</span>
                <img class="card-img pic" src="1.jpg" alt="Card image" >
                <span class="pb-5 pt-3 headings3 text-center">"wind"</span>
                <img class="card-img pt-3 pic" src="cam.jpg" alt="Card image" >
                <span class="pb-5 pt-3 headings3 text-center">"tagaytay"</span>
            </div>
            </div>
        
        
    </div>
</section>

<!-- ppl finished -->
<section class="ppl" id="ppl">
    <div class="row ">
        <div class="col-4 p-5 ">
            <h5 class="text-center pb-2 ppl headings3">
                DENNISE SIONA
            </h5>
            <img class="card-img" src="dennise.jpg" alt="Card image" data-toggle="modal" data-target="#exampleModalLongDennise">
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLongDennise" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title headings3 text-white" id="exampleModalLongTitle">Dennise Siona</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                              <a class="nav-link headings2" href="#">Price</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link headings2" href="#">Profile</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link headings2" href="#">Reviews</a>
                            </li>
                          </ul>
                          <hr>
                        
                        <span class="headings2">
                        <!-- picture -->
                        <span class="font-weight-bold">Dennise </span> is a lifestyle photographer. Hire her.
                        You’ll have a blast working with her—it's hard not to when you're
                        around her positive energy and infectious laugh.
                        You’ll get all the shots you need, plus many more that you didn’t
                        even know you wanted. 


                        <br>
                        <br>

                            <span class="pt-5 ml-3 font-weight-bolder">
                            Reviews - 85%
                            <div class="progress ml-3 mr-5">
                              <div class="progress-bar" role="progressbar" style="width: 85%; background-color: #AE0A13;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </span>
                            <span class="pt-5 ml-3 font-weight-bolder">
                            Portfolios - 93%
                            <div class="progress ml-3 mr-5">
                              <div class="progress-bar" role="progressbar" style="width: 93%; background-color: #AE0A13;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </span>
                            <span class="pt-5 ml-3 font-weight-bolder">
                            Style - 99%
                            <div class="progress ml-3 mr-5">
                              <div class="progress-bar" role="progressbar" style="width: 99%; background-color: #AE0A13;" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </span>
                            

                        <hr>

                        <span class="font-weight-bold"> Want to get to know Dennise better? </span> <br>

                        • Ask about life in a teepee.   <br>
                        • Ask about flying shotgun with the Blue Angels. <br>
                        • Ask about the countries she’s explored (55 & counting). <br>
                        • Ask about sheep shearing. <br>
                        • Ask about the shoot that resulted in wedding bells & babies. <br>
                        • Ask why her Boston Cream Pie is...infamous. <br>
                        • Ask about swimming with sharks. <br>
                        </span>

                        <hr>
                        <div class="text-center">
                        <a href="https://www.facebook.com/john.lois.floro"><i class="fab fa-facebook-square text-danger p-2 fa-lg "></i></a>
                        <a href="https://twitter.com/dumb_loixxx"><i class="fab fa-twitter text-danger p-2 fa-lg"></i></a>
                        <a href=""><i class="fab fa-youtube text-danger p-2 fa-lg"></i></a>
                        <a href="#"><i class="fab fa-instagram text-danger p-2 fa-lg"></i></a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of modal -->
        </div>
        <div class="col-4 p-5 border-left-1 middle ">
            <h3 class="text-center headings3 ">
                People
            </h3>
            <h5 class="text-center pb-4 headings2 ">
                Meet the team riders of Photography
            </h5>
            
            <img class="card-img card-img-top ppl pb-2" src="me.jpg" alt="Card image" data-toggle="modal" data-target="#exampleModalLongLoi" >
            <h5 class="text-center headings3 ">
                Loi Floro
            </h5>
            <!-- Modal -->
              <div class="modal fade" id="exampleModalLongLoi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title headings3 text-white" id="exampleModalLongTitle">Loi Floro</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                              <a class="nav-link headings2" href="#">Price</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link headings2" href="#">Profile</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link headings2" href="#">Reviews</a>
                            </li>
                          </ul>
                          <hr>
                        
                        <span class="headings2">
                        <!-- picture -->
                        <span class="font-weight-bold">Loi </span> is a lifestyle photographer. Hire her.
                        You’ll have a blast working with her—it's hard not to when you're
                        around her positive energy and infectious laugh.
                        You’ll get all the shots you need, plus many more that you didn’t
                        even know you wanted. 


                        <br>
                        <br>

                            <span class="pt-5 ml-3 font-weight-bolder">
                            Reviews - 85%
                            <div class="progress ml-3 mr-5">
                              <div class="progress-bar" role="progressbar" style="width: 85%; background-color: #AE0A13;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </span>
                            <span class="pt-5 ml-3 font-weight-bolder">
                            Portfolios - 93%
                            <div class="progress ml-3 mr-5">
                              <div class="progress-bar" role="progressbar" style="width: 93%; background-color: #AE0A13;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </span>
                            <span class="pt-5 ml-3 font-weight-bolder">
                            Style - 99%
                            <div class="progress ml-3 mr-5">
                              <div class="progress-bar" role="progressbar" style="width: 99%; background-color: #AE0A13;" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </span>
                            

                        <hr>

                        <span class="font-weight-bold"> Want to get to know Loi better? </span> <br>

                        • Ask about life in a teepee.   <br>
                        • Ask about flying shotgun with the Blue Angels. <br>
                        • Ask about the countries she’s explored (55 & counting). <br>
                        • Ask about sheep shearing. <br>
                        • Ask about the shoot that resulted in wedding bells & babies. <br>
                        • Ask why her Boston Cream Pie is...infamous. <br>
                        • Ask about swimming with sharks. <br>
                        </span>

                        <hr>
                        <div class="text-center">
                        <a href="https://www.facebook.com/john.lois.floro"><i class="fab fa-facebook-square text-danger p-2 fa-lg "></i></a>
                        <a href="https://twitter.com/dumb_loixxx"><i class="fab fa-twitter text-danger p-2 fa-lg"></i></a>
                        <a href=""><i class="fab fa-youtube text-danger p-2 fa-lg"></i></a>
                        <a href="#"><i class="fab fa-instagram text-danger p-2 fa-lg"></i></a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-4 p-5  ">
            <h5 class="text-right headings2">
                All Photographers
            </h5>
            
            <h5 class="text-center pb-2 ppl1 headings3">
                EL LANUZA
            </h5>
            <img class="card-img" src="elr.jpg" alt="Card image" data-toggle="modal" data-target="#exampleModalLongEl" >
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLongEl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title headings3 text-white" id="exampleModalLongTitle">El Lanuza</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                              <a class="nav-link headings2" href="#">Price</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link headings2" href="#">Profile</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link headings2" href="#">Reviews</a>
                            </li>
                          </ul>
                          <hr>
                        
                        <span class="headings2">
                        <!-- picture -->
                        <span class="font-weight-bold">El </span> is a lifestyle photographer. Hire her.
                        You’ll have a blast working with her—it's hard not to when you're
                        around her positive energy and infectious laugh.
                        You’ll get all the shots you need, plus many more that you didn’t
                        even know you wanted. 


                        <br>
                        <br>

                            <span class="pt-5 ml-3 font-weight-bolder">
                            Reviews - 85%
                            <div class="progress ml-3 mr-5">
                              <div class="progress-bar" role="progressbar" style="width: 85%; background-color: #AE0A13;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </span>
                            <span class="pt-5 ml-3 font-weight-bolder">
                            Portfolios - 93%
                            <div class="progress ml-3 mr-5">
                              <div class="progress-bar" role="progressbar" style="width: 93%; background-color: #AE0A13;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </span>
                            <span class="pt-5 ml-3 font-weight-bolder">
                            Style - 99%
                            <div class="progress ml-3 mr-5">
                              <div class="progress-bar" role="progressbar" style="width: 99%; background-color: #AE0A13;" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </span>
                            

                        <hr>

                        <span class="font-weight-bold"> Want to get to know El better? </span> <br>

                        • Ask about life in a teepee.   <br>
                        • Ask about flying shotgun with the Blue Angels. <br>
                        • Ask about the countries she’s explored (55 & counting). <br>
                        • Ask about sheep shearing. <br>
                        • Ask about the shoot that resulted in wedding bells & babies. <br>
                        • Ask why her Boston Cream Pie is...infamous. <br>
                        • Ask about swimming with sharks. <br>
                        </span>

                        <hr>
                        <div class="text-center">
                        <a href="https://www.facebook.com/john.lois.floro"><i class="fab fa-facebook-square text-danger p-2 fa-lg "></i></a>
                        <a href="https://twitter.com/dumb_loixxx"><i class="fab fa-twitter text-danger p-2 fa-lg"></i></a>
                        <a href=""><i class="fab fa-youtube text-danger p-2 fa-lg"></i></a>
                        <a href="#"><i class="fab fa-instagram text-danger p-2 fa-lg"></i></a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</section>

<!-- prices -->
<section class="text-center">
  <h1 class="mt-5 headings3">
      <u>OUR SECRET TRICKS</u> 
  </h1>

    <span class="headings2"> If you want to know the secret of our recipe, we will tell you ...</span>

  <div class="row">
      <div class="col-6 p-5 mt-4 headings2 font-weight-bold text-dark">
        Diffrent training camps is our secret. Our photographers are made to measure. We obey the needs of each client and do not have a ready-made “menu”. 
        
        For us there is only one thing that cannot be missing in our albums: The satisfaction of the customers
      </div>

      <div class="col-6 p-5 headings3">
          <span class="pt-5 ml-3 font-weight-bolder">
            Reviews - 85%
            <div class="progress ml-3 mr-5">
              <div class="progress-bar" role="progressbar" style="width: 85%; background-color: #AE0A13;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </span>
            <span class="pt-5 ml-3 font-weight-bolder">
            Portfolios - 93%
            <div class="progress ml-3 mr-5">
              <div class="progress-bar" role="progressbar" style="width: 93%; background-color: #AE0A13;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </span>
            <span class="pt-5 ml-3 font-weight-bolder">
            Style - 99%
            <div class="progress ml-3 mr-5">
              <div class="progress-bar" role="progressbar" style="width: 99%; background-color: #AE0A13;" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </span>
    </div>
  </div>
</section>

<!-- just another pic -->
<section> 
        <div class="row">
            <!-- <img src="hike.jpg" class="img-fluid" alt="Responsive image"> -->
            <div class="col-1">

            </div>

            <div class="col">
<div id="demo2" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo2" data-slide-to="0" class="active"></li>
    <li data-target="#demo2" data-slide-to="1"></li>
    <li data-target="#demo2" data-slide-to="2"></li>
    <li data-target="#demo2" data-slide-to="3"></li>
    <li data-target="#demo2" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" width="1100" height="500" style="border:3px solid #A21F1E; border-radius: 1em;">
      <div class="carousel-caption">
        <h3 class="headings3">Girl In The Wind</h3>
        <p class="headings2">by John Lois Floro</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="5.jpg" width="1100" height="500" style="border:3px solid #A21F1E; border-radius: 1em;">
      <div class="carousel-caption">
        <h3 class="headings3">Daisies</h3>
        <p class="headings2">by Dennise Siona</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="hike.jpg" width="1100" height="500" style="border:3px solid #A21F1E; border-radius: 1em;">
      <div class="carousel-caption">
        <h3 class="headings3">See</h3>
        <p class="headings2">by John Lois Floro</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="hannah.jpg" width="1100" height="500" style="border:3px solid #A21F1E; border-radius: 1em;">
      <div class="carousel-caption">
        <h3 class="headings3">Taylor Swift</h3>
        <p class="headings2">by Hannah Reynaldo</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="cam.jpg"  width="1100" height="500" style="border:3px solid #A21F1E; border-radius: 1em;">
      <div class="carousel-caption">
        <h3 class="headings3">Photography</h3>
        <p class="headings2">by El Lanuza</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo2" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo2" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

    <div class="col-1">

    </div>
         </div>
    
</section>

<!-- about -->
<div class="row pt-5" id="about">
    <div class="col-6 bg-light text-center p-5">
        
        <img src="avatar.JPG" alt="Avatar" class="avatar">
        <h3 class="text-center p-3">John Lois Floro</h3>
        <p class="pb-2"> I am person who have great interest un UX/UI development. Someday I wanna be able to have that career like any succesful people in this industry.
        </p> 
        <hr>
        <!-- soc med kinenelatik -->
        <a href="https://www.facebook.com/john.lois.floro"><i class="fab fa-facebook-square text-danger p-2 fa-lg "></i></a>
        <a href="https://twitter.com/dumb_loixxx"><i class="fab fa-twitter text-danger p-2 fa-lg"></i></a>
        <a href=""><i class="fab fa-youtube text-danger p-2 fa-lg"></i></a>
        <a href="#"><i class="fab fa-instagram text-danger p-2 fa-lg"></i></a>
    </div>

    <div class="col-6 text-white p-5 " style="background-color: #C43A37;">
        
        <h1 class="text-center" style="font-family: Zen Tokyo Zoo; letter-spacing: 1em;">LOIX</h1>
        <hr>
        <div class="row ">
            <div class="col">
            <u><h6 class="headings2 text-white font-weight-bold">ABOUT</h6></u>
            <small class="headings2 text-white text-left">
                About LOIXX <br>
                Advertise on LOIX <br>
                Contact LOIX <br>
                Explore LOIX <br>
                Submit to LOIX <br>
                Privacy & Terms <br>
                Careers
            </small>
            </div>

            <div class="col">
            <u><h6 class="headings2 text-white font-weight-bold">PROFFESSIONALS</h6></u>
            <small class="headings2 text-white text-left">
                Showcase your work  <br>
                Promote on LOIX <br>
                Become LOIX <br>
            </small>
            </div>

            <div class="col">
                <u><h6 class="headings2 text-white font-weight-bold">Follow US</h6></u>
                <small class="headings2 text-white text-left">
                    <i class="fab fa-twitter text-dark p-2 fa-lg"></i> @dumb_loixxx  <br>
                    <i class="fab fa-instagram text-dark p-2 fa-lg"></i> @bnw_loixxx <br>
                    
                </small>
            </div>
        </div>
        <hr>
            <span></span>
    </div>    
</div>

    <footer  class="heading2" style="background-color: #feeeec;">
        Reserved © 2021 All rights reserved
    </footer>
</html>


<style>
    /* .home-cards {
    padding-top: 55%;
    } */
    html{
      overflow-x: hidden ;
    }

    nav{
    background-color: #AE0A13;
    }

    .nav-item{
    color: #FEFEFF;
    }

    .title{
    font-size: 1.5em;
    letter-spacing: .5em;
    }

    .home-title{
    margin-top: 2.5em;
    font-size: 3.5em;
    font-family: Zen Tokyo Zoo;
    color: #AE0A13;
    }

    .headings{
    font-family: Staatliches;
    font-size: 2.5em;
    color: #C43A37;
    }

    .headings2{
    color: #A21F1E;
    font-family:Quicksand;
    }

    .headings3{
    font-family: Staatliches;
    color: #C43A37;
    font-weight: lighter;
    letter-spacing: .3em;
    text-align: center;
    }

    .ppl{
    background-color: #feeeec;
    }

    .home-quo{
    margin-top: 3.5em;
    font-size: 3em;
    }

    .modal-header{
    background-color:#C43A37 ;
    }
    /* .card-img::before{
    color: rgba(174,10,19,1);
    
    }
    .card-img{
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
    transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
    cursor: pointer;
}

    .card-img:hover{
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    } */

    .card-img{ 
    filter: grayscale(100%); 
    transition: filter .3s ease-in-out;
    
    }
    
    .card-img:hover { 
    filter: none;
    cursor: pointer;
    }

    .home {
    width: 100%;
    display: table;
    margin: 0;
    max-width: 100%;

    background-image: url("cam.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    }

    .ppl{
    margin-top: 5em;
    }

    .ppl1{
    margin-top: 4em;
    }


    .middle{
    border-left: 1px solid gray;
    border-right: 1px solid gray;
    }

    .avatar {
      border-radius: 50%;
      width: 33%;
      height: 42%;
      border: 3px solid #C43A37;

    }

    carousel-inner img {
    width: 100%;
    height: 100%;
  }

</style>

<script>



$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>