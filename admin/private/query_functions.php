<?php

// 
// Admins
// 
// Find an admin by id
function get_admin_by_id($id) {
	global $db;

	$sql = "SELECT * FROM `admin` ";
	$sql .= "WHERE id='" . db_escape($db, $id) . "' ";
	$sql .= "LIMIT 1";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$admin = mysqli_fetch_assoc($result); // get first
	mysqli_free_result($result);
	return $admin; // returns an assoc. array
}

function get_admin_by_username($username) {
	global $db;

	$sql = "SELECT * FROM `admin` ";
	$sql .= "WHERE username='" . db_escape($db, $username) . "' ";
	$sql .= "LIMIT 1";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$admin = mysqli_fetch_assoc($result); // find first
	mysqli_free_result($result);
	return $admin; // returns an assoc. array
}