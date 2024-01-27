<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Divison;
use App\Models\PostOffice;
use App\Models\Upazilla;
use Illuminate\Http\Request;

class PostOfficeController extends Controller
{
    public function post_office(){

        $post_offices = PostOffice::all();
      
         return view ('admin.post_office',compact('post_offices'));
    }

    public function create(){
        $districts = District::all();
        $divisons = Divison::all();
        $upazillas = Upazilla::all();
       
        
        return view ('admin.create-post_office', compact('districts','divisons','upazillas'));
    }

    public function store(Request $request)
    {
        PostOffice::create([
            'upazila_id' => $request->upazilla_id,
            'district_id' => $request->district_id,
            'division_id' => $request->divison_id,
            'name' => $request->post_office,
        ]);
        return redirect()->route('post_office.index')->withStatus('Data Inserted Successfully');
    }
}
