<?php
require '../vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function generateZoomToken($sdkKey, $sdkSecret) {
    $payload = [
        'app_key' => $sdkKey,
        'version' => 1,
        'iat' => time(),
        'exp' => time() + 3600, // Token valid for 1 hour
        'tpc' => 'telemedicine-session', // Topic/Session ID
    ];

    return JWT::encode($payload, $sdkSecret, 'HS256');
}

// Your Zoom SDK credentials
$sdkKey = 'YOUR_ZOOM_SDK_KEY';
$sdkSecret = 'YOUR_ZOOM_SDK_SECRET';

// Generate the token
$zoomToken = generateZoomToken($sdkKey, $sdkSecret);
echo "Zoom Token: " . $zoomToken;
?>
