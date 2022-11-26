<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Easy extends Model
{
    // use HasFactory;

    public $fillable = ['id','easy','mukhatab','rafe_ishkal','qaida','rahe_adal','husool','tamheed_khas','area','hukam','hasiat','shoba','class','jins','zamana','taleem','amli_mashq','taluq','muharik'];

    public function tree() {
        return $this->belongsTo(Tree::class);
    }
}
