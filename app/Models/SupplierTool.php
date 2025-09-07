<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class SupplierTool extends Model
{
    use LogsActivity;

    protected $fillable=['supplier_id',  'tool_id'];
    protected $table = 'supplier_tool';

    public function supplier():BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function tool():BelongsTo
    {
        return $this->belongsTo(Tool::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['supplier_id',  'tool_id']);
    }
}
