<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function upazila()
    {
        return $this->hasOne(Upazila::class, 'id', 'upazila_id');
    }

    public function district()
    {
        return $this->hasOne(District::class, 'id', 'district_id');
    }
}
