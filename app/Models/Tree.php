<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereTitle(mixed $title)
 * @property mixed $title
 * @property int|mixed $government_com
 * @property false|mixed|string $structure
 * @property int|mixed $levels
 */
class Tree extends Model
{
    // use HasFactory;

    public $fillable = ['title','parent_id','id', 'status', 'added_by','structure','levels','government_com','maktab_com','naseeha_com'];

    public function childs() {
        return $this->hasMany(Tree::class,'parent_id','id')->orderBy('id', 'asc');
    }
    public function parent()
    {
        return $this->belongsTo(Tree::class);
    }

    public function ancestors()
    {
        $ancestors = collect([]);

        $parent = $this->parent;

        while ($parent) {
            $ancestors->push($parent);
            $parent = $parent->parent;
        }

        return $ancestors;
    }

    public function children()
    {
        return $this->hasMany(Tree::class, 'parent_id','id');
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
        return $this->hasMany('App\Models\Comment','tree_id','id') ;
    }

}
