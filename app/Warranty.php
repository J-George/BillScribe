<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    protected $fillable = [
        'title', 'category', 'subCategory', 'brand', 'picture',
        'cost','dateOfPurchase','placeOfPurchase','serialNumber',
        'warrantyType','duration','additionalWarranty','additionalDuration',
        'receiptPicture'
    ];
}
