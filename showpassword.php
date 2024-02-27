<?php
session_start();
include 'functions.php';

if (isset($_SESSION['password_length'])) {
    $passwordLength = $_SESSION['password_length'];
    $password = generateRandomPassword($passwordLength);
    echo "Your random password: $password";
    unset($_SESSION['password_length']);
} else {
    echo "No password generated.";
}
