<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'date',
        'message'
    ];

    protected $casts = [
        'date' => 'datetime:Y-m-d H:i:s',
    ];

}
