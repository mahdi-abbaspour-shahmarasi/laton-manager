<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class Station extends Model
{
    use LogsActivity;

    protected $fillable=['name',  'description', 'thumbnail'];   
   
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name',  'description', 'thumbnail']);
    }
}

