<?php
	$FILE = file_get_contents('todo.json');
	if(isset($_POST['task'])){
		$result = trim(filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING));
		if(!empty($result)){
			$obj = json_decode($FILE, true);
			$obj[] = ['value' => $result, 'state' => true];
			$json_data = json_encode($obj, JSON_UNESCAPED_UNICODE);
			file_put_contents('todo.json', $json_data);
			echo "Success";	
		}else{
			echo "Failed";
		}
	}