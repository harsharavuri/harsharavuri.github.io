	<?php
		
		require 'connect.inc.php';
		#echo $_SESSION['id'];
		session_unset();
		session_destroy();
		$url='index.php';
		$isstart=0;
		header('Location: '.$url);
		//die();
	?>
