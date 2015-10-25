<?php
session_start();

array_push($_SESSION['animals'], 'pink');
print_r($_SESSION['animals']);

array_pop($_SESSION['animals']);

print_r($_SESSION['animals']);