<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;
    /*public $table ="Modules";
    public function Relations()
    {
        return $this->belongsToMany('App\Models\Relations');
    }*/


    protected $fillable = [
        'id',
        'name',
        'description'
    ];
}
