<?php
session_start();

$_SESSION['animals'] = array();

array_push($_SESSION['animals'], 'DOG', 'CAT');

print_r($_SESSION['animals']);

