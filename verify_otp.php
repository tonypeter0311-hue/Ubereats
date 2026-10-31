<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST['otp'];
    $file = 'otp_data.txt';
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $data = explode(', OTP: ', $line);
        if (count($data) === 2) {
            $email = trim(str_replace('Email/Number: ', '', $data[0]));
            $savedOtp = trim($data[1]);
           
