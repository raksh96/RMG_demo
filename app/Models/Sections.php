<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    protected $table = 'sections';
    protected $fillable = ['section_name'];
    public function machine(){
        return $this->belongsTo('App\Machines', 'id');
    }
}
