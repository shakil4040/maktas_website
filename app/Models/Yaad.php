<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $yad_dehani
 * @property mixed $kitni_takrar
 * @property mixed $revision
 * @property mixed $ahwal
 * @property mixed $pasaymanzar
 * @property mixed $result
 * @property mixed $shaz
 * @property mixed $hawala
 * @property mixed $government_ref
 * @method static whereTreeId($id)
 */
class Yaad extends Model
{

    public $fillable = ['id','yad_dehani','kitni_takrar','revision','ahwal','shaz','hawala','government_ref'];

    public function tree() {
        return $this->belongsTo(Tree::class);
    }
}
