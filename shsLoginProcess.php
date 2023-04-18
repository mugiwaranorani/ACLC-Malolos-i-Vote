<?php
/*** for login process ***/
session_start();

$user = new User();

$voterID = $_SESSION['voterID'];

//REDIRECT AND RESTRICT ACCESS IF SESSION EXPIRED
if (!$user->get_session()){
   header("location:shsLogin.php");
}

//LOGOUT PROCESS
if (isset($_GET['q'])){
	$user->user_logout();
	header("location:shsLogin.php");
}

class User{
	public function check_login($usn, $pswd){
				
		include "dbconn.php";
		
		$query = "SELECT voterID, fullName, usn FROM shs_voter WHERE usn = '$usn' AND vpass = '$pswd'";
		$result = $conn->query($query);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;
		
		if ($count_row == 1) {
			$_SESSION['login'] = true; // this login var will use for the session thing
			$_SESSION['voterID'] = $user_data['voterID'];
			$_SESSION['fullName'] = $user_data['fullName'];
      		$_SESSION['usn'] = $user_data['usn'];
			mysqli_close($conn);
			return true;
		} else {
			return false;
		}
	}

	public function get_fullname($voterID){
		include "dbconn.php";
		$query = "SELECT fullName FROM shs_voter WHERE voterID = $voterID";
		
		$result = $conn->query($query);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['fullName'];
		mysqli_close($conn);
	}

	public function get_email($voterID){
		include "dbconn.php";
		$query = "SELECT email FROM shs_voter WHERE voterID = $voterID";
		
		$result = $conn->query($query);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['email'];
		mysqli_close($conn);
	}
	
  public function get_usn($voterID){
		include "dbconn.php";
		$query = "SELECT usn FROM shs_voter WHERE voterID = $voterID";
		
		$result = $conn->query($query);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['usn'];
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
		$usn = $_POST['usn'];
		$pswd = $_POST['vpass'];
		
		$user = new User();
		
		$login = $user->check_login($usn, $pswd);
	
	    if ($login) {
		
			//INSERT loginTime records latest login
			$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
			$voterID = $_SESSION['voterID'];
			$fullName = $_SESSION['fullName'];
      		$usn = $_SESSION['usn'];
			
			// query for inser user log in to data base
			$sql = "INSERT INTO `shs_userlog` (`voterID`, `logName`, `userIP`, logUSN)	VALUES ('$voterID', '$fullName', '$uip', '$usn')";
			$result = $conn->query($sql);
			mysqli_close($conn);
			
	        // login Success
			header("location: shsUser/home.php");
	    } else {
	        // login Failed
	        header("location:shsLogin-Invalid.php");
	    }
}
?>