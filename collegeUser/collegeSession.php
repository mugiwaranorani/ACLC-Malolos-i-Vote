<?php 
	
    include_once '../collegeLoginProcess.php';
    $user = new User();

    $voterID = $_SESSION['voterID'];

    if (!$user->get_session()){
       header("location: ../collegeLogin.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location: ../collegeLogin.php");
    }
    
?>

