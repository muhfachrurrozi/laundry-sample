<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $table = 'tokos';
    protected $primaryKey = 'id';
    protected $fillable = ['name_toko','telepon_toko','alamat_toko','logo_toko'];
    public $timestamps = true;

    public function user()
    {
        return $this->hasMany(User::class);
    }

}
