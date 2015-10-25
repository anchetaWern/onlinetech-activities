<?php
$array = array('a', 'b', 'c');
//indexed array
print_r($array);
//associative array
$array2 = array(
	'name' => 'value',
	'age' => 10
);

foreach($array as $var){
	echo $var . "<br>";
}
//concatenate
foreach($array2 as $key => $value){
	echo $key . " - " . $value . "<br>";
}
//multi-dimensional array
$multi = array(
	array(
		'Country' => 'Afganistan',
		'Continent' => 'Asia',
		'Capital' => 'Kabul'
	),
	array(
		'Country' => 'Albania',
		'Continent' => 'Europe',
		'Capital' => 'Tirana'
	),
	array(
		'Country' => 'Algeria',
		'Continent' => 'Africa',
		'Capital' => 'Algiers'
		),
	array(
		'Country' => 'Philippines',
		'Continent' => 'Asia',
		'Capital' => 'Manila',
		'Tribes' => array(
			'mangyan',
			'aeta' => array(
				'hair_color' => 'black'
			)
		)
		)
);
/*
foreach($multi as $row){
	echo $row['Tribes'][1]['hair_color'] . "<br>";
}
*/
echo $multi[3]['Tribes']['aeta']['hair_color'];