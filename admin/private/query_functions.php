<?php

// 
// Admins
function get_admin_by_id($id)
{
	global $db;

	$sql = "SELECT * FROM `admin` ";
	$sql .= "WHERE id='" . db_escape($db, $id) . "' ";
	$sql .= "LIMIT 1";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result, $db);
	$admin = mysqli_fetch_assoc($result); // get first row
	mysqli_free_result($result); // free result
	return $admin;
}

function get_admin_by_username($username)
{
	global $db;

	$sql = "SELECT * FROM `admin` ";
	$sql .= "WHERE username='" . db_escape($db, $username) . "' ";
	$sql .= "LIMIT 1";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result, $db);
	$admin = mysqli_fetch_assoc($result);// get first row
	mysqli_free_result($result);
	return $admin;
}

// function get_all_products()
// {
// 	global $db;

// 	$sql = "SELECT * FROM `products` ";
// 	$sql .= "ORDER BY brand ASC";
// 	$result = mysqli_query($db, $sql);
// 	confirm_result_set($result, $db);
// 	return $result; // returns all rows
// }