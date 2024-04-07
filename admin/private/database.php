<?php

require_once('db_credentials.php');

function db_connect()
{
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  confirm_db_connect();
  return $connection;
}

function db_disconnect($connection)
{
  if (isset($connection)) {
    mysqli_close($connection);
  }
}

function db_escape($connection, $string)
{
  return mysqli_real_escape_string($connection, $string);
}

function confirm_db_connect()
{
  if (mysqli_connect_errno()) {
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
  }
}

function confirm_result_set($result_set, $db_connection)
{
  // Check if the result set is valid
  if ($result_set === false) {
    // Log the error
    error_log("Database query failed: " . mysqli_error($db_connection));
    exit("Database query failed: " . mysqli_error($db_connection));

    // Determine the type of error
    if (mysqli_connect_errno()) {
      // Connection error
      exit("Database connection error: " . mysqli_connect_error());
    } else {
      // Other errors (e.g., syntax errors, empty result sets)
      exit("Database query failed: " . mysqli_error($db_connection));
    }
  } elseif (mysqli_num_rows($result_set) === 0) {
    // Handle empty result set
    exit("No records found in the database.");
  }
}
