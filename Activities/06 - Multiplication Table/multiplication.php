<?php 
for($x = 1; $x <= 5; $x++){

	for($y = 1; $y <= 5; $y++){
		echo $y + $x . "<br>";	
	}

	echo "<hr>";
		
}
?>

<table border="1">
	<?php 
	for($x = 1; $x <= 10; $x++){
	?>
	<tr>
		<?php
		for($y = 1; $y <= 10; $y++){
			$z = $x * $y;
		?>
			<td><?php echo $z; ?></td>
		<?php
		}
		?>
	</tr>
	<?php
	}
	?>
</table>