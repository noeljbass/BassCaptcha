<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $userAnswer = trim($_POST['captcha']);
    $correctAnswer = trim($_POST['captcha-answer']); 

    if ($userAnswer !== $correctAnswer) {
        error_log("CAPTCHA answer is incorrect.");
        echo "CAPTCHA answer is incorrect. Please try again.";
        exit;
    }

?>