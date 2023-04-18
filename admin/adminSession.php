<?php 
	
    include_once '../adminLoginProcess.php';
    $user = new User();

    $voterID = $_SESSION['adminID'];

    if (!$user->get_session()){
       header("location: ../adminLogin.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location: ../adminLogin.php");
    }
    
?>

