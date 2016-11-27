<?php
	session_start();
	
	define("SERVER", "crispy.team1.toast.it");
	define("DOMAIN", "team1.toast.it");

	if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
		if($_POST['func'] == "login") {
			login();
		}
		else if($_POST['func'] == "getUser") {
			getUser();
		}
	}
	
	exit(0);
	
	function login() {
		if(!empty($_SESSION['username'])) {
			echo "Someone is already logged in\n";
			exit(-2);
		}
		
		$username = $_POST['username'] . "@" . DOMAIN;
		$password = $_POST['password'];
		
		$ldap = ldap_connect(SERVER);
		
		if(! $ldap) {
			//Could not connect to the server
			echo "Could not connect to auth server\n";
			exit(-1);
		}
		ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
		
		if ($bind = ldap_bind($ldap, $_POST['username'], $_POST['password'])) {
			//The user was found in the system so start a session for them
			$_SESSION['username'] = $_POST['username'];
		} else {
		  echo "Incorrect username or password\n";
		}
		exit(0);
	}
	
	function getUser(){
		if(empty($_SESSION['username'])) {
			echo "No one is logged in\n";
			exit(-1);
		}
		else {
			echo $_SESSION['username'];
			exit(0);
		}
	}
?>