<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$currentPageURL = rtrim($protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], '/');
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <title>الآباء البطاركة - بافلي وجيه</title>
        <link rel="stylesheet" href="http://localhost/patriarch/includes/css/vendor/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
        <link rel="stylesheet" href="http://localhost/patriarch/includes/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/patriarch/includes/css/index.css">
    </head>
    <body>
        <div class='spinner-wrapper'>
            <video width="320" height="240" autoplay muted loop>
                <source src="http://localhost/patriarch/media/videos/loading.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="spinner"></div>
        </div>
