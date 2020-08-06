<?php


namespace App\Http\Repositories;


use App\City;

class CityRepository
{
    protected $city;

    public function __construct(City $city)
    {
        $this->city=$city;
    }

    public function getAll()
    {
        return $this->city->all();
    }

    public function findById($id)
    {
        return $this->city->findOrFail($id);
    }
}
