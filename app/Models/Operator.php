<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class Operator extends Model
{
    use LogsActivity;

    protected $fillable=['name',  'family', 'phone', 'email', 'token', 'thumbnail', 'status', 'login_status','station_id'];
    
    public function station():BelongsTo
    {
        return $this->belongsTo(Station::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name',  'family', 'phone', 'email', 'token', 'thumbnail', 'status', 'login_status', 'station_id']);
    }
}