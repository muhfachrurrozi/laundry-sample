<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = "statuses";
    protected  $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ['id','name_status'];
    public $timestamps = true;


    public function proses()
    {
        return $this->hasMany(Proses::class);
    }

}