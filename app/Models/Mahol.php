<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $sunana
 * @property mixed $kehalwana
 * @property mixed $dekhana
 * @property mixed $mashq
 * @property mixed $batana
 * @property mixed $sikhana
 * @property mixed $adat
 * @property mixed $samjhana
 * @property mixed $parhana
 *
 */
class Mahol extends Model
{
    // use HasFactory;
    
    public $fillable = ['sunana','kehalwana','dekhana','mashq','batana','sikhana','adat','samjhana','parhana','status'];

    public function tree() {
        return $this->belongsTo(Tree::class);
    }
}
