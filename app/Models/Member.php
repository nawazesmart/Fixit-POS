<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'cacus';


    public static $requ;


    public  static function CustomerCreateorUpdate($request)
    {
        self::$requ= new Member();
        self::$requ->zid = $request->zid;
        self::$requ->xshort = $request->xshort;
        self::$requ->xorg = $request->xorg;
        self::$requ->xgcus = $request->xgcus;
        self::$requ->xmobile = $request->xmobile;
        self::$requ->xadd1 = $request->xadd1;
        self::$requ->xadd2 = $request->xadd2;
        self::$requ->xzip = $request->xzip;
        self::$requ->xcountry = $request->xcountry;
        self::$requ->save();




    }

    public  function product()
    {
        return $this->hasMany(Product::class);
    }

    public function saleStore()
    {
        return $this->hasMany(SaleOrder::class);
    }

}
