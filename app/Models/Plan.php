<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
     protected $guarded = [];

    // protected $table = 'investmentplans';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plans()
    {
        return $this->hasMany(Plan::class, 'plan_id');
    }
}
