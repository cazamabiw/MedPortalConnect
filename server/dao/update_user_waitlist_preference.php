<?php
/**
 * Description of update_user_waitlist_preference
 *
 * @author Pawinee Mahantamak
 */
require_once('waitlistPreferenceDAO.php');


if(isset($_GET['locationId']) && is_numeric($_GET['locationId'])) {
    $waitlistPreferenceDAO = new WaitlistPreferenceDAO();
    $locationId = $_GET['locationId'];
    $userId = $_GET['userId'];
    $success = $waitlistPreferenceDAO->updateWaitlistPreference($locationId,$userId);

    if ($success) {
        header('Location: ../pages/waitlist.php');
    } else {
        header('Location: ../pages/waitlist.php');
    }
} else {
    header('Location: ../pages/waitlist.php');
}
?>
