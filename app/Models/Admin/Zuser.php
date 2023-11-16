<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zuser extends BaseModel
{
    protected $primaryKey = 'zid';
    use HasFactory;
    protected $table='zxusers';


    protected $fillable = ['xname', 'zemail', 'xpassword','zid','xaccess' ,'xdformat' .'zchanged','xscprefix',
                            'xscexclude','xautoshow','xtooltips','zactive','xsingleses','xaccessloc'];


    protected $guarded=['id'];
}
