<?php
    //session_start();
    //$isLoggedIn = isset($_SESSION['admin']); // Replace 'user' with your session variable for logged-in users.
    //$isRoleLoggedIn = isset($_SESSION['role']);
    $isRoleLoggedIn = 'admin';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Portal</title>
    <link rel="icon" type="image/png" href="/assets/logo-png.png">
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
    <div class="" style="margin:1rem 2rem;">
    <br>
        <?php
            $HomeConts = [
                [
                    "homecont-name" => "Common Cold",
                    "homecont-img" => "/assets/HealthConImages/cold.jpg",
                    "homecont-desc" => " A viral infection causing a runny nose, congestion, sore throat, and cough. 
                    Can be cured with over-the-counter medications like acetaminophen or ibuprofen can help relieve 
                    symptoms. Plenty of rest and fluids are also essential."
                ],
                [
                    "homecont-name" => "Flu (Influenza)",
                    "homecont-img" => "/assets/HealthConImages/flu1.jpg",
                    "homecont-desc" => "A viral infection causing fever, chills, muscle aches, fatigue, and sometimes 
                    a cough or sore throat. Can be cured with over-the-counter medications can relieve symptoms. 
                    Antiviral medication may be prescribed for severe cases. Rest and fluids are essential."
                ],
                [
                    "homecont-name" => "Stomach Flu (Gastroenteritis)",
                    "homecont-img" => "/assets/HealthConImages/flu.jpg",
                    "homecont-desc" => "A viral or bacterial infection causing diarrhea, vomiting, nausea, and abdominal 
                    cramps. Relief: Drink plenty of fluids to prevent dehydration. Over-the-counter medications can 
                    relieve symptoms. Consult a doctor for severe cases."
                ],
                [
                    "homecont-name" => "Allergies",
                    "homecont-img" => "/assets/HealthConImages/allergy.jpg",
                    "homecont-desc" => "An immune system reaction to allergens like pollen, dust mites, or pet dander, 
                    causing sneezing, runny nose, and itchy eyes. Over-the-counter antihistamines 
                    and decongestants can relieve symptoms. In severe cases, a doctor may prescribe stronger medications."
                ],
                [
                    "homecont-name" => "Headache",
                    "homecont-img" => "/assets/HealthConImages/headache.jpg",
                    "homecont-desc" => "A pain in the head caused by various factors like stress, lack of sleep, dehydration, 
                    or illness. Over-the-counter pain relievers like acetaminophen or ibuprofen can relieve pain. 
                    Rest and hydration are important."
                ],
                [
                    "homecont-name" => "Fever",
                    "homecont-img" => "/assets/HealthConImages/fever.jpg",
                    "homecont-desc" => "An elevated body temperature, often a sign of infection. Over-the-counter fever reducers 
                    like acetaminophen or ibuprofen can lower fever. Plenty of fluids and rest are essential. Consult a doctor 
                    for high or persistent fever."
                ],
                [
                    "homecont-name" => "Cuts and Scrapes",
                    "homecont-img" => "/assets/HealthConImages/cuts.jpg",
                    "homecont-desc" => "Clean the wound with soap and water, apply antiseptic, and cover with a clean bandage. 
                    Seek medical attention for deep or infected wounds."
                ],
                [
                    "homecont-name" => "Insect Bites and Stings",
                    "homecont-img" => "/assets/HealthConImages/insectbites.png",
                    "homecont-desc" => "Clean the bite with soap and water. Apply a cold compress to reduce itching. 
                    Seek medical attention for severe allergic reactions."
                ],
                [
                    "homecont-name" => "Asthma",
                    "homecont-img" => "/assets/HealthConImages/asthma.jpg",
                    "homecont-desc" => "Asthma is a chronic lung disease that narrows the airways. This can make 
                    breathing difficult, coughing, wheezing, and shortness of breath."
                ],
            ];  
        ?>
    
        <br>
        <!-- contents dito -->
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
    </div>
    <script src="/javascript/healthcon-admin.js" type="text/javascript"></script>
</body>
</html>