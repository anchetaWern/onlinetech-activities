<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<main>
		<header>
			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</header>

		<aside>
			<nav>
				<ul>
					<li><a href="#">side1</a></li>
					<li><a href="#">side2</a></li>
					<li><a href="#">side3</a></li>
				</ul>
			</nav>
		</aside>

		
			<?php
			if(empty($_POST)){
			?>
			<form method="POST">
				<p>
					<label for="name">Name: </label>
					<input type="text" name="name" id="name">
				</p>
				<p>
					<label for="age">Age: </label>
					<input type="number" name="age" id="age">
				</p>
				<p>
					<label for="email">Email: </label>
					<input type="email" name="email" id="email">
				</p>
				<p>
					<label for="website">Website: </label>
					<input type="url" name="website" id="website">
				</p>
				<p>
					Gender
					<label>
						<input type="radio" name="gender" value="male"> male
					</label>
					<label>
						<input type="radio" name="gender" value="female"> female
					</label>
				</p>
				<p>
					<label for="fav_food">Favorite Food: </label>
					<select name="fav_food" id="fav_food">
						<option value="pinakbet">pinakbet</option>
						<option value="adobo">adobo</option>
						<option value="empanada">empanada</option>
					</select>
				</p>
				<p>
					hobbies
					<label>
						<input type="checkbox" name="hobbies[]" value="eating"> eating
					</label>
					<label>
 						<input type="checkbox" name="hobbies[]" value="waking up"> waking up
					</label>
					<label>
						<input type="checkbox" name="hobbies[]" value="day dreaming"> day dreaming
					</label>
				</p>
				<button>submit</button>
			</form>
			<?php	
			}else{
			?>
				<ul>
					<li>name: <?= $_POST['name']; ?></li>
					<li>age: <?= $_POST['age']; ?></li>
					<li>email: <?= $_POST['email']; ?></li>
					<li>website: <?= $_POST['website']; ?></li>
					<li>gender: <?= $_POST['gender']; ?></li>
					<li>favorite food: <?= $_POST['fav_food']; ?></li>
					<li>hobbies: <?= implode(',', $_POST['hobbies']); ?></li>
				</ul>
			<?php	
			}
			?>
		

		<footer>
			Copyright 2015
		</footer>
	</main>
	
</body>
</html>
