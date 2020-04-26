<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machines extends Model
{
    protected $table = 'machines';
    //protected $fillable = ['machine_name', 'brand', 'section_id'];
    //return $this->belongsto Sections::class
    public function sections(){
        //return $this->hasMany('App\Sections');
        return $this->belongsTo('App\Models\Sections', 'section_id');
    }
    public function operators(){
        return $this->hasMany('App\Models\Operators');
    }
    
    
}
