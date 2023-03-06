<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timecard extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
