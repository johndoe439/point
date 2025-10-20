<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planshistory extends Model
{
    //
       protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',

    ];
//
    //
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }
}
