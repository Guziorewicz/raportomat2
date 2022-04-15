<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;
    /*public $table = "raport";
    public function Lista()
    {
        return $this->belongsTo('App\Models\Raport'); 
    }*/
    protected $fillable = [
        'id',
        'nazwa',
        'zakres'
    ];
}
