<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Category extends Model{
    
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    use LogsActivity;

    protected static $logAttributes = ['name', 'description'];
    protected static $logName = 'category';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'description']);
    }
    
}
