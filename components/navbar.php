<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="styles/fonts.css">
    <link type="text/css" rel="stylesheet" href="styles/navbar-style.css">
    <link type="text/css" rel="stylesheet" href="styles/button-a-styles.css">
</head>
<body>
    <?php
        $navBtns = [
            ["name" => "Health Conditions", "link" => "/health-conditions"],
            ["name" => "Book an Appointment", "link" => "/book-an-appointment"],
            ["name" => "About Us", "link" => "/about-us"]
          ];

        $navBtnsMore = [
            ["name" => "Contact Us", "link" => "/contact-us"],
            ["name" => "FAQs", "link" => "/faqs"],
            ["name" => "Vision and Mission", "link" => "/vision-and-mission"]
        ];
    ?>
    <div class="navbar">
        <div class="navbar-buttons">
            <ul>
                <div class="left-list">
                    <a onclick="window.location.href='/home';" title="Redirect to Home Page."><img src="/assets/logo-png.png" alt="" class="navbar-img-logo"></a>
                </div>
                <button onclick="window.location.href='/login-page';" class="btn-log-sign" title="Click to Log in or Sign in now.">Log in | Sign up</button>
                <br><br><br><br><br><br><hr>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()" style="font-size: 2rem; margin-right:1rem; padding-bottom:.5rem;">&#9776;</a>  
                <div class="topnav" id="myTopnav">
                    <div class="priv-style-for-margin">
                        <?php foreach ($navBtns as $navBtn) : ?>
                            <li><a onclick="window.location.href='<?php echo $navBtn['link']; ?>';"><?php echo $navBtn['name']; ?></a></li>
                        <?php endforeach; ?>
                    </div>
                    <li>
                        <div class="navbar-dropdown">
                            <button onclick="navDropDownFunc()" class="navDropDownBtn" title="Click for more options.">More</button>
                            <ul id="navDropDown" class="navDropDown-list">
                                <?php foreach ($navBtnsMore as $navBtnMore) : ?>
                                    <li> 
                                        <a onclick="window.location.href='<?php echo $navBtnMore['link']; ?>';"><?php echo $navBtnMore['name']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <script src="/javascript/navbar.js" type="text/javascript"></script> 
</body>
</html>