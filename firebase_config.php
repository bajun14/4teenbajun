<?php
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

// Firebase credentials (JSON file)
$firebaseCredentials = __DIR__ . '/firebase_credentials.json';

// Initialize Firebase
$factory = (new Factory)->withServiceAccount($firebaseCredentials);
$auth = $factory->createAuth();
?>
