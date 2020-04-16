<?php

namespace App\Http\Controllers;
use App\Models\Sections; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JoinTableController extends Controller
{
    public function index(){
    $sectionList = Sections::select('section_name')->get();
    return view('admin.test', compact('sectionList'));
    }
    
}
