<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'categories_id'];
    
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    use LogsActivity;

    protected static $logAttributes = ['name', 'description', 'price', 'categories_id'];
    protected static $logName = 'item';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'description', 'price', 'categories_id']);
    }
    
    
}
