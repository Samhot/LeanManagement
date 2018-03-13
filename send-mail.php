<?php
	// Contact
	$to = 'thomas.punzano@gmail.com';
  //$subject = 'Entrez votre sujet ici...';
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
   		$name    = $_POST['name'];
    	$from    = $_POST['email'];
    	$message = $_POST['message'];
		if (mail($to, $subject, $message, $from)) { 
			$result = array(
				'message' => 'Merci pour votre message !',
				'sendstatus' => 1
				);
			echo json_encode($result);
		} else { 
			$result = array(
				'message' => 'Désolé, quelque chose ne va pas...',
				'sendstatus' => 1
				);
			echo json_encode($result);
		} 
	}
?>
