<?php

namespace App\Http\Controllers;

use App\Models\Divison;
use Illuminate\Http\Request;

class DivisonController extends Controller
{
    public function divison(){

        $divisons = Divison::all();

      
         return view ('admin.divison', compact('divisons'));
    }

    public function create(){
        return view ('admin.create-divison');
    }

    public function store(Request $request)
    {
        Divison::create([
            'name' => $request->name
            
         ]); 
        
         return redirect()->route('divison.index')->withStatus('Data Inserted Successfully');
    }

    public function destroy($id){
       Divison::destroy($id);
       return redirect()->route('divison.index')->withStatus('Data Deleted Successfully');



    }
}
