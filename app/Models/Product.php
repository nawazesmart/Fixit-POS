<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\Jobs\JobName;

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
    public  function Details()
    {
        return $this->hasMany(ProductDetails::class);
    }

//    public  function quantity($request)
//    {
//        $quantity = Quantity::where('xitem', 'LIKE', '%' . $request->search . '%')->where('zid', '100001')->get();
//
//        $result = 0;
//        foreach($quantity as $item){
//            $total  = 0;
//            $total = ($item->xqty) * ($item->xsign);
//            $result  += $total;
//        }
//    }

    public function quantity()
    {
        return $this->hasMany(Quantity::class, 'xitem', 'xitem');
    }

}
