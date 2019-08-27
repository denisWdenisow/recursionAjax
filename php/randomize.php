<?php
	
	if ( isset($_POST['request']) ){
		echo json_encode([$_POST['request'] => rand(1,100)]);
	}