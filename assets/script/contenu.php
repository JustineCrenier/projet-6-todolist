<?php
	$FILE = 'todo.json';
	$current = file_get_contents($FILE);
	$obj = json_decode($current, true);
	$taskTodo = $taskArchive = "";
	foreach ($obj as $key => $task) {
		if(isset($_POST['check'])){
			foreach ($_POST['check'] as $el) {
				if($el == $task['value']){
					$obj[$key]['state'] =false;
					$task['state'] = false;
					$jsondata = json_encode($obj, JSON_UNESCAPED_UNICODE);
					file_put_contents($FILE, $jsondata);
				}
			}
		}
		if($task['state'] === true){
			$taskTodo .= "<div><input type='checkbox' name='".$task['value']."' value='".$task['value']."'><label for='".$task['value']."'>". $task['value'] ."</label></div>";
		}else if($task['state'] === false){
			$taskArchive .= "<div><input type='checkbox' name='".$task['value']."' value='".$task['value']."' disabled><label for='".$task['value']."' class=''>". $task['value'] ."</label></div>";
		}
	}

	//add task in html
	echo "<section class='todo' id='todo'>
			<h2>To do</h2>
			<form>"
			.$taskTodo.
		"
		<input type='submit' id='register' name='register' value='save'>
		</form>
		</section>
		<section class='archive' id='archive'>
			<h2>Archive</h2>"
			.$taskArchive.
		"</section>";