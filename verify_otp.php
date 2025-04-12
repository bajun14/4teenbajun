<?php
require 'firebase_config.php';

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);
$idToken = $data['idToken'] ?? '';

try {
    $verifiedIdToken = $auth->verifyIdToken($idToken);
    $uid = $verifiedIdToken->claims()->get('sub');

    // User is successfully authenticated
    session_start();
    $_SESSION['user_id'] = $uid;

    echo json_encode(["success" => true, "message" => "User authenticated"]);
} catch (Exception $e) {
    echo json_encode(["success" => false, "error" => $e->getMessage()]);
}
?>
