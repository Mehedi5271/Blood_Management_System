<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostOffice extends Model
{
    use HasFactory;
    protected $guarded = [];

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



}
