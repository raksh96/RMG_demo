<?php

namespace App\Http\Controllers\Admin;
use App\Models\Operators;
use App\Models\Sections;
use App\Models\Machines;
use App\Http\Controllers\Admin\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class OperatorsController extends Controller
{
    public function knittingsection(){
        $operators = Operators::with('sections')->get();
        $operators = Operators::with('machines')->get();
        $sections2 = Sections::all();
        $machines1 = Machines::all();
        
        return view('admin.knitting-section', compact('operators', 'machines1', 'sections2'));
        
    }
    
    public function saveoperators(Request $request){
        $operators = new Operators;
        $operators->name = $request->input('operator_name');
        $operators->section_id = $request->input('sec');
        $operators->machine_id = $request->input('mac');

        $operators->save();

        return redirect('/knitting-section')->with('status', 'Data Added for Operator');
    }
}
