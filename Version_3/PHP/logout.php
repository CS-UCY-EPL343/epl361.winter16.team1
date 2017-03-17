<?php
    session_start();
	session_destroy();
    session_unset();
		header("Location: ../HTMLFiles/LoginPage_2a.php");
	
	
?>