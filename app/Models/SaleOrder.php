<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;

class SaleOrder extends BaseModel
{
    protected $primaryKey = 'zid';

    protected $table='opord';
    protected $guarded=['id'];
//    protected $fillable = ['xemp', 'xsp', 'xdate', 'xwh', 'zid', 'xrow'];
    use HasFactory;

    public  function member()
    {
        return $this->belongsTo(Member::class );
    }
    public  function user()
    {
        return $this->belongsTo(User::class);
    }
    public  function product()
    {
        return $this->belongsTo(Product::class);
    }
    public  function Details()
    {
        return $this->belongsTo(ProductDetails::class);
    }


}
