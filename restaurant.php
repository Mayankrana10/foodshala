<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/registration.css" type="text/css">
    <title>Restraunt</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand " href="Home_login.php">RESTAURANT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
     
     
          
      <li class="nav-item">
        <a class="nav-link" href="restaurant-signup.php">SIGNUP</a>
      </li>
      
      
    </ul>
    
  </div>
</nav>


<section class="my-2">
    <div class="py-4">
        <h2 class="text-center text-white" style="font-size:40px">RESTAURANT LOGIN</h2>
    </div>
</section>  



<form action="rest_login_db.php" method="post">

  <label>
    <p class="label-txt">ENTER YOUR RESTAURANT EMAIL</p>
    <input type="email" class="input" name="email" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" class="input" name="pass" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  

  <button type="submit" name="create">LOGIN</button>
  <p class="text-center my-3">Don'y have an account?<a href="restaurant-signup.php">SIGNUP</a></p>
</form>


</body>
</html> 

