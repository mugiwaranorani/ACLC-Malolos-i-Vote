<?php
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';
require_once 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Database connection details
include 'dbconn.php';

function generateCode() {
    $code = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT);
    return $code;
}

function sendCode($email) {
    global $conn;

    $code = generateCode();

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aclcbscs42cc@gmail.com';
    $mail->Password = 'eqadzc2023';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('aclcbscs42cc@gmail.com', 'ACLC Malolos i-Voting');
    $mail->addAddress($email);

    $mail->Subject = 'OTP Code';
    $mail->Body = "Your OTP code is: $code";

    if ($mail->send()) {
        $expirationTime = time() + 60; // Set expiration time to 1 minute from now
        $insertQuery = "INSERT INTO clg_voter (verificationCode, expirationTime) VALUES ('$code', $expirationTime)";
        $conn->query($insertQuery);
        echo 'Code sent successfully!';
    } else {
        echo 'Code sending failed. Error: ' . $mail->ErrorInfo;
    }
}

function checkCode($code) {
    global $conn;
    $currentTime = time();
    $selectQuery = "SELECT * FROM clg_voter WHERE verificationCode = '$code' AND expirationTime > $currentTime";
    $result = $conn->query($selectQuery);
    
    if ($result->num_rows > 0) {
        echo 'Code is valid and within the expiration time.';
    } else {
        echo 'Code is invalid or has expired.';
    }
}

// Example usage:
sendCode('ranillos55@gmail.com');
sleep(30); // Simulating a 30-second delay
checkCode('generated_code');
sleep(40); // Simulating a total of 70 seconds delay
checkCode('generated_code');

// Cleanup: Remove expired codes from the database
$currentTime = time();
$deleteQuery = "DELETE FROM clg_voter WHERE expirationTime <= $currentTime";
$conn->query($deleteQuery);

// Close the database connection
$conn->close();
?>