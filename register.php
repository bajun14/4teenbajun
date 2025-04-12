<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Indo Danish Tool Room</title>
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-app.js";
        import { getAuth, RecaptchaVerifier, signInWithPhoneNumber } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-auth.js";

        const firebaseConfig = {
            apiKey: "YOUR_API_KEY",
            authDomain: "YOUR_AUTH_DOMAIN",
            projectId: "YOUR_PROJECT_ID",
            storageBucket: "YOUR_STORAGE_BUCKET",
            messagingSenderId: "YOUR_MESSAGING_SENDER_ID",
            appId: "YOUR_APP_ID"
        };

        const app = initializeApp(firebaseConfig);
        const auth = getAuth(app);
        auth.useDeviceLanguage();

        window.recaptchaVerifier = new RecaptchaVerifier('recaptcha-container', {
            'size': 'normal',
            'callback': (response) => {
                console.log("Recaptcha verified!");
            }
        }, auth);

        function sendOTP() {
            const phoneNumber = document.getElementById("phone").value;
            const appVerifier = window.recaptchaVerifier;

            signInWithPhoneNumber(auth, phoneNumber, appVerifier)
                .then((confirmationResult) => {
                    window.confirmationResult = confirmationResult;
                    document.getElementById("otp-section").style.display = "block";
                    alert("OTP sent! Check your phone.");
                })
                .catch((error) => {
                    console.error("Error sending OTP:", error);
                });
        }

        function verifyOTP() {
            const otpCode = document.getElementById("otp").value;
            window.confirmationResult.confirm(otpCode)
                .then((result) => {
                    alert("Registration Successful!");
                    window.location.href = "dashboard.php";
                })
                .catch((error) => {
                    console.error("Invalid OTP:", error);
                });
        }
    </script>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form id="registerForm">
            <input type="text" id="name" placeholder="Enter Full Name" required>
            <input type="text" id="phone" placeholder="Enter Phone Number" required>
            <input type="email" id="email" placeholder="Enter Email" required>
            <input type="password" id="password" placeholder="Enter Password" required>
            <div id="recaptcha-container"></div>
            <button type="button" onclick="sendOTP()">Send OTP</button>
        </form>

        <div id="otp-section" style="display: none;">
            <input type="text" id="otp" placeholder="Enter OTP" required>
            <button type="button" onclick="verifyOTP()">Verify OTP</button>
        </div>
    </div>
</body>
</html>
