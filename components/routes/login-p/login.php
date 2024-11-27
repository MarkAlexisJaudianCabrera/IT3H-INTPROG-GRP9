<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // retreive from data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "healthcareportal";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
         
    }

    // validate Log in authentication
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";

    $result = $conn->query($query);

    if($result->num_rows == 1){
        // Log in success
        echo "window.location.href='./home.php';";
        exit();
    }
    else{
        // Log in Falied
        header("Location : error.html");
        exit();
    }

    if ($conn) {
        $conn->close();
    }

}

?>