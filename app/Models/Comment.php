<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = ['id','user_id','tree_id','comment'];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function tree() {
        return $this->belongsTo('App\Models\Tree','tree_id','sr');
    }
}
