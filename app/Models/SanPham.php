<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function danhmuc()
    {
        return $this->hasOne(DanhMuc::class, 'id', 'id_danhmuc');
    }
}
