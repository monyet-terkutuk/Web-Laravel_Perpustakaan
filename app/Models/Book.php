<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'pengarang', 'status', 'iduser', 'tanggal_pijam', 'tanggal_kembali', 'category_id', 'image', 'deskripsi', 'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
