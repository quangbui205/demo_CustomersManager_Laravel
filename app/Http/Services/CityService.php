<?php


namespace App\Http\Services;


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
        $this->cityRepo->getAll();
    }

    public function findbyId($id)
    {
        return $this->cityRepo->findById($id);
    }
}
