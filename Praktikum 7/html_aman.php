<?php 
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_safe = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo "Email valid dan aman: " . $email_safe;
} else {
    echo "Email tidak valid";
}
?>