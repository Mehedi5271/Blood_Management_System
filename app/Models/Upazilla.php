<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazilla extends Model
{
    use HasFactory;

    protected $table = 'upazilla';

    protected $guarded = [];

    public function district()
    {
        return $this->belongsTo(District::class,'district_id');
    }

    public function divisons ()
    {
        return $this->belongsTo(Divison::class,'division_id');
    }

    public function post_offices()
    {
        return $this->hasMany(PostOffice::class);
    }
}
