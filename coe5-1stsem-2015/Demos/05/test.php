<?php

$var = '20';

if(gettype($var) == 'string'){
	//echo "<strong>yup string</strong>";
}elseif (gettype($var) == 'integer') {
?>
<strong><?php echo 'yup integer'; ?></strong>
<?php
}else{
	//echo '<strong>nope</strong>';
}

echo "<br>";
/*
echo 'Im in new line';

echo "<br>";
switch(gettype($var)){

	case 'string':
		echo "<strong>yup string</strong>";
		break;


	case 'integer':
		echo "<strong>yup integer</strong>";
		break;

	default:
		echo '<strong>nope</strong>';


}
*/

$array = array('one', 'two', 'three', 'four', 'five');
$array_length = count($array); // 5


for($x = 0; $x < $array_length; $x++){

	echo $array[$x] . "<br>";

}


foreach($array as $key => $value){
	echo $key . " -> " . $value . "<br>";
}

$y = 0; 
do{
	echo $array[$y] . "<br>";
	$y++;
}while($y < $array_length);

?>