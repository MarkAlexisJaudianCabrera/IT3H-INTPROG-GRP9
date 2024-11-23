<?php
    session_start();
    //$isLoggedIn = isset($_SESSION['user']); // Replace 'user' with your session variable for logged-in users.
    $isLoggedIn = 'patient';
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
    <link rel="stylesheet" href="/styles/button-a-styles.css">
    <link rel="stylesheet" href="/styles/BookApp-style.css">
</head>
<body>
    <div class="bookapp-header">
        <?php 
            include(__DIR__ . '/../navbar.php');
        ?>
    </div>
    
    <br>

    <div class="bookapp-body" style="margin-top:3rem;">
        <!-- contents dito -->
        <div class="bookapp-cont">
            <h1 class="bookapp-header-name">BOOK AN APPOINTMENT:</h1>
            <form class="bookapp-form" action="" method="POST" autocomplete="off">
                
                <h2>Patient Information:</h2>

                <div class="bookapp-PatInf-name">
                    <!-- LAST NAME -->
                    <label for="lastname">Last Name : </label>
                    <input class="border-input card-lastname" type="text" name="lastname" id="lastname" required value=""> 
                    <!-- FIRST NAME -->
                    <label for="firstname">First Name : </label>
                    <input class="border-input card-firstname" type="text" name="firstname" id="firstname" required value=""> 
                    <!-- MIDDLE NAME -->
                    <label for="midname">Middle Name : </label>
                    <input class="border-input card-midname" type="text" name="midname" id="midname" required value=""> 
                </div>

                <br> <br>

                <div class="bookapp-PatInf-contact">
                    <!-- CONTACT NUMBER -->
                    <label for="contnum">Contact # : </label>
                    <input class="border-input" type="text" name="contnum" id="contnum" required value=""> 

                    <!-- E-MAIL ADDRESS -->
                    <label for="emailadd">E-mail Address : </label>
                    <input class="border-input" type="email" name="emailadd" id="emailadd" required value="">
                </div>
                
                <br> <br>

                <div class="bookapp-PatInf-gen-bd-addr">
                    <!-- GENDER -->
                    <label for="gender">Gender : </label>
                    <select class="border-input" name="gender" id="gender" required value="">
                        <option value=""></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                        <option value="prefer_not_to_say">Prefer not to say</option>
                    </select> 

                    <!-- DATE OF BIRTH -->
                    <label for="dateofbirth">Date of Birth : </label>
                    <input class="border-input" type="date" name="dateofbirth" id="dateofbirth" required value="">

                    <br> <br>

                    <!-- ADDRESS -->
                    <label for="address">Address : </label>
                    <input class="border-input" type="text" name="address" id="address" required value="" placeholder="basta mahaba dapat to">
                </div>

                <br> <br> <br>

                <h2>Appointment Details:</h2>

                
                <!-- DATE AND TIME -->
                <label for="datetime">Date and Time : </label>
                <input class="border-input" type="datetime-local" name="datetime" id="datetime" required value="">

                <!-- REASON FOR VISIT -->
                <label for="reasonvisit">Reason for Visit : </label>
                <input class="border-input" type="text" name="reasonvisit" id="reasonvisit" required value="">

                <br> <br>

                <!-- INSURANCE INFORMATION -->
                <label for="insurance_information">Insurance Information:</label> <br>
                <input type="text" class="border-input" id="insurance_information" name="insurance_information" placeholder="basta mahaba dapat to">
                <br>
                <label for="insurance_document">or upload Insurance Document:</label>
                <input type="file" id="insurance_document" name="insurance_document">

                <br> <br>

                <h2>Additional Information (Optional) :</h2>

                <label for="">Guardian / Relative :</label> <br>
                <!-- EMERGENCY CONTACT NAME -->
                <label for="EmerContName">Name :</label>
                <input class="border-input" type="text" name="EmerContName" id="EmerContName">
                <!-- EMERGENCY CONTACT NUMBER -->
                <label for="EmerContNum">Contact # :</label>
                <input class="border-input" type="text" name="EmerContNum" id="EmerContNum">

                <br> <br>

                <!-- REASON FOR VISIT -->
                <label for="MedHis">Medical History : </label> <br>
                <input class="border-input" type="text" name="MedHis" id="MedHis" placeholder="basta mahaba dapat to">

                <br> <br>

                <!-- REASON FOR VISIT -->
                <label for="PrevCon">Previous Consent : </label>
                <input type="file" id="PrevCon" name="PrevCon">

                <br> <br>

                <center>
                    <button class="bookapp-submit-btn" type="submit" name="submit">SUBMIT</button>
                </center>
                
            </form>
        </div>
    </div>
    
    <?php
        if ($isLoggedIn === 'guest'){
            // <!-- Main Content -->
            echo '<div class="protected-content">';
            // <!-- Overlay for when user is not logged in -->
                echo '<div class="overlay" id="loginOverlay" style="display: flex;">';
                    echo '<div class="overlay-content">';
                        echo '<h2>Click to Book an appointment now!</h2>';
                        echo '<button onclick="window.location.href="/login-page";" class="btn-log-sign log-sign-bookapp" title="Click to Log in or Sign in now.">Log in | Sign up</button>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    ?>
</body>
</html>