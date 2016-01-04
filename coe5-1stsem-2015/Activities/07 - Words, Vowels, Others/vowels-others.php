<?php
include 'string.php';

$vowels = array('a', 'e', 'i', 'o', 'u');

$r = explode(' ', $str);
?>
<table border="1">
	<thead>
		<tr>
			<th>word</th>
			<th>length</th>
			<th>vowels</th>
			<th>others</th>
		</tr>
	</thead>
	<tbody>	
		<?php
		foreach($r as $str){
			$str_r = str_split($str);
			$vowel_matches = 0;
			$other_matches = 0; 
			foreach($str_r as $s){
				if(in_array($s, $vowels)){
					$vowel_matches += 1;
				}else{
					$other_matches += 1;
				}
			}
		?>
		<tr>
			<td><?php echo $str ?></td>
			<td><?php echo strlen($str); ?></td>
			<td><?php echo $vowel_matches; ?></td>
			<td><?php echo $other_matches; ?></td>
		</tr>
		<?php	
		}
		?>
	</tbody>
</table>
