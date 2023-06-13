<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;


    protected $primaryKey = 'zid';

    protected $table='opodt';
    protected $guarded=['id'];
//    protected $fillable = ['xemp', 'xsp', 'xdate', 'xwh', 'zid', 'xrow'];

    public function customers()
    {
        return $this->hasMany(Member::class);
    }
    public  function saleStore()
    {
        return $this->hasMany(SaleOrder::class);
    }

}
