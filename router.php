<?php
$path = parse_url($_SERVER['REQUEST_URI'])["path"];

if ($path === "/") require "controllers/home.php";
elseif ($path === "/signup") require "controllers/signup.php";
elseif ($path === "/login") require "controllers/login.php";
elseif ($path === "/profile") require "controllers/profile.php";
else require "views/404.php";