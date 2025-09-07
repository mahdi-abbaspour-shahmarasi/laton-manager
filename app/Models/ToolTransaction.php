<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class ToolTransaction extends Model
{
    use LogsActivity;

    protected $fillable=['transaction_id', 'tool_id', 'station_id', 'operator_id', 'count', 'transaction_date_time', 'description'];
    protected $table = 'tool_transaction';

    public function transaction():BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }

    public function tool():BelongsTo
    {
        return $this->belongsTo(Tool::class);
    }

    public function station():BelongsTo
    {
        return $this->belongsTo(Station::class);
    }

    public function operator():BelongsTo
    {
        return $this->belongsTo(Operator::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['transaction_id', 'tool_id', 'station_id', 'operator_id', 'count', 'transaction_date_time', 'description']);
    }
}
