<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Tool extends Model
{
    use LogsActivity;

    protected $fillable=['name',  'brand_id', 'model', 'unit_id', 'thumbnail', 'description'];

    public function brand():BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function unit():BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function suppliers():BelongsToMany
    {
        return $this->belongsToMany(Supplier::class);
    }


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name',  'brand_id', 'model', 'unit_id', 'thumbnail', 'description']);
    }
}