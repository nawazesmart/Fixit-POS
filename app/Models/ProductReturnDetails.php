<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReturnDetails extends BaseModel
{
    use HasFactory;
    protected $table = 'imtemptdt';
    protected $guarded=['id'];
    protected $primaryKey = 'zid';


    public function productReturn()
    {
        return $this->hasMany(ProductReturn::class);
    }
    public  function quantitys()
    {
        return $this->hasMany(Quantity::class);
    }
}
