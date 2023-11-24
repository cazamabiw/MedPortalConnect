<?php
/**
 * Description of provider
 *
 * @author Pawinee Mahantamak
 */
class Provider {
    private $id;
    private $providerName;
    private $locationId;

    public function __construct($id, $providerName, $locationId) {
        $this->setId($id);
        $this->setProviderName($providerName);
        $this->setLocationId($locationId);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getProviderName() {
        return $this->providerName;
    }

    public function setProviderName($providerName) {
        $this->providerName = $providerName;
    }

    public function getLocationId() {
        return $this->locationId;
    }

    public function setLocationId($locationId) {
        $this->locationId = $locationId;
    }
}

?>
