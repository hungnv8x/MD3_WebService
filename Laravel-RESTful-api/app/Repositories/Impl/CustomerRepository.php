<?php

namespace App\Repositories\Impl;

use App\Models\Customer;
use App\Repositories\Eloquent\EloquentRepository;
use App\Service\CustomerServiceImpl;

class CustomerRepository extends EloquentRepository implements CustomerServiceImpl
{

    public function getModel()
    {
        return Customer::class;
    }
}
