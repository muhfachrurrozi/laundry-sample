<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayar extends Model
{
    use HasFactory;

    protected $table = "bayar";
    protected  $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ['proses_id','total_bayar'];
    public $timestamps = true;

    public function proses()
    {
        return $this->belongsTo(Proses::class);
    }
}
