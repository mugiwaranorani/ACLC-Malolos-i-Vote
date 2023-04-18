<?php
	include '../dbconn.php';

	if (isset($_POST['voteBtnMain'])) {
		$voterName = $_POST['vname'];
		$voterID = $_POST['vid'];
	  	$pendingPresident = $_POST['president'];
	  	$pendingVicePresident = $_POST['vpresident'];
	  	$pendingSecretary = $_POST['secretary'];
	  	$pendingTreasurer = $_POST['treasurer'];
		$pendingAuditor = $_POST['auditor'];
		$pendingShs11Rep = $_POST['shs11rep'];
		$pendingShs12Rep = $_POST['shs12rep'];

	  	// Check if a record already exists for the voterID
	  	$checkQuery = "SELECT * FROM shs_pendingvote WHERE voterID = '$voterID'";
	  	$checkResult = $conn->query($checkQuery);

	  	if ($checkResult->num_rows > 0) {
	    	// A record already exists for the user, handle the error or display a message
	    	header("location:vote-pending-to-confirm.php");
	  	} else {
	    	$sql = "INSERT INTO shs_pendingvote (`voterName`, `voterID`, `pendingPresident`, `pendingVicePresident`, `pendingSecretary`, `pendingTreasurer`, `pendingAuditor`, `pendingShs11Representative`, `pendingShs12Representative`)
			VALUES ('$voterName', '$voterID', '$pendingPresident', '$pendingVicePresident', '$pendingSecretary', '$pendingTreasurer', '$pendingAuditor', '$pendingShs11Rep', '$pendingShs12Rep')";
													
	    	if ($conn->query($sql)) {
	      		header("location:vote-pending-to-confirm.php");
	    	} else {
	      		echo "Error: " . $sql . "<br>" . $conn->error;
	    	}
	  	}

		// Close the connection
		$conn->close();
	}
?>

<?php
	include '../dbconn.php';

	if (isset($_POST['voteBtnA'])) {
		$voterName = $_POST['vname'];
		$voterID = $_POST['vid'];
	  	$pendingPresident = $_POST['presidentA'];
	  	$pendingVicePresident = $_POST['vpresidentA'];
	  	$pendingSecretary = $_POST['secretaryA'];
	  	$pendingTreasurer = $_POST['treasurerA'];
		$pendingAuditor = $_POST['auditorA'];
		$pendingShs11Rep = $_POST['shs11repA'];
		$pendingShs12Rep = $_POST['shs12repA'];

	  	// Check if a record already exists for the voterID
	  	$checkQuery = "SELECT * FROM shs_pendingvote WHERE voterID = '$voterID'";
	  	$checkResult = $conn->query($checkQuery);

	  	if ($checkResult->num_rows > 0) {
	    	// A record already exists for the user, handle the error or display a message
	    	header("location:vote-pending-to-confirm.php");
	  	} else {
	    	$sql = "INSERT INTO shs_pendingvote (`voterName`, `voterID`, `pendingPresident`, `pendingVicePresident`, `pendingSecretary`, `pendingTreasurer`, `pendingAuditor`, `pendingShs11Representative`, `pendingShs12Representative`)
			VALUES ('$voterName', '$voterID', '$pendingPresident', '$pendingVicePresident', '$pendingSecretary', '$pendingTreasurer', '$pendingAuditor', '$pendingShs11Rep', '$pendingShs12Rep')";
													
	    	if ($conn->query($sql)) {
	      		header("location:vote-pending-to-confirm.php");
	    	} else {
	      		echo "Error: " . $sql . "<br>" . $conn->error;
	    	}
	  	}

		// Close the connection
		$conn->close();
	}
?>

<?php
	include '../dbconn.php';

	if (isset($_POST['voteBtnB'])) {
		$voterName = $_POST['vname'];
		$voterID = $_POST['vid'];
	  	$pendingPresident = $_POST['presidentB'];
	  	$pendingVicePresident = $_POST['vpresidentB'];
	  	$pendingSecretary = $_POST['secretaryB'];
	  	$pendingTreasurer = $_POST['treasurerB'];
	  	$pendingAuditor = $_POST['auditorB'];
		$pendingShs11Rep = $_POST['shs11repB'];
		$pendingShs12Rep = $_POST['shs12repB'];

	  	// Check if a record already exists for the voterID
	  	$checkQuery = "SELECT * FROM shs_pendingvote WHERE voterID = '$voterID'";
	  	$checkResult = $conn->query($checkQuery);

	  	if ($checkResult->num_rows > 0) {
	    	// A record already exists for the user, handle the error or display a message
	    	header("location:vote-pending-to-confirm.php");
	  	} else {
	    	$sql = "INSERT INTO shs_pendingvote (`voterName`, `voterID`, `pendingPresident`, `pendingVicePresident`, `pendingSecretary`, `pendingTreasurer`, `pendingAuditor`, `pendingShs11Representative`, `pendingShs12Representative`)
			VALUES ('$voterName', '$voterID', '$pendingPresident', '$pendingVicePresident', '$pendingSecretary', '$pendingTreasurer', '$pendingAuditor', '$pendingShs11Rep', '$pendingShs12Rep')";
													
	    	if ($conn->query($sql)) {
	      		header("location:vote-pending-to-confirm.php");
	    	} else {
	      		echo "Error: " . $sql . "<br>" . $conn->error;
	    	}
	  	}

		// Close the connection
		$conn->close();
	}
?>