<?php
/**
 * Description of notificationDAO
 *
 * @author Pawinee Mahantamak
 */
session_start();
require_once('abstractDAO.php');
require_once('../model/notification.php');

class NotificationDAO extends abstractDAO
{

    public function getNotifications()
    {
        $notifications = array();
        $userId =  $_SESSION["user_id"];
        if (!$this->mysqli->connect_errno) {
            $query = 'SELECT * FROM notifications WHERE userid = ?';
            $stmt = $this->mysqli->prepare($query);
            $stmt->bind_param('i', $userId);

            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                $notification = new Notification(
                    $row['id'],
                    $row['action'],
                    $row['iconurl'],
                    $row['message'],
                    $row['notificationdate'],
                    $row['userid']
                );
                $notifications[] = $notification;
            }

            $stmt->close();
        }

        return $notifications;
    }

    public function getNotificationsByAction()
    {
        $notifications = array();
        $userId =  $_SESSION["user_id"];
        if (!$this->mysqli->connect_errno) {
            $query = 'SELECT * FROM notifications WHERE userid = ? and action = "WaitList"';
            $stmt = $this->mysqli->prepare($query);
            $stmt->bind_param('i', $userId);

            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                $notification = new Notification(
                    $row['id'],
                    $row['action'],
                    $row['iconurl'],
                    $row['message'],
                    $row['notificationdate'],
                    $row['userid']
                );
                $notifications[] = $notification;
            }

            $stmt->close();
        }

        return $notifications;
    }

    public function AddNotificationDefault($userId)
    {

        if (!$this->mysqli->connect_errno) {
            $query = 'INSERT INTO notifications (action, iconurl, message, notificationdate, userid) VALUES (?, ?, ?, CURDATE(), ?);';
            $stmt = $this->mysqli->prepare($query);

            $action = 'UserProfileCreation';
            $iconUrl = 'icon_user_profile_creation.png';
            $message1 = 'Congratulations! Your profile has been successfully created.';

            $stmt->bind_param('sssi', $action, $iconUrl, $message1, $userId);


            $stmt->execute();

            if ($stmt->error) {
                return $stmt->error;
            } else {
                return 'Notifications added successfully!';
            }
        } else {
            return 'Could not connect to Database.';
        }
    }
}
?>