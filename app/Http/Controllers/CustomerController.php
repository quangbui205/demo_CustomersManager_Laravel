<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Http\Services\CityService;
use App\Http\Services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;
    protected $cityService;
    public function __construct(CustomerService $customerService, CityService $cityService)
    {
        $this->customerService=$customerService;
        $this->cityService=$cityService;
    }

    public function index()
    {
        //hiển thị danh sách khách hàng
        $customers = $this->customerService->getAll();
        $cities = $this->cityService->getAll();
        return view('customer.index',compact('customers','cities'));
    }

    public function create()
    {
        //Hiển thị form tạo mới khách hàng
        $cities = $this->cityService->getAll();
        return view('customer.add',compact('cities'));
    }

    public function store(Request $request)
    {
        //Thực hiện thêm mới khách hàng
        $this->customerService->store($request);
        toastr()->success('Thêm Mới Thành Công');
        return redirect()->route('customer.index');
    }

    public function edit($id)
    {
        //Hiển thị form và thông tin khách hàng cần sửa
        $customer= $this->customerService->findById($id);
        $cities = $this->cityService->getAll();
        return view('customer.edit',compact('customer','cities'));
    }

    public function update(Request $request, $id)
    {
        //Thực hiện sửa thông tin khách hàng
        $customer = $this->customerService->findById($id);
        $this->customerService->update($customer,$request);
        toastr()->success('Upload Success!');
        return redirect()->route('customer.index');
    }

    public function destroy($id)
    {
        //Xóa Khách hàng
        $customer = $this->customerService->findById($id);
        $this->customerService->delete($customer);
        return redirect()->route('customer.index');
    }

    public function findByCity(Request $request)
    {
        $cityId = $request->city_id;
        $customers = Customers::where('city_id',$cityId)->paginate(10);
        $cities = $this->cityService->getAll();
        return view('customer.index',compact('customers','cities'));
    }
}
