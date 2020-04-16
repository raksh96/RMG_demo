<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operators extends Model
{
    protected $table = 'operators';
    protected $fillable = ['name', 'section', 'machine'];
}
