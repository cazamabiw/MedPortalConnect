<?php
/**
 * Description of delete_user_waitlist
 *
 * @author Pawinee Mahantamak
 */
session_start();
require_once('userWaitlistDAO.php');

if (isset($_GET['userWaitlistId']) && is_numeric($_GET['userWaitlistId'])) {
    $userWaitlistDAO = new UserWaitlistDAO();
    $userWaitlistId = $_GET['userWaitlistId'];
    $success = $userWaitlistDAO->deleteUserWaitlist($userWaitlistId);

    if ($success) {
        header('Location: ../pages/waitlist.php');
    } else {
        header('Location: ../pages/waitlist.php');
    }
} else {
    header('Location: ../pages/waitlist.php');
}
?>