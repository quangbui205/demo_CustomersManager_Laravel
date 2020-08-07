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
        return $this->city->paginate(10);
    }

    public function findById($id)
    {
        return $this->city->findOrFail($id);
    }

    public function save($city)
    {
        $city->save();
    }

    public function delete($city)
    {
        $city->delete();
    }

    public function getAllData()
    {
        return $this->city->all();
    }
}
