<?php
    //session_start();
    $isLoggedIn = isset($_SESSION['admin']); // Replace 'user' with your session variable for logged-in users.
    $isRoleLoggedIn = isset($_SESSION['role']);
    //$isRoleLoggedIn = 'admin';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Portal</title>
    <link rel="icon" type="image/png" href="/assets/logo-ico.ico">
    <link rel="stylesheet" href="/styles/fonts.css">
    <link rel="stylesheet" href="/styles/home-style.css">
    <link rel="stylesheet" href="/styles/navbar-style.css">
</head>
<body>
    <div class="">
        <?php 
            include(__DIR__ . '/../navbar.php');
        ?>
    </div>
    <br>
    <div class="" style="margin-top:2rem;">
        <div class="Home">
            <div class="home-welcome-msg">
                <?php
                    if ($isLoggedIn === 'admin'){
                        echo 'Greetings Admin!';
                    }
                    else if ($isLoggedIn === 'Patient'){
                        echo 'Greetings Patient!';
                    }
                    else {
                        echo 'Welcome to Our Healthcare Portal';
                    }
                ?>
                <h3>Your Health, <b>our Priority.</b></h3>
                <button onclick="window.location.href='/health-conditions';" class="button">Explore Now</button>
            </div>
            <br>
            <div class="home-hero-img">
                <img src="/assets/health-doctor.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>