<?php
session_start();
?>
<form action="session-add.php" method="POST">
	<p>
		<label for="name">name</label>
		<input type="text" name="name" id="name" required>		
	</p>
	<p>
		<label for="age">age</label>
		<input type="number" name="age" id="age" required>		
	</p>
	<button>save</button>	
</form>
<?php
if(!empty($_POST)){

	if(!empty($_POST['name']) && !empty($_POST['age']) && filter_var($_POST['age'], FILTER_VALIDATE_INT)){

		$name = $_POST['name'];
		$age = $_POST['age'];

		$_SESSION['users'][] = array(
			'name' => $name,
			'age' => $age
		); 
	}else{
		echo 'invalid input';
	}

}

if(!empty($_SESSION['users'])){
?>	
	<ul>
	<?php
	foreach($_SESSION['users'] as $user){
	?>
		<li><?php echo $user['name'] ?> - <?php echo $user['age']; ?></li>
	<?php
	}
	?>
	</ul>
<?php
}
?>