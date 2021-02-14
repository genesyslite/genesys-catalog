<?php

namespace GenesysLite\GenesysCatalog\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethodType extends Model
{
    protected $table = "cat_payment_method_types";
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'active',
        'description',
    ];
}
