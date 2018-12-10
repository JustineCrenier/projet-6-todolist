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