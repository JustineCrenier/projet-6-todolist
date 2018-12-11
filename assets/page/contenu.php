<?php
	$FILE = file_get_contents('../script/todo.json');
	$obj = json_decode($FILE, true);
	foreach ($obj as $todo) {
		if($todo['state'] === true){
			echo "<div><input type='checkbox' name='".$todo['value']."'><label for='".$todo['value']."'>". $todo['value'] ."</label></div>";
		}
	}