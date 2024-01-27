<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use App\Models\District;
use App\Models\Divison;
use App\Models\PostOffice;
use App\Models\Profile;
use App\Models\Upazilla;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create(){
        $user = auth()->user();
        $divisons = Divison::all();
        $districts = District::all();
        $upazillas = Upazilla::all();
        $post_offices = PostOffice::all();
        $blood_groups = BloodGroup::all();

        return view('user.create-profile', compact('user','divisons','districts','upazillas','post_offices','blood_groups'));
    }


    public function store(Request $request)
    {
        $user = auth()->user();
    
        Profile::create([
            'gender' => $request->gender,
            'age' => $request->age,
            'dob' => $request->dob,
            'village' => $request->village,
            'last_donate' => $request->last_donate,
            'donation_count' => $request->donation_count,
            'user_id' => $user->id,
            'blood_group_id' => $request->blood_group,
            'division_id' => $request->division,
            'district_id' => $request->district,
            'upazila_id' => $request->upazilla,
            'post_office_id' => $request->post_office,
        ]);
    
       
            // return redirect()->route('upazilla.index')->withStatus('Data Inserted Successfully');
        
           
    }
    
}
