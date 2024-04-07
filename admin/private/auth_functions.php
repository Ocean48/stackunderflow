<?php


function log_in_admin($admin)
{
	session_regenerate_id();
	$_SESSION['admin_id'] = $admin['id'];
	$_SESSION['last_login'] = time();
	$_SESSION['username'] = $admin['username'];
	return true;
}


function admin_is_logged_in()
{
	return isset($_SESSION['admin_id']);
}


function admin_require_login()
{
	if (!admin_is_logged_in()) {
		header('Location:login.php');
	} else {
		// Do nothing, let the rest of the page proceed
	}
}


function log_in_user($admin)
{
	session_regenerate_id();
	$_SESSION['user_id'] = $admin['id'];
	$_SESSION['last_login'] = time();
	$_SESSION['username'] = $admin['username'];
	return true;
}


function user_is_logged_in()
{
	return isset($_SESSION['user_id']);
}