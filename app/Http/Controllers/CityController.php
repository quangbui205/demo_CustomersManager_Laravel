<?php

namespace App\Http\Controllers;

use App\Http\Services\CityService;
use Illuminate\Http\Request;

class CityController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService= $cityService;
    }

    public function index()
    {
        $cities = $this->cityService->getAll();
        return view('city.index',compact('cities'));
    }

    public function create()
    {
        return view('city.add');
    }

    public function store(Request $request)
    {
        $this->cityService->store($request);
        toastr()->success('Thêm Mới Thành Công!');
        return redirect()->route('city.index');
    }

    public function edit($id)
    {
        $city = $this->cityService->findbyId($id);
        return view('city.edit',compact('city'));
    }

    public function update(Request $request, $id)
    {
        $city = $this->cityService->findbyId($id);
        $this->cityService->update($city, $request);
        toastr()->success('Update Success!');
        return redirect()->route('city.index');
    }

    public function destroy($id)
    {
        $city = $this->cityService->findbyId($id);
        $this->cityService->delete($city);
        return redirect()->route('city.index');
    }
}
