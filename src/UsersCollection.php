<?php

namespace App;

class UsersCollection implements \IteratorAggregate
{
    private $users = [];

    public function __construct(array $data = [])
    {
        foreach($data as $item){
            $user = new User;
            $address = new Address;
            $geo = new Geo;
            $company = new Company;
            $geo->setLng($item->address->geo->lng);
            $geo->setLat($item->address->geo->lat);
            $company->setName($item->company->name);
            $company->setCatchPhrase($item->company->catchPhrase);
            $company->setBs($item->company->bs);
            //var_dump($company);die;
            $address->setStreet($item->address->street);
            $address->setSuite($item->address->suite);
            $address->setZipcode($item->address->zipcode);
            $address->setCity($item->address->city);
            $address->setGeo($geo);
            $user->setAddress($address);
            $user->setName($item->name);
            $user->setUserName($item->username);
            $user->setEmail($item->email);
            $user->setId($item->id);
            $user->setWebsite($item->website);
            $user->setPhone($item->phone);
            $user->setCompany($company);
            $this->users[] = $user;
        }
        
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->user);
    }
};