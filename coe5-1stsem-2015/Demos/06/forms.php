<form method="GET">
	<input type="text" name="name">
	<input type="checkbox" name="hobbies[]" value="swimming">swimming
	<input type="checkbox" name="hobbies[]" value="breathing">breathing
	<input type="checkbox" name="hobbies[]" value="waking up">waking up
	<button type="button">button</button>
	<input type="submit" name="submit">
</form>
<?php
if(!empty($_GET)){
	//false
	//print_r($_GET['hobbies']);
	echo implode('/', $_GET['hobbies']);
}else{
	echo 'none';
}
?>