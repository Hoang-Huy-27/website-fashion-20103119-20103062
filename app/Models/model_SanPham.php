<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_SanPham extends Model
{
    protected $table='san_pham';
    public $timestamps=false;
    use HasFactory;
}
