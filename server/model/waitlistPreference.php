<?php

/**
 * Description of waitlistPreference
 *
 * @author Pawinee Mahantamak
 */
class WaitlistPreference
{
    private $id;
    private $locationid;
    private $userid;
    private $locationname;
    public function __construct($id, $locationid, $locationname, $userid)
    {
        $this->setId($id);
        $this->setLocationId($locationid);
        $this->setUserId($userid);
        $this->setLocationName($locationname);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLocationId()
    {
        return $this->locationid;
    }

    public function setLocationId($locationid)
    {
        $this->locationid = $locationid;
    }

    public function getuserId()
    {
        return $this->userid;
    }

    public function setUserId($userid)
    {
        $this->userid = $userid;
    }

    public function getLocationName()
    {
        return $this->locationname;
    }

    public function setLocationName($locationname)
    {
        $this->locationname = $locationname;
    }
}
?>