<?php
/**
 * Description of add_user_waitlist
 *
 * @author Pawinee Mahantamak
 */
session_start();
require_once('userWaitlistDAO.php');

if (isset($_GET['providerId']) && is_numeric($_GET['providerId'])) {
    $userWaitlistDAO = new UserWaitlistDAO();
    $providerId = $_GET['providerId'];
    $userId = $_GET['userId'];
    $success = $userWaitlistDAO->addeUserWaitlist($providerId, $userId);

    if ($success) {
        header('Location: ../pages/waitlist.php');
    } else {
        header('Location: ../pages/waitlist.php');
    }
} else {
    header('Location: ../pages/waitlist.php');
}
?>
