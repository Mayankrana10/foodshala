<?php
session_start();
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    </head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand " href="Home_login.php">RESTAURANT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item active">
        <a class="nav-link">Let's Order  <?php
        echo $_SESSION['name'];
        ?></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="Home_login.php">Home </a>
      </li> 
          
          
      <li class="nav-item">
        <a class="nav-link" href="index.php">Logout</a>
      </li>
      
      
    </ul>
    
  </div>
</nav>

    <section >
    <div class="py-5">
        <h2 class="text-center font-weight-bold" style="font-size:50px">Menu</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/10.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">PIZZA</h4>
                        <p class="card-text">Price : Rs.200</p>
                        <a href="added.php" onclick="aler()" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/11.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">SALMON</h4>
                        <p class="card-text">Price : Rs.100</p>
                        <a href="added.php" onclick="aler()" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/12.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">FRUIT SALAD</h4>
                        <p class="card-text">Price : Rs.150</p>
                        <a href="added.php" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/13.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">DUMPLINGS</h4>
                        <p class="card-text">Price : Rs.120</p>
                        <a href="added.php" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/14.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">EGG SALAD</h4>
                        <p class="card-text">Price : Rs.200</p>
                        <a href="added.php" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/16.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">MANGO CEREAL</h4>
                        <p class="card-text">Price : Rs.220</p>
                        <a href="added.php" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/17.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">LUXURY FRUIT SALAD</h4>
                        <p class="card-text">Price : Rs.100</p>
                        <a href="added.php" onclick="aler()" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/18.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">MACHA BERRY ICE-CREAM</h4>
                        <p class="card-text">Price : Rs.200</p>
                        <a href="added.php" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/19.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">DAN DAN NOODLES</h4>
                        <p class="card-text">Price : Rs.150</p>
                        <a href="added.php" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/20.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">VEGAN PASTA</h4>
                        <p class="card-text">Price : Rs.300</p>
                        <a href="added.php" onclick="aler()" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/21.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">VEG THALI</h4>
                        <p class="card-text">Price : Rs.180</p>
                        <a href="added.php" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/22.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">BURGER MEAL</h4>
                        <p class="card-text">Price : Rs.270</p>
                        <a href="added.php" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>
</body>
</html>