<?php
/**
 * Description of userwaitlist
 *
 * @author Pawinee Mahantamak
 */
class UserWaitlist {
    private $id;
    private $providerId;
    private $position;
    private $status;
    private $estimateWaitTime;
    private $userId;

    public function __construct($id, $providerId, $position, $status, $estimateWaitTime, $userId) {
        $this->setId($id);
        $this->setProviderId($providerId);
        $this->setPosition($position);
        $this->setStatus($status);
        $this->setEstimateWaitTime($estimateWaitTime);
        $this->setUserId($userId);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getProviderId() {
        return $this->providerId;
    }

    public function setProviderId($providerId) {
        $this->providerId = $providerId;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getEstimateWaitTime() {
        return $this->estimateWaitTime;
    }

    public function setEstimateWaitTime($estimateWaitTime) {
        $this->estimateWaitTime = $estimateWaitTime;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }
}

?>
