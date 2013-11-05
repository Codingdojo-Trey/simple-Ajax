<?php 

	if(isset($_POST['action']) && $_POST['action'] == 'register')
	{
		$message = "you have successfully registered, {$_POST['first_name']}!";

		//database stuff would go here



		echo json_encode($message);
	}



 ?>