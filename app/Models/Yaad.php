<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yaad extends Model
{
    // use HasFactory;

    public $fillable = ['id','yad_dehani','kitni_takrar','revision','ahwal','shaz','hawala','government_ref'];

    public function tree() {
        return $this->belongsTo('App\Models\Tree','id','id');
    }
}
