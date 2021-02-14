<?php

namespace GenesysLite\GenesysCatalog\Models;

use Illuminate\Database\Eloquent\Model;

class CardBrand extends Model
{
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'description',
        'id',
    ];

}
