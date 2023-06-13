<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='caitem';
    protected $guarded=['id'];

    public function customers()
    {
        return $this->hasMany(Member::class);
    }
    public  function saleStore()
    {
        return $this->hasMany(SaleOrder::class);
    }


}
