<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    // Generate and send OTP (you can use a service like Twilio for SMS or SendGrid for email)
    $otp = rand(100000, 999999);
    // Save OTP and email/number to a file or database
    $file = 'otp_data.txt';
    $current = file_get_contents($file);
    $current .= "Email/Number: $email, OTP: $otp\n";
    file_put_contents($file, $current);
    // Redirect to OTP form
    header("Location: index.html#otpForm");
    exit();
}
?>
