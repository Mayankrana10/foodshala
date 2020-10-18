<?php 
	require 'connection.php';
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['reg_pass']) ){

	        $name = $_POST['name'];
	        $email = $_POST['email'];
	        $phone = $_POST['phone'];
            $pass = $_POST['reg_pass'];
            $con_pass = $_POST['con_pass'];
	        
            
            $passhash=md5($pass);
            $conpasshash=md5($con_pass);

            $emailquery="select * from registration_admin where email='$email'";
            $query=mysqli_query($conn,$emailquery);
            $emailcount=mysqli_num_rows($query);

            if($emailcount>0){
                echo '<script>alert("Email already exists, please try with new email")</script>';
 
            }
            else{
                if($pass===$con_pass){
                    $sql="insert into registration_admin (name,  email, phone, pass) values ('$name', '$email', '$phone','$passhash')";
	                $result=$conn->query($sql);
	                if($result){
	        	        echo "data inserted successfully";
	        	        header( "location:index.php" );
	                }
	                else
	        	        echo "Sign-Up failed";

                }
                else{
                    echo '<script>alert("Passwords did not match, please try again")</script>'; 
                    
                   
                }
            }


	        

    	}
	}
?>