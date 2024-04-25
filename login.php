<?php
require_once('admin/private/initialize.php');

$errors = [];
$username = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$username = $_POST['username'];
	$password = $_POST['password'];

	// if there were no errors, try to login
	if (empty($errors)) {
		// Using one variable ensures that msg is the same
		$login_failure_msg = "Log in was unsuccessful. Wrong username or password";

		$user = get_user_by_username($username);
		if (!is_int($user)) {

			if ($password == $user['password']) {
				// echo password_verify_own($password, $user['password']);
				// password matches
				log_in_user($user);
				header("Location:index.php");
			} else {
				// username found, but password does not match
				$errors[] = $login_failure_msg;
			}
		} elseif ($user == -3) {
			// no username found
			$errors[] = $login_failure_msg;
			echo '<script language="javascript">';
			echo 'alert("Wrong username or password")';
			echo '</script>';
		}
	}
}

$page_title = 'StackUnderFlow';
include('h_f/header.php');
?>

<main id="login_sign">
	<div style="margin: auto; width: 40%; padding: 10px;">
		<h1>Login</h1>

		<form action="login.php" method="post">

			Username:<br />
			<input type="text" name="username" required /><br />

			Password:<br />
			<input type="password" name="password" id="mypassword" required />
			<input type="checkbox" onclick="show_password()">Show Password

			<script>
				function show_password() {
					var x = document.getElementById("mypassword");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>

			<br><br>
			<input type="submit" name="submit" value="Login" />
		</form>

	</div>
</main>


<?php include('h_f/footer.php'); ?>