<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahol extends Model
{
    use HasFactory;
    public $fillable = ['sunana','kehalwana','dekhana','mashq','batana','sikhana','adat','samjhana','parhana'];

    public function tree() {
        return $this->belongsTo('App\Models\Tree','id','id');
    }

}
