<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'unite',
        'price',
        'quantity',
    ];
    public function Catagory1s()
    {
        return $this->belongsTo(Catagory1::class);
    }
}
