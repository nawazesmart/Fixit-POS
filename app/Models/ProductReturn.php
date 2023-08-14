<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReturn extends BaseModel
{
    use HasFactory;
    protected $table = 'imtemptrn';
    protected $guarded=['id'];
    protected $primaryKey = 'zid';

    public function productReturn()
    {
        return $this->belongsTo(ProductReturnDetails::class);
    }
    public  function quantitys()
    {
        return $this->hasMany(Quantity::class);
    }

}
