<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function danhmucbaiviet()
    {
        return $this->hasOne(DanhMucBaiViet::class, 'id', 'id_danhmuc');
    }
    public function tacgia()
    {
        return $this->hasOne(User::class, 'id', 'id_tacgia');
    }
}
