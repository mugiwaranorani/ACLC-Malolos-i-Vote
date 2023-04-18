<?php 
	
    include_once '../shsLoginProcess.php';
    $user = new User();

    $voterID = $_SESSION['voterID'];

    if (!$user->get_session()){
       header("location: ../shsLogin.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location: ../shsLogin.php");
    }
    
?>

