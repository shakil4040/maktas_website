<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Tree;
use Illuminate\Database\Eloquent\Model;

class Tafseer extends Model
{
    // use HasFactory;
    protected $guarded = [];

    public function tree() {
        return $this->belongsTo(Tree::class);
    }
}
