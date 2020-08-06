<?php


namespace App\Http\Services;


use App\Customers;
use App\Http\Repositories\CustomerRepository;

class CustomerService
{
    protected $customerRepo;
    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepo=$customerRepository;
    }

    public function getAll()
    {
        return $this->customerRepo->getAll();
    }

    public function findById($id)
    {
        return $this->customerRepo->findById($id);
    }

    public function store($request)
    {
        $customer = new Customers();
        $customer->id = $request->id;
        $customer->name = $request->name;
        $customer->dob = $request->birthday;
        $customer->email = $request->email;
        $customer->city_id = $request->city_id;
        $this->customerRepo->save($customer);
    }

    public function update($customer, $request)
    {
        $customer->name = $request->name;
        $customer->dob = $request->birthday;
        $customer->email = $request -> email;
        $this->customerRepo->save($customer);
    }

    public function delete($customer)
    {
        $this->customerRepo->delete($customer);
    }
}
