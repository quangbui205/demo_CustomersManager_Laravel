<?php


namespace App\Http\Services;


use App\City;
use App\Http\Repositories\CityRepository;

class CityService
{
    protected $cityRepo;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepo=$cityRepository;
    }

    public function getAll()
    {
        return $this->cityRepo->getAll();
    }

    public function findbyId($id)
    {
        return $this->cityRepo->findById($id);
    }

    public function store($request)
    {
        $city = new City();
        $city->id = $request->id;
        $city->name = $request->name;
        $this->cityRepo->save($city);
    }

    public function update($city, $request)
    {
        $city->name = $request->name;
        $this->cityRepo->save($city);
    }

    public function delete($city)
    {
        $this->cityRepo->delete($city);
    }

    public function getAllData()
    {
        return $this->cityRepo->getAllData();
    }
}
