<?php
include 'collegeSession.php';
include '../dbconn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $oldPassword = $_POST['oldpass'];
    $newPassword = $_POST['newpass'];
    $confirmPassword = $_POST['confirmpass'];

    $userId = $_SESSION['voterID'];
    $query = "SELECT vpass FROM clg_voter WHERE voterID = $userId";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        // Query execution error
        echo json_encode(['status' => 'error', 'message' => 'Failed to retrieve the current password.']);
        exit;
    }

    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        // User ID not found
        echo json_encode(['status' => 'error', 'message' => 'User ID not found.']);
        exit;
    }

    $currentPassword = $row['vpass'];

    if ($oldPassword === $currentPassword && $newPassword === $confirmPassword) {
        $updateQuery = "UPDATE clg_voter SET vpass = '$newPassword' WHERE voterID = $userId";
        mysqli_query($conn, $updateQuery);

        // Password changed successfully
        echo json_encode(['status' => 'success', 'message' => 'Password successfully changed. Please restart/refresh this page if you wish to change your password again, thank you.']);
        exit;
    } else {
        // Incorrect old password or mismatched new passwords
        echo json_encode(['status' => 'danger', 'message' => 'Incorrect old password. Please restart/refresh this page if you wish to change your password again, thank you.']);
        exit;
    }
}
?>