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