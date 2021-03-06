<?php

namespace GetCandy\Api\Http\Transformers\Fractal\Payments;

use GetCandy\Api\Http\Transformers\Fractal\BaseTransformer;
use GetCandy\Api\Payments\Models\PaymentType;

class PaymentTypeTransformer extends BaseTransformer
{
    public function transform(PaymentType $type)
    {
        return [
            'id' => $type->encodedId(),
            'name' => $type->name,
            'driver' => $type->driver
        ];
    }
}
