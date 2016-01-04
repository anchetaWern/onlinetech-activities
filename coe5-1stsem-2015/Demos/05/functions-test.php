<?php
echo strtolower('hello world yo capitalizes each word in a string!') . "<br>";

$str = 'happy birthday to you!';
echo substr($str, 6, 8);
echo "<br>";

$str2 = 'a,b,c/,d,e,dog, cat, camel,/ racoon';
$array = explode('/', $str2);
print_r($array);

echo  '<br>';
$array3 = array('dog', 'cat', 'mole', 'yo');
$str3 = implode('/', $array3);
echo $str3;
echo "<br>";

echo htmlentities("<strong>strong</strong>");
echo "<br>";

if(stristr('hellow world', 'xyz') !== false){
	echo 'yup its in there';
}


echo "<br>";

$array3 = array('dog', 'cat', 'mole', 'yo', 'dog', 'cat', 'abc', 'def', 'mole');
array_push($array3, 'max menthol candy');
print_r($array3);
array_pop($array3);
print_r($array3);

$array_flipped = array_flip($array3);
print_r($array_flipped);

$uniq = array_values(array_unique($array3));
echo "<br>";
print_r($uniq);
echo "<br>";
$volt_in = array_merge(array('daimos'), array('voltes v', 'mazinger z'), array('power rangers'), array('goku'));
print_r($volt_in);

echo "<br>";

$r2 = array_slice($volt_in, 1, 3);
print_r($r2);

echo "<br>";