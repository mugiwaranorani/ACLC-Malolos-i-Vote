<?php
/*** for login process ***/
session_start();

$user = new User();

$adminID = $_SESSION['adminID'];

//REDIRECT AND RESTRICT ACCESS IF SESSION EXPIRED
if (!$user->get_session()){
   	header("location:adminLogin.php");
}

//LOGOUT PROCESS
if (isset($_GET['q'])){
	$user->user_logout();
	header("location:adminLogin.php");
}

class User{
	public function check_login($uname, $pswd){
				
		include "dbconn.php";
		
		$query = "SELECT adminID, adminName, username FROM admin_account WHERE username = '$uname' AND adminPassword = '$pswd'";
		$result = $conn->query($query);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;
		
		if ($count_row == 1) {
			$_SESSION['login'] = true; // this login var will use for the session thing
			$_SESSION['adminID'] = $user_data['adminID'];
			$_SESSION['adminName'] = $user_data['adminName'];
      		$_SESSION['username'] = $user_data['username'];
			mysqli_close($conn);
			return true;
		} else {
			return false;
		}
	}

	public function get_fullname($adminID){
		include "dbconn.php";
		$query = "SELECT adminName FROM admin_account WHERE adminID = $adminID";
		
		$result = $conn->query($query);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['adminName'];
		mysqli_close($conn);
	}
	
  public function get_username($adminID){
		include "dbconn.php";
		$query = "SELECT username FROM admin_account WHERE adminID = $adminID";
		
		$result = $conn->query($query);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['username'];
		mysqli_close($conn);
	}

	/*** starting the session ***/
	public function get_session(){
		return $_SESSION['login'];
	}

	public function user_logout() {
		$_SESSION['login'] = FALSE;
		unset($_SESSION);
		session_destroy();
	}
}

if (isset($_POST['submit'])) { 
		//extract($_POST);
		include "dbconn.php";
		$uname = $_POST['uname'];
		$pswd = $_POST['vpass'];
		
		$user = new User();
		
		$login = $user->check_login($uname, $pswd);
	
	    if ($login) {
		
			//INSERT loginTime records latest login
			$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
			$adminID = $_SESSION['adminID'];
			$fullName = $_SESSION['adminName'];
			
			// query for inser user log in to data base
			$sql = "INSERT INTO `admin_userlog` (`adminID`, `logName`, `userIP`)	VALUES ('$adminID', '$fullName', '$uip')";
			$result = $conn->query($sql);
			mysqli_close($conn);
			
	        // login Success
			header("location: admin/a-home.php");
	    } else {
	        // login Failed
	        header("location:adminLogin-Invalid.php");
	    }
}
?>