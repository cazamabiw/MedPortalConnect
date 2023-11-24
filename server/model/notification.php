<?php
/**
 * Description of notification
 *
 * @author Pawinee Mahantamak
 */
class Notification {
    private $id;
    private $action;
    private $iconurl;
    private $message;
    private $notificationdate;
    private $userid;

    public function __construct($id, $action, $iconurl, $message, $notificationdate, $userid) {
        $this->setId($id);
        $this->setAction($action);
        $this->setIconUrl($iconurl);
        $this->setMessage($message);
        $this->setNotificationDate($notificationdate);
        $this->setUserId($userid);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAction() {
        return $this->action;
    }

    public function setAction($action) {
        $this->action = $action;
    }

    public function getIconUrl() {
        return $this->iconurl;
    }

    public function setIconUrl($iconurl) {
        $this->iconurl = $iconurl;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function getNotificationDate() {
        return $this->notificationdate;
    }

    public function setNotificationDate($notificationdate) {
        $this->notificationdate = $notificationdate;
    }

    public function getUserId() {
        return $this->userid;
    }

    public function setUserId($userid) {
        $this->userid = $userid;
    }
}
?>
