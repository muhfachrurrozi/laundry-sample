<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;

    protected $table = 'jasas';
    protected $primaryKey = 'id';
    protected $fillable = ['item','servis','paket','kategori','harga'];
    public $timestamps = true;


    public function user()
    {
        return $this->hasMany(User::class);
    }

}
