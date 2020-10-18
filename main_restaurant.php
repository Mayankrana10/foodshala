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
    <title>RESTAURANT</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand " href="main_restaurant.php">RESTAURANT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

    <li class="nav-item">
        <a class="nav-link" href="main_restaurant.php">Add Item</a>
      </li>
                
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      
      
    </ul>
    
  </div>
</nav>




<div class="container">
	<h1 style="color:white;font-weight:900;text-decoration:underline;">Add Food Item: </h1>
	    <div class="content col-md-8 col-md-offset-2"><br>
	        <form action="up.php" method="post" enctype="multipart/form-data">
	        	<div class="form-group">
				    <label for="item_name">Item Name</label>
				    <input type="text" class="form-control" id="item_name" name="item_name" required/>
				</div>
				<br>
				<div class="form-group">
					<label for="item_name">Item Image</label>
					<input type="file" name="item_image" class="uploader" onchange="readURL(this);" required />
					<div class="preview-area">
						<img id="profileImg" src="" />
					</div>
				</div>
				<br>
				<div class="form-group">
				    <label for="item_desc">Item Description</label>
				    <input type="text" class="form-control" id="item_desc" name="item_desc" required/>
				</div>
				<br>
				<div class="form-group">
				    <label for="item_type">Item Type&nbsp;</label>
				    <input type="radio" name="item_type" value="non-veg" required> Non-Veg &nbsp;
		  			<input type="radio" name="item_type" value="veg" required> Veg
				</div>
				<br>
				<div class="form-group">
				    <label for="item_price">Item Price</label>
				    <input type="text" class="form-control" id="item_price" name="item_price" required/>
				</div>
				<br>
				<div class="form-group">
				    <button type="submit" name="addItemBtn" class="btn btn-success" style="font-size:15px;font-weight:900;height:40px">Add Item</button>
				</div>
			</form>
	    </div>
	</div>
    </div>
    <script type="text/javascript">
		$('.uploader').on('click', function(){
			$('.preview-area').css({
				'display': 'block'
			});
		});

		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profileImg')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
	</script>
</body>
</html>