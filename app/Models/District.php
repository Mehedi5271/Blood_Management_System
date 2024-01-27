<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function divisons()
    {
        return $this->belongsTo(Divison::class, 'division_id');
    }

    public function upazilas()
    {
        return $this->hasMany(Upazilla::class);
    }

    public function post_offices()
    {
        return $this->hasMany(PostOffice::class);
    }
}
