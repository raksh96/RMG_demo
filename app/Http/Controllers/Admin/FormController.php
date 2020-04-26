<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function accessoriesinventory(){
        
        return view('admin.accessories-inventory');
    }
}
