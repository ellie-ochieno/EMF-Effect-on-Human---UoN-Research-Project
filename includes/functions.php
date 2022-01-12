<?php
	session_start();
			// tracks user session
  include("db_connector_string.php");
  //extends db connection file

	// variable declaration
	$username = "";
	$email    = "";
	$errors   = array();
	$alerts = array();

	// call the register() function if register_btn is clicked
	if (isset($_POST['signup_btn'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
	}
			// REGISTER USER
	function register(){
		global $connect, $errors, $alerts;
		// receive all input values from the form
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO users (username, email, user_type, password)
						  VALUES('$username', '$email', '$user_type', '$password')";
				mysqli_query($connect, $query);
				$_SESSION['success']  = "New user successfully created!!";
				array_push($alerts, 'Signup success!');
				header('location: admin.php');
			}else{
				$query = "INSERT INTO users (username, email, user_type, password)
						  VALUES('$username', '$email', 'user', '$password')";
				mysqli_query($connect, $query);

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($connect);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				array_push($alerts, 'Signup success! You can now login.');
				header('location: login.php');
			}
		}
	}
			// return user array from their id
	function getUserById($id){
		global $connect;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($connect, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

			// LOGIN USER
	function login(){
		global $connect, $username, $errors, $alerts;

				// grab form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

				// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form info@admin2.com
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM users WHERE username='$username' OR email='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($connect, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					array_push($alerts, 'Login success! Welcome '."$logged_in_user".'.');
					header('location: admin/admin.php');
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					array_push($alerts, 'Login success! Welcome '."$logged_in_user".'.');
					header('location: ../index.php');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $connect;
		return mysqli_real_escape_string($connect, trim($val));
	}

  function flash_alert_display(){
      global $alerts;
      if (count($alerts) > 0){
          echo '<div class="error_msg">';
              echo "Confirmation:";
          echo "</div>";
          echo '<div class="error">';
              foreach ($alerts as $alert){
                  echo $alert .'<br>';
              }
          echo '</div>';
      }
  }

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error_msg">';
                echo "Error!";
            echo "</div>";
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>
