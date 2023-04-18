<?php
include 'dbconn.php';
// Retrieve the candidate ID from the query parameter
$candidateId = $_POST['candidateID'];

// Perform the database query to get the updated vote count for the candidate
$query = "SELECT voteCount FROM clg_candidates WHERE candidateID = '$candidateId'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$voteCount = $row['voteCount'];

// Return the updated vote count as the response
echo $voteCount;
echo $candidateId;
?>