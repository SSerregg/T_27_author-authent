<?php

session_start();

$vkOut = $_SESSION['VK'] ?? null;


include_once '../templates/example1.php';

if (!empty($vkOut)){

    include_once '../templates/picture.php';
}

include_once '../templates/example2.php';