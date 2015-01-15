<?php
	$errors = array(
		array(
			'msg' => "Undefined Error",
			'code' => 0
		),
		array(
			'msg' => "Wrong request",
			'code' => 1
		),
		array(
			'msg' => "Application not found",
			'code' => 2
		),
		array(
			'msg' => "Wrong method",
			'code' => 3
		)
	);
	$apps = array(
		'app' => array(
			'methods' => array(
				'foo.get' => array(
					'param1',
					'param2',
					'param3'
				),
				'foo.set' => array(
					'p1',
					'p2'
				)
			)
		),
		'app2' => array(
			'methods' => array(
				'some.set' => array(
					'arg',
					'arg2',
					'arg3'
				)
			)
		)
	);
	
	header('Content-Type: application/json');
	
	$query = $_SERVER['REQUEST_URI'];
	$query = parse_url($query);
	$path = preg_split("/\\//", $query["path"]);
	if(array_key_exists(2, $path)){
		if(!array_key_exists($path[1], $apps)) error(2);
		if(!array_key_exists($path[2], $apps[$path[1]]['methods'])) error(3);
		$method = $path[2];
		response($query);
	}else{
		error(1);
	}
	
	function response($data){
		die(json_encode(
				$data
			)
		);
	}
	function error($code = 0){
		global $errors;
		die(json_encode(
			array(
				'Error' => $errors[$code]
			)
		));
	}
?>
