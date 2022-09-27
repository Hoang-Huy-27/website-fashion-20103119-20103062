<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_DanhMuc extends Model
{
    protected $table='danh_muc';
    public $timestamps=false;
    use HasFactory;
}
