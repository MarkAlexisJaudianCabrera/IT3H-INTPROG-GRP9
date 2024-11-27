<?php 
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $viewDir = '/components/routes/';
    switch ($request) {
        case '':
        case '/home':
            require __DIR__ . $viewDir . 'Home.php';
            break;
    
        case '/health-conditions':
            require __DIR__ . $viewDir . 'HealthConPage.php';
            break;
    
        case '/book-an-appointment':
            require __DIR__ . $viewDir . 'BookAppointmentPage.php';
            break;

        case '/about-us':
            require __DIR__ . $viewDir . 'AboutUsPage.php';
            break;

        case '/contact-us':
            require __DIR__ . $viewDir . 'ContactUsPage.php';
            break;

        case '/faqs':
            require __DIR__ . $viewDir . 'FAQsPage.php';
            break;

        case '/vision-and-mission':
            require __DIR__ . $viewDir . 'VisionMissionPage.php';
            break;

        case '/login-page':
            require __DIR__ . $viewDir . '/login-p/index.html';
            break;
        
        case '/login-success':
            require __DIR__ . $viewDir . '/login-p/success.html';
            break;

        case '/login-err':
            require __DIR__ . $viewDir . '/login-p/error.html';
            break;

        case '/login-now':
            require __DIR__ . $viewDir . '/login-p/login.php';
            break;

        case '/signup-now':
            require __DIR__ . $viewDir . '/login-p/signup.html';
            break;
    
        default:
            http_response_code(404);
            require __DIR__ . $viewDir . 'Home.php';
    }
?>