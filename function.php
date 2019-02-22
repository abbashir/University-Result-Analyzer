<?php

function logout(){
	
	session_destroy();
}

function loggedin(){
	if(isset($_SESSION['email'])){
		return true;
	}
}
?>