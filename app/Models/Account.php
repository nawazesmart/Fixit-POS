<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends BaseModel
{
    protected $primaryKey = 'zid';
    use HasFactory;
    protected $table='glheader';
    protected $guarded =['id'];

    public function productReturn()
    {
        return $this->belongsTo(ProductReturnDetails::class);
    }
    public  function quantitys()
    {
        return $this->hasMany(Quantity::class);
    }
    public  function productRetaurndetails()
    {
        return $this->hasMany(ProductReturnDetails::class);
    }
}
