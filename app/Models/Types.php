<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;
   /* public $table ="Types";
    public function Relations()
    {
        return $this->belongsToMany('App\Models\Relations');
    }*/
    protected $fillable = [
        'id',
        'type',
        'description'
    ];
}
