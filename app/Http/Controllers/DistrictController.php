<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Divison;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function district(){
        $districts = District::all();
        return view ('admin.district',compact('districts'));
    }

    public function create(){
        $divisons = Divison::all();
        return view ('admin.create-district',compact('divisons'));
    }

    public function store(Request $request)
    {
        District::create([
            'division_id' => $request->divison_id,
            'name' => $request->district,
        ]);
        return redirect()->route('district.index')->withStatus('Data Inserted Successfully');
    }

    public function destroy($id){
        District::destroy($id);
        return redirect()->route('district.index')->withStatus('Data Deleted Successfully');
 
 
 
     }
}
