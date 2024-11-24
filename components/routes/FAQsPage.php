<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Portal</title>
    <link rel="icon" type="image/png" href="/assets/logo-ico.ico">
    <link rel="stylesheet" href="/styles/fonts.css">
    <link rel="stylesheet" href="/styles/faqs-style.css">
    <link rel="stylesheet" href="/styles/navbar-style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="">
        <?php 
            include(__DIR__ . '/../navbar.php');
        ?>
    </div>
    <br>
    <div class="faq-cont" style="margin-top:3rem;">
        <!-- contents dito -->
        <div class="faq-container">
            <h1>Frequently Asked Questions</h1>
            <br>
            <div class="faq-card" onclick="faqsCollapsiFunc(this)">
                <a>
                    <h3 class="faq-titlec">What is this website?</h3>
                    <p><i class="fa-solid fa-caret-down" id="faq-caret"></i></p>
                </a>
                <br>
                <div class="faq-content" id="faq-content-id">
                <br>
                <p>
                    This is a healthcare portal designed to provide you with easy access to health information and services. 
                </p>
                </div>
            </div>
            <br>
            <div class="faq-card" onclick="faqsCollapsiFunc(this)">
                <a>
                    <h3 class="faq-titlec">How can I book an appointment?</h3>
                    <p><i class="fa-solid fa-caret-down" id="faq-caret"></i></p>
                </a>
                <br>
                <div class="faq-content" id="faq-content-id">
                <br>
                <p>
                    You can book an appointment by clicking on the "Book an Appointment" button on the homepage or by navigating to the dedicated appointment page.
                </p>
                </div>
            </div>
            <br>
            <div class="faq-card" onclick="faqsCollapsiFunc(this)">
                <a>
                    <h3 class="faq-titlec">What is your contact information?</h3>
                    <p><i class="fa-solid fa-caret-down" id="faq-caret"></i></p>
                </a>
                <br>
                <div class="faq-content" id="faq-content-id">
                <br>
                <p>
                    You can find our contact information on the "Contact Us" page.
                </p>
                </div>
            </div>    
            <br>
        </div>
    </div>
    <script src="/javascript/faqsCollapsible.js" type="text/javascript"></script> 
</body>
</html>