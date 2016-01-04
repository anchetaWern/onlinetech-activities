<?php
$r = array('a', 'b', 'c', 'd', 'e', 'f', '5', '12', '10', '9');
array_push($r, 2);
array_push($r, 3);
array_pop($r);
$random_item = array_rand($r, 2);
echo "<h1>random</h1>";
echo $random_item[0];
echo "<br>" . $random_item[1];

$removed = array_splice($r, 1, 2);

echo "<h1>removed</h1>";
print_r($removed);

$multi = array(

	array(
		'name' => 'ren tao',
		'age' => 15,
		'spirit' => 'bason',
		'spirit_type' => 'human'
	),

	array(
		'name' => 'ryu',
		'age' => 29,
		'spirit' => 'tokageroh',
		'spirit_type' => 'human'
	),

	array(
		'name' => 'lyserg diethel',
		'age' => 12,
		'spirit' => 'morphine',
		'spirit_type' => 'nature'
	),

	array(
		'name' => 'yoh asakura',
		'age' => 15,
		'spirit' => 'amidamaru',
		'spirit_type' => 'human'
	),

	array(
		'name' => 'horo horo',
		'age' => 15,
		'spirit' => 'kororo',
		'spirit_type' => 'nature'
	),

);
?>
<h1>table</h1>
<table border="1">
	<thead>
		<tr>
			<th>name</th>
			<th>age</th>
			<th>spirit</th>
			<th>spirit_type</th>
		</tr>
	</thead>
	<tbody>
<?php
foreach($multi as $m){
?>	
		<tr>
			<td><?php echo $m['name']; ?></td>
			<td><?php echo $m['age']; ?></td>
			<td><?php echo $m['spirit']; ?></td>
			<td><?php echo $m['spirit_type']; ?></td>
		</tr>
<?php	
}
?>		
	</tbody>
</table>
<?php
$filtered = array_filter($multi, function($row){
	if($row['spirit_type'] == 'nature'){
		return $row;
	}
});
?>
<h1>filtered</h1>
<table border="1">
	<thead>
		<tr>
			<th>name</th>
			<th>age</th>
			<th>spirit</th>
			<th>spirit_type</th>
		</tr>
	</thead>
	<tbody>
<?php
foreach($filtered as $m){
?>	
		<tr>
			<td><?php echo $m['name']; ?></td>
			<td><?php echo $m['age']; ?></td>
			<td><?php echo $m['spirit']; ?></td>
			<td><?php echo $m['spirit_type']; ?></td>
		</tr>
<?php	
}
?>		
	</tbody>
</table>