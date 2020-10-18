<?php
session_start();
if(!isset($_SESSION['name'])){
    header("location:index.php");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauraunt</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<!--======  Navbar========-->



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand " href="Home_login.php">Restraunt</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item active">
        <a class="nav-link">Hello, <?php
        echo $_SESSION['name'];
        ?></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="Home_login.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Menu</a>
      </li>
      
          
      <li class="nav-item">
        <a class="nav-link"  href="logout.php">Logout</a>
        
      </li>
      
      
    </ul>
    
  </div>
</nav>
<!--=====End of Navbar====-->

<!--======= Carousel =====-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Amazing and Tasty</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Healthy</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Made with LOVE</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--======= End of Carousel =====-->

<!-- ======= About Us=====-->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About us</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/5.jpg" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2>We are the foodies</h2>
                <p class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolorem non, quidem quas beatae ipsam suscipit sunt. Voluptatibus repudiandae iste eos commodi. Voluptatum mollitia corporis esse odio aspernatur, quibusdam omnis similique harum. Laborum, nesciunt modi. Sit quas provident asperiores ea?</p>
            </div>
        </div>
    </div>
</section>

<!-- ======= End of About Us=====-->

   

<!--==========Services========-->
<section class="my-5">
    <div class="py-5">
    
        <h1 class="text-center"><a href="added1.php" >Menu</a></h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/17.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">LUXURY FOOD SALAD</h4>
                        <p class="card-text">Price : Rs.100</p>
                        <button name="addCartBtn" id="addCartBtnid" class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/18.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">MACHA BERRY ICE-CREAM</h4>
                        <p class="card-text">Price : Rs.200</p>
                        <a href="added1.php" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/19.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">DAN DAN NOODLES</h4>
                        <p class="card-text">Price : Rs.150</p>
                        <a href="added1.php" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            
            
        </div>
        <script type="text/javascript">
		$('#addCartBtnid').on('click', function(){
			alert("Your item added successfully!!");
		});	
	</script>
    </div>
</section>



<!--==========End of Services========-->

<!--==========Galary========-->

   

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Specials</h2>
    </div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/20.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/21.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/22.jpg" class="img-fluid pb-4">
            </div>
            

        </div>
    <div>

    </div>

</section>


<!--==========End of gallery========-->

<!--=====Form=====-->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Feedback</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" sutocomplete="off" class="form-control">
            </div>
            <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" sutocomplete="off" class="form-control">
            </div>
            <div class="form-group">
            <label>Mobile no.</label>
            <input type="text" name="mobile" sutocomplete="off" class="form-control">
            </div>
            <div class="form-group">
            <label>Comments</label>
            <textarea class="form-control" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>


<!--===== End of form=====-->

<!--=====Footer====-->
<!-- 
<footer>
    <p class="p-3 bg-dark text-white text-center">@jngkifvmkl</p>
</footer> -->
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright bg-dark text-white text-center py-3">Thanks for visiting us
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
</body>
</html>