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
			<input type="submit" name="add" value="Add" id="submit">
			<div class="result" id="result"></div>
		</form>
	</section>
	<!-- Javascript -->
	<script src="assets/script/jquery-3.3.1.min.js"></script>
	<script src="assets/script/script.js"></script>
	<!-- <script src="assets/js/main.js"></script> -->
</body>
</html>