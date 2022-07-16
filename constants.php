<?php

$baseUrl = "http://localhost/patriarch";
$includesPath = "$baseUrl/includes/";
$mediaPath = "$baseUrl/media/";

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$currentPageURL = rtrim($protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], '/');