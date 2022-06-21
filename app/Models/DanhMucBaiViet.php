<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucBaiViet extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function baiviet()
    {
        return $this->hasMany(BaiViet::class, 'id_danhmuc', 'id');
    }
}
