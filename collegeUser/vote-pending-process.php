<?php
	include '../dbconn.php';

	if (isset($_POST['voteBtnMain'])) {
		$voterName = $_POST['vname'];
		$voterID = $_POST['vid'];
	  	$pendingPresident = $_POST['president'];
	  	$pendingVicePresident = $_POST['vpresident'];
	  	$pendingSecretary = $_POST['secretary'];
	  	$pendingTreasurer = $_POST['treasurer'];
	  	$pendingCollegeRep = $_POST['collegerep'];

	  	// Check if a record already exists for the voterID
	  	$checkQuery = "SELECT * FROM clg_pendingvote WHERE voterID = '$voterID'";
	  	$checkResult = $conn->query($checkQuery);

	  	if ($checkResult->num_rows > 0) {
				header("location: vote-pending-to-confirm.php");//Check if voter has pending vote already then give warning if there's existing vote already
	  	} else {
	    	$sql = "INSERT INTO clg_pendingvote (`voterName`, `voterID`, `pendingPresident`, `pendingVicePresident`, `pendingSecretary`, `pendingTreasurer`, `pendingCollegeRepresentative`)
			VALUES ('$voterName', '$voterID', '$pendingPresident', '$pendingVicePresident', '$pendingSecretary', '$pendingTreasurer', '$pendingCollegeRep')";
													
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
	  	$pendingCollegeRep = $_POST['clgrepA'];

	  	// Check if a record already exists for the voterID
	  	$checkQuery = "SELECT * FROM clg_pendingvote WHERE voterID = '$voterID'";
	  	$checkResult = $conn->query($checkQuery);

	  	if ($checkResult->num_rows > 0) {
				header("location: vote-pending-to-confirm.php");//Check if voter has pending vote already then give warning if there's existing vote already
	  	} else {
	    	$sql = "INSERT INTO clg_pendingvote (`voterName`, `voterID`, `pendingPresident`, `pendingVicePresident`, `pendingSecretary`, `pendingTreasurer`, `pendingCollegeRepresentative`)
			VALUES ('$voterName', '$voterID', '$pendingPresident', '$pendingVicePresident', '$pendingSecretary', '$pendingTreasurer', '$pendingCollegeRep')";
													
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
	  	$pendingCollegeRep = $_POST['clgrepB'];

	  	// Check if a record already exists for the voterID
	  	$checkQuery = "SELECT * FROM clg_pendingvote WHERE voterID = '$voterID'";
	  	$checkResult = $conn->query($checkQuery);

	  	if ($checkResult->num_rows > 0) {
				header("location: vote-pending-to-confirm.php");//Check if voter has pending vote already then give warning if there's existing vote already
	  	} else {
	    	$sql = "INSERT INTO clg_pendingvote (`voterName`, `voterID`, `pendingPresident`, `pendingVicePresident`, `pendingSecretary`, `pendingTreasurer`, `pendingCollegeRepresentative`)
			VALUES ('$voterName', '$voterID', '$pendingPresident', '$pendingVicePresident', '$pendingSecretary', '$pendingTreasurer', '$pendingCollegeRep')";
													
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