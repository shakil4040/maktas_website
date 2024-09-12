<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $easy
 * @property mixed $mukhatab
 * @property mixed $rafe_ishkal
 * @property mixed $qaida
 * @property mixed $rahe_adal
 * @property mixed $husool
 * @property mixed $tamheed_khas
 * @property mixed $hukam
 * @property mixed $hasiat
 * @property mixed $shoba
 * @property mixed $class
 * @property mixed $jins
 * @property mixed $zamana
 * @property mixed $taleem
 * @property mixed $amli_mashq
 * @property mixed $taluq
 * @property mixed $muharik
 */
class Easy extends Model
{
    // use HasFactory;

    public $fillable = ['id','easy','mukhatab','rafe_ishkal','qaida','rahe_adal','husool','tamheed_khas','area','hukam','hasiat','shoba','class','jins','zamana','taleem','amli_mashq','taluq','muharik'];

    public function tree() {
        return $this->belongsTo(Tree::class);
    }
}
