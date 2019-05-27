<?php
//logout function
function logout(){
		/* Delete all Session Variables */
		$_SESSION = array();
		
		/* If a session cookie was used, delete it */
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 86400, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
		}
		
		/* Finally, delete the Session */
		session_destroy();													
		
		/* Forward to logout_success.php */
		header('Location: index.php');
		die;
	}
?>