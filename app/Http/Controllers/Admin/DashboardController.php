<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sections;
use App\Models\Machines;
use App\Http\Controllers\Admin\Session;


use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered(){
        $users = User::all();
        return view('admin.register')->with('users', $users);
    }
    public function registeredit(Request $request, $id){
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users', $users);
    }

    public function registerupdate(Request $request, $id){
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/role-register')->with('status', 'Your data is updated');
        
    }
    public function store(){
        
        return view('admin.store');
    }
    public function generalstore(){
        
        return view('admin.general-store');
    }
    public function yarnstore(){
        
        return view('admin.yarn-store');
    }
    public function knittinginspection(){
        $machines = Machines::with('sections')->get();
        $sections1 = Sections::all();
         /* echo '<pre>';
        print_r($machines);
        echo '</pre>';
        die();  */
        return view('admin.knitting-inspection', compact('machines', 'sections1'));
    }
    
    public function knittingquality(){
        
        return view('admin.knitting-quality');
    }
    
    public function knitting(){
        $sections = Sections::all();
        
        return view('admin.knitting')->with('sections', $sections);
    }
    public function linking(){
        
        return view('admin.linking');
    }
    public function mending(){
        
        return view('admin.mending');
    
    }
    public function savesections(Request $request){
        
        $sections = new Sections;
        $sections->section_name = $request->input('section_name');
        

        $sections->save();
        //Session::flash('statuscode', 'success');

        return redirect('/knitting')->with('status', 'Data Added for Section');
    
    }
    public function savemachines(Request $request){
        
         $machines = new Machines;
        $machines->machine_name = $request->input('machine_name');
        $machines->brand = $request->input('brand');
        
        
        $machines->section_id = $request->input('sec');
        
        $machines->save();

        return redirect('/knitting-inspection')->with('status', 'Data Added for Machine');
    
    }
    

    public function edit($id){
        $sections = Sections::findorFail($id);
        return view('admin.sections.edit')
        ->with('sections', $sections);
    }

    public function update(Request $request, $id){
        $sections = Sections::findorFail($id);
        $sections->section_name = $request->input('section_name');
        $sections->update();
        

        return redirect('knitting')->with('status', 'Data updated for Section');
        //Session::flash('statuscode', 'info');

    }

    public function delete($id){
        $sections = Sections::findorFail($id);
        $sections->delete();
        //Session::flash('statuscode', 'error');

        return redirect('knitting')->with('status', 'Data deleted for Section');

    }
    public function ope(){
        
        return view('admin.operators');
    
    }
    
    

    
}
        
    
       


