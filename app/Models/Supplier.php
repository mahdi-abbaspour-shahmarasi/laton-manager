<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Supplier extends Model
{
    use LogsActivity;

    protected $fillable=['name', 'phone', 'email', 'web', 'address', 'description'];   

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name', 'phone', 'email', 'web', 'address', 'description']);
    }
}
