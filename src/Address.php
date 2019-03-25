<?php

namespace App;

class Address
{
    private $street;
    private $suite;
    private $city;
    private $zipcode;
    private $geo;

    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setSuite($suite)
    {
        $this->suite = $suite;
        return $this;
    }

    public function getSuite()
    {
        return $this->suite;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    public function getZipcode()
    {
        return $this->zipcode;
    }

    public function setGeo(Geo $geo)
    {
        $this->geo = $geo;
        return $this;
    }

    public function getGeo()
    {
        return $this->geo;
    }



}