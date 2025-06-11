<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoUser extends Model
{
    protected $table = 'promo_user';
    protected $primaryKey = 'id_promo_user';

    protected $fillable = [
        'id_user',
        'id_promo',
        'tgl_dikirim',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function promo()
    {
        return $this->belongsTo(Promo::class, 'id_promo');
    }
}
