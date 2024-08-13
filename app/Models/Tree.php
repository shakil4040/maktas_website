<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    // use HasFactory;

    public $fillable = ['title','parent_id','id','sr', 'status', 'added_by'];

    public function childs() {
        return $this->hasMany(Tree::class,'parent_id','sr')->orderBy('sr', 'asc');
    }
    public function parent()
    {
        return $this->belongsTo(Tree::class, 'parent_id','sr');
    }

    public function children()
    {
        return $this->hasMany(Tree::class, 'parent_id','sr');
    }
    public function detail() {
        return $this->hasOne('App\Models\Detail','id','id');
    }

    public function easy() {
        return $this->hasOne('App\Models\Easy','id','id');
    }

    public function yaad() {
        return $this->hasOne('App\Models\Yaad','id','id');
    }
    public function mahol() {
        return $this->hasOne('App\Models\Mahol','id','id');
    }
    public function tafseer() {
        return $this->hasOne('App\Models\Tafseer','id','id');
    }
    public function comments() {
        return $this->hasMany('App\Models\Comment','tree_id','sr') ;
    }

}
