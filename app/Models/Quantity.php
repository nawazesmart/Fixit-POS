<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quantity extends BaseModel
{
    use HasFactory;
    protected $table = 'imtrn';
    protected $guarded=['id'];



}
