<?php

namespace App\Http\Controllers\Admin;
use App\Models\Operators;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperatorsController extends Controller
{
    public function operators(){
        $operators = Operators::all();
        return view('admin.operators')->with('operators', $operators);
    }
    public function saveoperators(Request $request){
        $operators = new Operators;
        $operators->name = $request->input('name');
        $operators->section = $request->input('section');
        $operators->machine = $request->input('machine');

        $operators->save();

        return redirect('/operators')->with('status', 'Data Added for Operator');
    }
}
