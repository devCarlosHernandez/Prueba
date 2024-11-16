<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Brands extends Model
{
    use HasFactory;

    use LogsActivity;

    protected static $logAttributes = ['name'];
    protected static $logName = 'brands';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name']);
    }

    public function getActivityDescriptionAttribute()
    {
        return 'Marca ' . $this->name;
    }

}
