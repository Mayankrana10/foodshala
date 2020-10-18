<?php 
	require 'connection.php';
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['reg_name']) && isset($_POST['reg_email']) && isset($_POST['phone']) && isset($_POST['reg_pass']) && isset($_POST['pref'])){

	        $name = $_POST['reg_name'];
	        $email = $_POST['reg_email'];
	        $phone = $_POST['phone'];
            $pass = $_POST['reg_pass'];
            $con_pass = $_POST['con_pass'];
	        $pref = $_POST['pref'];
            
            $passhash=md5($pass);
            $conpasshash=md5($con_pass);

            $emailquery="select * from registration_user where email='$email'";
            $query=mysqli_query($conn,$emailquery);
            $emailcount=mysqli_num_rows($query);

            if($emailcount>0){
                echo '<script>alert("Email already exists, please try with new email")</script>';
 
            }
            else{
                if($pass===$con_pass){
                    $sql="insert into registration_user (name,  email, phone, pref, pass) values ('$name', '$email', '$phone','$pref','$passhash')";
	                $result=$conn->query($sql);
	                if($result){
	        	        echo "data inserted successfully";
	        	        header( "location:index.php" );
	                }
	                else
	        	        echo "Registration failed";

                }
                else{
                    echo '<script>alert("Passwords did not match, please try again")</script>'; 
                    
                   
                }
            }


	        

    	}
	}
?>