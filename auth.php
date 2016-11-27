<?php
	session_start();
	
	define("SERVER", "crispy.team1.toast.it");
	define("DOMAIN", "team1.toast.it");
	define("LDAPAdmin", "kristencsantos");
	define("LDAPPass", "zar2004");

	if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
		if($_POST['func'] == "login") {
			login();
		}
		else if($_POST['func'] == "logout") {
			logout();
		}
		else if($_POST['func'] == "register") {
			register();
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
		
		if ($bind = ldap_bind($ldap, $username, $password)) {
			//The user was found in the system so start a session for them
			$_SESSION['username'] = $_POST['username'];
			exit(0);
		} else {
		  echo "Incorrect username or password\n";
		  exit(-1);
		}
	}
	
	function logout() {
		session_unset();
		session_destroy();
		exit(0);
	}
	
	function register() {
		if(!empty($_SESSION['username'])) {
			echo "Someone is already logged in\n";
			exit(-2);
		}
		
		$ldap = ldap_connect(SERVER);
		
		if(! $ldap) {
			//Could not connect to the server
			echo "Could not connect to auth server\n";
			exit(-1);
		}
		ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
		
		if ($bind = ldap_bind($ldap, LDAPAdmin . "@" . DOMAIN, LDAPPass)) {
			$base_dn = 'CN='. $_POST['username'] . ',DC=team1,DC=toast, DC=it';
			$info["objectclass"] = "person";
			$info['userPassword'] = $_POST['password'];

			if($add = ldap_add($ldap, $base_dn, $info)) {
				
			}
			else {
				echo "Failed to add user: " . ldap_error($ldap) . "\n";
			}
		} else {
		  echo "Could not login to auth server\n";
		}
		exit(0);
	}
?>