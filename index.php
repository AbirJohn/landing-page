<!DOCTYPE html>
<html>
<head>
	<title>Welcome To My Site </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/Style.css">
  
</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/2.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">About</h3>
  </div>

<div class="container-fluid">
    <div class="row">
     <div class="col-lg-6 col-md-6 col-12">
       <img src="img/4.jpg" class="img-fluid">
     </div>
     <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-8">I am Abir John</h2>
      <p class="py-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,</p>

      <a href="about.php" class="btn btn-success" > Read More</a>

     </div>
  </div>
</div>  
</section>




<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">Our Services</h3>
  </div>

<div class="container-fluid">
    <div class="row">
     <div class="col-lg-4 col-md-4 col-12">
  <div class="card">
    <img class="card-img-top" src="img/1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">PSD TO HTML</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
       
    </div>
     <div class="col-lg-4 col-md-4 col-12">
  <div class="card">
    <img class="card-img-top" src="img/1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Web Site</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>


     <div class="col-lg-4 col-md-4 col-12">
  <div class="card">
    <img class="card-img-top" src="img/1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Web Devloper</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
       
          </div>
         </div>

       </div>
    </section>



<!-- Team Part start -->
<section id="team">
 <div class="py-5">
    <h3 class="text-center">Our Team</h3>
  </div>
    <div class="container-fluid">
        <div class="row team-slider">
            <div class="col-lg-3">
                <div class="card">
                  <img src="img/team.jpg" class="card-img-top img-fluid w-100">
                  <div class="card-body">
                    <h5 class="card-title">Ruth Woods</h5>
                    <h6>founder, ceo</h6>
                    <p class="card-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                  <img src="img/team.jpg" class="card-img-top img-fluid w-100">
                  <div class="card-body">
                    <h5 class="card-title">Ruth Woods</h5>
                    <h6>founder, ceo</h6>
                    <p class="card-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                  <img src="img/team.jpg" class="card-img-top img-fluid w-100">
                  <div class="card-body">
                    <h5 class="card-title">Ruth Woods</h5>
                    <h6>founder, ceo</h6>
                    <p class="card-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                  <img src="img/team.jpg" class="card-img-top img-fluid w-100">
                  <div class="card-body">
                    <h5 class="card-title">Ruth Woods</h5>
                    <h6>founder, ceo</h6>
                    <p class="card-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>






<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">Contact US </h3>
  </div>
      <div class="w-50 m-auto" >
        <form action="userinfo.php" method="post">
          <div class="form-group">
            <label>User Name</label>
            <input type="text" name="user" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Email ID </label>
            <input type="text" name="email" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Comments</label>
           <textarea class="form-control" name="comment"></textarea> 
          </div>
           <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>

</section>







<footer>
  <h3 class=" py-3 bg-dark text-center text-white">@AbirJohn00gamil.com</h3>
</footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>