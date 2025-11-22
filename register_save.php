<?php
$username = trim($_POST['username']);
$password = trim($_POST['password']);

if (!preg_match("/^[A-Za-z]+$/", $username)) die("Invalid username");
if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d).+$/", $password)) die("Weak password");

$users = file("users.txt", FILE_IGNORE_NEW_LINES);
foreach ($users as $u) {
    if (explode(":", $u)[0] == $username) die("User exists");
}

file_put_contents("users.txt", "$username:$password\n", FILE_APPEND);
echo "Registered. <a href='login.php'>Login</a>";
