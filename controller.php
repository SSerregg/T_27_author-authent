<?php
session_start();
if(!empty($_SESSION['username'])){
$usernam = $_SESSION['username'];

$unset = $_GET['submit'] ?? null;


}else{
    $usernam = '';
}
if (!empty($unset)){
    session_unset();

    header ('Location:/index.php');
}
require_once 'templates/view.php';
include_once 'VK/login.php';