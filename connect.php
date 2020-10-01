<?php
    $username = $_POST['username'];  
     $email = $_POST['email'];
      $phone number = $_POST['phone number'];
       $gender = $_POST['gender'];
        $password = $_POST['password'];

        //Database connections
        $conn = new mysqli('localhost','root','test');
        if($conn->connect_error){
        	die('connection failed :'.$conn->connect_error);

        }else{
        	$stmt = $conn->prepare("insert into registration(username,email,phone number,gender,password")
        	values(?, ?, ?, ?, ?)")
        	$stmt->bind_param("ssisss",$username,$email,$phone number,$gender,$password); 
        	$stmt->execute();
        	echo "registration successfully...";
        	$stmt->close();
        	$conn->close();
        }
?>