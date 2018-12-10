<?php
	//Sanatize and display errors
	if(isset($_POST['add']) && $_POST['add'] === "Add"){
		if(!empty($_POST['task'])){
			$options = array('task' => FILTER_SANITIZE_STRING);
			$result = filter_input_array(INPUT_POST, $options);
			//create json
			$obj = array('task' => $result['task']);
			$json_data = json_encode($obj);
			file_put_contents('assets/js/todo.json', $json_data);
		}else{
			$error = "Le champs ne peut pas être vide";
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
	<section class="addTask">
		<h2>Add a task</h2>
		<form action="formulaire.php" method="POST">
			<label for="task">Task to do</label>
			<textarea name="task" id="task" rows="2"></textarea>
			<input type="submit" name="add" value="Add">
			<?php if(isset($_POST['add'])): ?>
				<p class="error"><?php echo $error ?></p>
			<?php endif; ?>
		</form>
	</section>
</body>
</html>