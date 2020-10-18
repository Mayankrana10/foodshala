<?php 
	require 'connection.php';
    session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['email']) && isset($_POST['pass'])){

	        $email = $_POST['email'];
            $pass = $_POST['pass'];

            $check_pass=md5($pass);

            
	        $sql="select * from registration_admin where email='$email' and pass='$check_pass'";
			// echo $sql;
			$result=$conn->query($sql);
		
			$row = $result->fetch_assoc();
			// echo $row;
            $id = $row['id'];
            $name=$row['name'];
			// echo $id;
			$count = mysqli_num_rows($result);
            //  echo $count;
            $_SESSION['count']=$count;
	        if($count == 1) {
                $_SESSION['custid'] = $id;
                $_SESSION['name'] = $name;
                header( "location:main_restaurant.php" );
             
		    }else {
				$error = "Check your credentials!";
				echo $error;
		    }
    	}
	}
?>