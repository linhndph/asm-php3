<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;
    protected $table = 'danhmucs';

    protected $fillable = [
        'tenDanhMuc',
    ];
    public function tinTucs()
    {
        return $this->hasMany(TinTuc::class);
    }
}
