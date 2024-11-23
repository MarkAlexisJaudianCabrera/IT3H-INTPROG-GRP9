<?php

    session_start();
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
    <link rel="stylesheet" href="/styles/navbar-style.css">
    <link rel="stylesheet" href="/styles/HealthConPage-styles.css">
    <link rel="stylesheet" href="/styles/button-a-styles.css">
</head>
<body>
    <div class="">
        <?php 
            include(__DIR__ . '/../navbar.php');
        ?>
    </div>
    <br>
    <div class="" style="margin:2rem 2rem;">
        <!-- contents dito -->
        <?php
            $HomeConts = [
                [
                    "homecont-name" => "Condition 1", 
                    "homecont-img" => "/assets/logo-png.png", 
                    "homecont-desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias perspiciatis 
                                        neque deleniti? Sit, officia blanditiis inventore saepe eum aspernatur dolorem 
                                        tenetur modi. Ullam perferendis molestias, delectus facilis cupiditate similique exercitationem."
                ]
            ];
        ?>
        <div class="home">
            <div class="homecont">
                <div class="homecont-row">
                    <?php foreach ($HomeConts as $HomeCont) : ?>
                        <div class="homecont-column">
                            <div class="homecont-card">
                                <h4><?php echo $HomeCont['homecont-name']; ?></h4>
                                <img src="<?php echo $HomeCont['homecont-img']; ?>" alt="">
                                <p><?php echo $HomeCont['homecont-desc']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
        <div class="AddNewCon-cont">
            <?php
                if ($isRoleLoggedIn === 'admin' ){
                    echo '<button class="HealthCon-addnewCon">Add New Condition</button>';
                    echo '<button class="HealthCon-addeditCon">Edit Condition</button>';
                }
            ?>
        </div>
    </div>
</body>
</html>