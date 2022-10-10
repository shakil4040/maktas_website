<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    // use HasFactory;

    public $fillable = ['id','tree_id','abrar_id','asif_id','age','age_sr','course_no','detail'];

    public function tree() {
        return $this->belongsTo(Tree::class);
    }
}
