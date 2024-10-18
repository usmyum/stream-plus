<?php

namespace App\Repositories;

use App\Models\PaymentMethod;

class PaymentRepository
{
    /**
     * @param array $paymentDetails
     * @return mixed
     */
    public function create(array $paymentDetails)
    {
        return PaymentMethod::create($paymentDetails);
    }
}
