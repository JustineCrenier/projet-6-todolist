<?php
	$FILE = file_get_contents('assets/js/todo.json');
	//Sanatize and display errors
	if(isset($_POST['add']) && $_POST['add'] === "Add"){
		if(!empty($_POST['task'])){
			$result = trim(filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING));
			//create json
			$obj = json_decode($FILE, true);
			array_push($obj["todo"], $result);
			$json_data = json_encode($obj);
			file_put_contents('assets/js/todo.json', $json_data);
		}else{
			$error = "This field cant be empty !";
		}
	}else{
		$error = "tttt, just click Add";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>To-Do List</title>
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
	<header>
		<h1>My To-Do List</h1>
	</header>
	<div id="result"></div>
	<div class="wrapper">
		<section class="todo" id="todo">
			<h2>To do</h2>
		</section>
		<section class="archive" id="archive">
			<h2>Archive</h2>
		</section>
	</div>
	<section class="addTask">
		<h2>Add a task</h2>
		<form>
			<label for="task">Task to do</label>
			<textarea name="task" id="task" rows="2"></textarea>
			<input type="submit" name="add" value="Add" id="add">
			<?php if(isset($_POST['add'])): ?>
				<p class="error"><?php echo $error ?></p>
			<?php endif; ?>
		</form>
	</section>
	<!-- Javascript -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/script.js"></script>
	<!-- <script src="assets/js/main.js"></script> -->
</body>
</html>