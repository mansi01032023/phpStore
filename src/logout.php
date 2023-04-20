<?php
// unsetting the cookies
setcookie("email", $email, time() - (86400 * 30), "/");
setcookie("password", $password, time() - (86400 * 30), "/");
setcookie("userid", $text, time() - (86400 * 30), "/");
header("location:index.php");
