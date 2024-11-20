<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Suppliers extends Model
{
    use HasFactory;

    use LogsActivity;

    protected static $logAttributes = ['name', 'address', 'phone'];
    protected static $logName = 'Suppliers';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'address', 'phone']);
    }

}
