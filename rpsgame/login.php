<?php
session_start();

$valid_users = [
    'player1' => 'password123',
    'player2' => '123456',
];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
    $_SESSION['username'] = $username;
    header('Location: index.php');
    exit();
} else {
    echo "Invalid username or password. <a href='login.html'>Try again</a>";
}
?>
