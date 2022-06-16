<?php

namespace App\Http\Models;

use Carbon\Carbon;
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

    protected $dates = [
        'date'
    ];

    public function getDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value, 'UTC')->setTimezone('Europe/Paris')->format('d/m/Y H:i');
    }
}
