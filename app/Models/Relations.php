<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relations extends Model
{
    use HasFactory;
    /*public $table ="relacje";
    public function Modules()
    {
        return $this->belongsToMany('App\Models\Modules');
    }
    public function User()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function Types()
    {
        return $this->belongsToMany('App\Models\Types');
    }*/

    protected $fillable = [
        'id',
        'id_modul',
        'id_user',
        'id_type'
    ];
}
