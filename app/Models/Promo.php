<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promo';
    protected $primaryKey = 'id_promo';

    protected $fillable = [
        'id_admin',
        'judul',
        'deskripsi',
        'tgl_mulai',
        'tgl_selesai',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'id_admin');
    }

    public function promoUsers()
    {
        return $this->hasMany(PromoUser::class, 'id_promo');
    }
}