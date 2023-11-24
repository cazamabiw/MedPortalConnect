<?php

/**
 * Description of Location
 *
 * @author Pawinee Mahantamak
 */
class Location
{
    private $id;
    private $locationname;


    public function __construct($id, $locationname)
    {
        $this->setId($id);
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