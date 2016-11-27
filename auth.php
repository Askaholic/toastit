<?php
	$ldap = ldap_connect("10.250.101.90");
	if ($bind = ldap_bind($ldap, $_POST['username'], $_POST['password'])) {
	  echo "Authenticated";
	} else {
	  echo "Authentication failed";
	}
?>