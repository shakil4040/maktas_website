<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yaad extends Model
{
    // use HasFactory;

    public $fillable = ['id','yad_dehani','kitni_takrar','revision','ahwal','shaz','hawala'];

    public function tree() {
        return $this->belongsTo(Tree::class);
    }
}
