<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class,'blood_group_id');
    }

    public function division()
    {
        return $this->belongsTo(Divison::class,'division_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class,'district_id');
    }

    public function upazila()
    {
        return $this->belongsTo(Upazilla::class,'upazila_id');
    }

    public function post_office()
    {
        return $this->belongsTo(Upazilla::class,'post_office_id');
    }
}
