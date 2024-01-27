<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use Illuminate\Http\Request;

class BloodGroupController extends Controller
{
    public function index(){
        $bloods = BloodGroup::all();
        return view ('admin.blood', compact('bloods'));
    }

    public function create(){
        return view ('admin.create-blood');
    }

    public function store(Request $request)
    {
        BloodGroup::create([
            'group' => $request->blood
            
         ]); 
        
         return redirect()->route('blood.index')->withStatus('Data Inserted Successfully');
    }

    public function destroy($id){
       BloodGroup::destroy($id);
       return redirect()->route('blood.index')->withStatus('Data Deleted Successfully');



    }
}
