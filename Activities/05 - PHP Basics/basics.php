<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Basics</title>
</head>
<body>
	<p>
		<?php echo 'hello from PHP'; ?>
	</p>
	<?php
	$first_name = 'wern';
	$last_name = 'ancheta';
	$middle_initial = 'p.';
	?>
	<form method="POST">
		<p>
			<label for="fname">first name</label>
			<input type="text" name="fname" id="fname" value="<?= $first_name; ?>">
		</p>
		<p>
			<label for="lname">last name</label>
			<input type="text" name="lname" id="lname" value="<?= $last_name; ?>">
		</p>
		<p>
			<label for="mi">middle initial</label>
			<input type="text" name="mi" id="mi" value="<?= $middle_initial; ?>">
		</p>
		<button>submit</button>
	</form>
	<?php 
	echo "Hello my name is {$first_name} {$last_name}";
	?>
	<br>
	<?php
	echo "Hello my name is " . $first_name . ' ' . $last_name;
	?>
	<ul>
		<li><?= 200 + 30; ?></li>
		<li><?= 50 - 20; ?></li>
		<li><?= 10 * 10; ?></li>
		<li><?= 100/25; ?></li>
		<li><?= 10 % 7; ?></li>
	</ul>
	<?php
	$num = 23;
	$num += 23 + 15;
	echo $num . "<br>";
	$num -= 3;
	echo $num . "<br>";
	$num *= 5;
	echo $num . "<br>";
	$num /= 3;
	echo $num . "<br>";
	$num += 1;
	echo $num . "<br>";
	$num -= 1;
	echo $num . "<br>";
	?>

	<?php
	$string = 'im a string';
	$integer = 20;
	$float = 23.5;
	$boolean = true;
	$array = array('one', 'two');
	class Bar {

	}
	$object = new Bar();
	$null = null;

	var_dump($string);
	echo "<br>";
	var_dump($integer);
	echo "<br>";
	var_dump($float);
	echo "<br>";
	var_dump($boolean);
	echo "<br>";
	var_dump($array);
	echo "<br>";	
	var_dump($object);
	echo "<br>";
	var_dump($null);
	echo "<br>";
	print_r($array);
	unset($string);
	var_dump($string);

	echo gettype($string);
	echo "<br>";
	echo gettype($integer);
	echo "<br>";
	echo gettype($float);
	echo "<br>";
	echo gettype($boolean);
	echo "<br>";
	echo gettype($array);
	echo "<br>";	
	echo gettype($object);
	echo "<br>";
	echo gettype($null);
	echo "<br>";

	?>

	<?php
	$num = 23;
	if($num >= 100){
		echo 'yup >= 100';
	}else if($num <= 50){
		echo 'yup <= 50';
	}else{
		echo 'nope';
	}

	$months = array(
		'jan', 'feb', 'mar', 'apr', 
		'may', 'jun', 'july', 'aug',
		'sept', 'oct', 'nov', 'dec'
	);
	?>
	<ul>
	<?php
	for($x = 0; $x < 12; $x++){
	?>
		<li><?= $months[$x]; ?></li>
	<?php	
	}
	?>	
	</ul>

	<ul>		
	<?php
	foreach($months as $month){
	?>
		<li><?= $month; ?></li>
	<?php
	}
	?>
	</ul>

	<ul>		
	<?php
	$index = 0;
	do {
	?>
		<li><?= $months[$index]; ?></li>
	<?php
		$index += 1;
	} while ($index < 12);
	?>
	</ul>

	<ul>		
	<?php
	$index = 0;
	while ($index < 12) {
	?>
		<li><?= $months[$index]; ?></li>
	<?php
		$index += 1;
	}
	?>
	</ul>


</body>
</html>