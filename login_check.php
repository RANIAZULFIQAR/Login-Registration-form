<?php
$username = trim($_POST['username']);
$password = trim($_POST['password']);

$users = file("users.txt", FILE_IGNORE_NEW_LINES);
$ok = false;

foreach ($users as $u) {
    list($usr, $pass) = explode(":", $u);
    if ($usr == $username && $pass == $password) $ok = true;
}

if ($ok) header("Location: welcome.php?user=$username");
else echo "Invalid login";
