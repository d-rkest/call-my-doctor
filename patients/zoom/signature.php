<?php
//require_once '../../vendor/autoload.php';  // Include the JWT library

use \Firebase\JWT\JWT;

function generateZoomSignature($meetingNumber, $role) {
    $apiKey = '1uT431XRRyOLdHbTtb3Ow';  // Your Zoom API Key
    $apiSecret = 'sbaEqyNrYJVvIFX2cYeje16PFGOGREEa';  // Your Zoom API Secret

    $iat = time() - 30;  // Issued At: current time minus 30 seconds
    $exp = time() + 5000;  // Expiry time: 5000 seconds from now

    $data = [
        'apiKey' => $apiKey,
        'meetingNumber' => $meetingNumber,
        'role' => $role,  // 1 for host, 0 for participant
        'iat' => $iat,
        'exp' => $exp,
    ];

    $signature = JWT::encode($data, $apiSecret, 'HS256');
    
    return $signature;
}
?>
