<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Idugang lang kini nga linya:
    public $timestamps = false;

    // Siguraduha pud nga naa kini para ma-save ang data:
    protected $fillable = ['name', 'quantity', 'price'];
}