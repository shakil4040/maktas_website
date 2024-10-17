<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $abrar_id
 * @property mixed $asif_id
 * @property int|mixed $age
 * @property mixed $age_sr
 * @property int|mixed $course_no
 * @property mixed $detail
 * @method static whereTreeId($id)
 */
class Detail extends Model
{
    public $fillable = ['id','abrar_id','asif_id','age','age_sr','course_no','detail'];

    public function tree() {
        return $this->belongsTo(Tree::class,'tree_id','id');
    }
}
