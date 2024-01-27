<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Divison;
use App\Models\Upazilla;
use Illuminate\Http\Request;

class UpazillaController extends Controller
{
    public function upazilla(){
        $upazillas = Upazilla::all();
        return view ('admin.upazilla',compact('upazillas'));
    }

    

    public function create(){
        $districts = District::all();
        $divisons = Divison::all();
       
        
        return view ('admin.create-upazilla', compact('districts','divisons'));
    }

    public function store(Request $request)
    {
        Upazilla::create([
            'district_id' => $request->district_id,
            'division_id' => $request->divison_id,
            'name' => $request->upazilla,
        ]);
        return redirect()->route('upazilla.index')->withStatus('Data Inserted Successfully');
    }

    public function destroy($id){
        Upazilla::destroy($id);
        return redirect()->route('upazilla.index')->withStatus('Data Deleted Successfully');
 
 
 
     }

    
}
