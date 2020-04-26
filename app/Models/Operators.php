<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operators extends Model
{
    protected $table = 'operators';
    //protected $fillable = ['name', 'section_id', 'machine_id'];
    public function sections(){
        
        return $this->belongsTo('App\Models\Sections', 'section_id');
    }
    public function machines(){
        
        return $this->belongsTo('App\Models\Machines', 'machine_id');
    }
    
    
}
