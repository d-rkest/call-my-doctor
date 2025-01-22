<?php
  use Config\Database;
  use Models\User;
  use Controllers\UserController;
  use Controllers\AuthController;

  use Phroute\Phroute\Exception\HttpRouteNotFoundException;
  use Phroute\Phroute\Exception\HttpMethodNotAllowedException;   
  use Phroute\Phroute\RouteCollector;
  use Phroute\Phroute\Dispatcher;

  $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

  // Autoload classes using Composer's autoloader
  require_once dirname(__DIR__) . '/vendor/autoload.php';
  session_start();

  // .env
  $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
  $dotenv->load();

  $clientId = $_ENV["API_CLIENT"];
  $clientSecrete = $_ENV["API_SECRETE"];

  $client = new Google\Client;

  $client->setClientId($clientId);
  $client->setClientSecret($clientSecrete);
  $client->setRedirectUri("http://localhost/startup/callmydoc/redirect.php");

  $client->addScope("email");
  $client->addScope("profile");

  $url = $client->createAuthUrl();
  #end .env
  
  //require_once dirname(__DIR__) . '/app/Services/redirect.php';

  $database = new Database();
  $db = $database->getConnection();

  $router = new RouteCollector();
  $user = new User($db);

  $authController = new AuthController($db);

  // Middleware to check if the user is logged in
  function requireAuth() {
    if (!isset($_SESSION['user'])) {
        header('Location: /Login'); // Redirect to login if not authenticated
        exit;
    }
  }

  # HomePage Routes
  $router->any("/", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/home-header.php';
    return file_get_contents(dirname(__DIR__) .'/app/Views/home/index.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/home-footer.php';
  });
  $router->any("/Give-FirstAid", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/home-header.php';
    return file_get_contents(dirname(__DIR__) .'/app/Views/home/give-first-aid.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/home-footer.php';
  });
  $router->any("/Locate-Medical-Center", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/home-header.php';
    return file_get_contents(dirname(__DIR__) .'/app/Views/home/locate-med-center.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/home-footer.php';
  });
  $router->any("/Self-Help", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/home-header.php';
    return file_get_contents(dirname(__DIR__) .'/app/Views/home/self-help.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/home-footer.php';
  });

  $router->get("/Login", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/home-header.php';
    return file_get_contents(dirname(__DIR__) .'/app/Views/home/login.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/home-footer.php';
  });
  $router->post('/Login', [$authController, 'Login']);     // Process login form submission
  $router->get('/logout', [$authController, 'logout']);    // Log the user out

  $router->any("/Register", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/home-header.php';
    return file_get_contents(dirname(__DIR__) .'/app/Views/home/register.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/home-footer.php';
  });

  # User Dashboard Routes
  $router->any("/user/", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/user-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/user/index.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/user-footer.php';
  });
  $router->any("/user/Call-Ambulance", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/user-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/user/call-an-ambulance.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/user-footer.php';
  });
  $router->any("/user/Buy-Prescription", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/user-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/user/buy-prescription.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/user-footer.php';
  });
  $router->any("/user/Appointment", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/user-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/user/appointment.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/user-footer.php';
  });
  $router->any("/user/My-Order", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/user-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/user/my-order.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/user-footer.php';
  });
  $router->any("/user/Medical-Report", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/user-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/user/medical-report.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/user-footer.php';
  });
  $router->any("/user/Medical-Feedback", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/user-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/user/medical-feedback.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/user-footer.php';
  });
  $router->any("/user/Medical-History", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/user-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/user/medical-history.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/user-footer.php';
  });
  $router->any("/user/Settings", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/user-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/user/settings.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/user-footer.php';
  });

  # Doctor Dashboard Routes
  $router->any("/dashboard/", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/dashboard/index.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/dashboard-footer.php';
  });
  $router->any("/dashboard/Schedule", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/dashboard/schedule.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/dashboard-footer.php';
  });
  $router->any("/dashboard/Appointment", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/dashboard/appointment.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/dashboard-footer.php';
  });
  $router->any("/dashboard/Analyze-Medical-Report", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/dashboard/analyze-med-report.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/dashboard-footer.php';
  });
  $router->any("/dashboard/Medical-Feedback", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/dashboard/medical-feedback.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/dashboard-footer.php';
  });
  $router->any("/dashboard/Calls", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/dashboard/calls.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/dashboard-footer.php';
  });
  $router->any("/dashboard/My-Wallet", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/dashboard/my-wallet.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/dashboard-footer.php';
  });
  $router->any("/dashboard/Medical-Record", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/dashboard/medical-records.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/dashboard-footer.php';
  });
  $router->any("/dashboard/Billing", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/dashboard/billings.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/dashboard-footer.php';
  });
  $router->any("/dashboard/Settings", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
    requireAuth(); // Ensure user is logged in
    return file_get_contents(dirname(__DIR__) .'/app/Views/dashboard/settings.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/dashboard-footer.php';
  });

  # 404 Route and others
  $router->any("/404", function() {
    global $header;
    $header = dirname(__DIR__) . '/app/Layouts/home-header.php';
    return file_get_contents(dirname(__DIR__) .'/app/Views/404.php');
    global $footer;
    $footer = dirname(__DIR__) . '/app/Layouts/home-footer.php';
  });


  $dispatcher = new Dispatcher($router->getData());
  $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $route = str_replace(dirname($_SERVER['SCRIPT_NAME']), '', $requestUri);
  $route = '/' . ltrim($route, '/');

  // Default header
  $header = dirname(__DIR__) . '/app/Layouts/home-header.php';
  $footer = dirname(__DIR__) . '/app/Layouts/home-footer.php';

  try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
    // Include the dynamic header
    include $header;
    echo $response;
    // Include the dynamic footer
    include $footer;
  } catch (Phroute\Phroute\Exception\HttpRouteNotFoundException $e) {
    http_response_code(404);
    include $header;
    include dirname(__DIR__) . '/app/Views/404.php';
    include $footer;
  } catch (Phroute\Phroute\Exception\HttpMethodNotAllowedException $e) {
    http_response_code(405);
    include $header;
    echo '405 Method Not Allowed';
    include $footer;
  }
  
  require_once dirname(__DIR__) . '/app/Layouts/home-footer.php';
?>