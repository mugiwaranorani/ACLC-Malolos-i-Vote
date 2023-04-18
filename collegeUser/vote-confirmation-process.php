<?php	
  include '../dbconn.php';
  
  // reset button start
  if (isset($_POST['resetBtn'])) {
    $voterName = $_POST['vname'];

    $sql = "DELETE FROM clg_pendingvote WHERE voterName = '$voterName'";
                      
    if ($conn->query($sql) === TRUE) {
      header("location: vote.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
      
    $conn->close();

  }
  
  // confirm button start
  if (isset($_POST['confirmBtn'])) {
    $voterName = $_POST['vname'];
    $voterID = $_POST['vid'];
    $pendingPresident = $_POST['president'];
    $pendingVicePresident = $_POST['vpresident'];
    $pendingSecretary = $_POST['secretary'];
    $pendingTreasurer = $_POST['treasurer'];
    $pendingCollegeRep = $_POST['collegerep'];

    // Check if the voter has already voted
    $existingVoteQuery = "SELECT * FROM clg_confirmedvote WHERE voterName = '$voterName' LIMIT 1";
    $existingVoteResult = $conn->query($existingVoteQuery);

    if ($existingVoteResult->num_rows > 0) {
      //Check if voter has voted already then give warning if there's existing vote already
      header("location: vote-warning.php");
    } else {
      // Update each candidate's vote count individually
      $query = "UPDATE clg_candidates SET voteCount = voteCount + 1 WHERE candidateID IN ('$pendingPresident', '$pendingVicePresident', '$pendingSecretary', '$pendingTreasurer', '$pendingCollegeRep')";

      if ($conn->query($query)) {
        $confirmedPresident = $_POST['president'];
        $confirmedVicePresident = $_POST['vpresident'];
        $confirmedSecretary = $_POST['secretary'];
        $confirmedTreasurer = $_POST['treasurer'];
        $confirmedCollegeRep = $_POST['collegerep'];

        $sql = "INSERT INTO clg_confirmedvote (`voterName`, `voterID`, `confirmedPresident`, `confirmedVicePresident`, `confirmedSecretary`, `confirmedTreasurer`, `confirmedCollegeRepresentative`)
                VALUES ('$voterName', '$voterID', '$confirmedPresident', '$confirmedVicePresident', '$confirmedSecretary', '$confirmedTreasurer', '$confirmedCollegeRep')";

        if ($conn->query($sql)) {
          $updateSql = "UPDATE clg_voter SET voteStatus = 'Voted' WHERE voterID = '$voterID'";
          
          if ($conn->query($updateSql) === TRUE) {
            header("location: vote-receipt.php");
            exit;
          } else {
            echo "Error updating voter status: " . $conn->error;
          }
        } else {
          echo "Error inserting confirmed vote: " . $conn->error;
        }
      } else {
        echo "Error updating vote count: " . $conn->error;
      }
    }

    $conn->close();
  }
?>