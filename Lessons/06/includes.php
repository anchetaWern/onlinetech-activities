<?php
//google php timezones
date_default_timezone_set('America/Los_Angeles');
//include 'functions.php'; //warning
require 'functions.php'; //warning + fatal error

//echo sum(2, 3);

//header('Location: folder/another-page.php'); 

//date
//echo date('Y-m-d h:i:s A'); //2015-10-17
//Y = 2001
//m = 10
//d = 17
/*
H
*/
//file
//$contents = file_get_contents('text-file.txt');
//echo nl2br($contents);
/*
r- read
w- write
a- append
*/
$file = fopen('uploads/text-file.txt', 'a');
fwrite($file, "dog\ncat\ncow");
fclose($file);

//sudo chmod -R 777 uploads
//7 - read,write,execute
//admin, group, guest users

//$filesize = filesize('text-file.txt');
//$contents = fread($file, $filesize);
//echo nl2br($contents);