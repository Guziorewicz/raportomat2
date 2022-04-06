<?php

namespace App\Models;
//namespace resources\views\Raporty;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    public $table = "raport";
    use HasFactory;
    public function Lista()
    {
        return $this->hasMany('App\Models\Lista'); 
    }
/*
   protected $fillable = [
    'Report_ID' ,
    'Call_time' ,
    'Caller_ID' ,
    'Destination' ,
    'Status' ,
    'Ringing' ,
    'Talking' ,
    'Totals' ,
    'Cost' ,
    'Reason' ,
    'Play' 
   ];

*/
}
