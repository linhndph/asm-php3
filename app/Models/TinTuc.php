<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;
    protected $table = 'tintucs';

    protected $fillable = [
        'tieuDe',
        'noiDung',
        'moTa',
        'anh',
        'id_danh_muc',
        'luotXem',
        'user_id'
    ];
    public function danhmuc()
    {
        return $this->belongsTo(DanhMuc::class);
    }
}
