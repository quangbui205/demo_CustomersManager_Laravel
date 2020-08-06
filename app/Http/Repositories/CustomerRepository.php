<?php


namespace App\Http\Repositories;


use App\Customers;

class CustomerRepository
{
    protected $customer;
    public function __construct(Customers $customer)
    {
        $this->customer=$customer;
    }

    public function getAll()
    {
        return $this->customer->paginate(10);
    }

    public function save($customer)
    {
        $customer->save();
    }

    public function findById($id)
    {
        return $this->customer->findOrFail($id);
    }

    public function delete($customer)
    {
        $customer->delete();
    }
}
