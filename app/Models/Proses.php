<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proses extends Model
{
    use HasFactory;


    protected $table = "proses";
    protected  $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['status_id','user_id','jasa_id','nota','jumlah','total'];
    public $timestamps = true;

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jasa()
    {
        return $this->belongsTo(Jasa::class);
    }

    public function bayar()
    {
        return $this->hasMany(Bayar::class);
    }
}