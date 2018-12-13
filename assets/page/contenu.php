<?php
	$FILE = file_get_contents('../script/todo.json');
	$obj = json_decode($FILE, true);
	foreach ($obj as $task) {
		if($task['state'] === true){
			$taskTodo .= "<div><input type='checkbox' name='".$task['value']."'><label for='".$task['value']."'>". $task['value'] ."</label></div>";
		}
	}

	//add task in html
	echo "<section class='todo' id='todo'>
			<h2>To do</h2>
			<form>"
			.$taskTodo.
		"
		<input type='submit' id='register' name='register' value='register'>
		</form>
		</section>
		<section class='archive' id='archive'>
			<h2>Archive</h2>
		</section>";