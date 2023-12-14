<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalysisHistory extends Model
{
    use HasFactory;

    public $incrementing = false;

    public $timestamps = false;

    public function characteristic()
    {
        return $this->belongsTo(Characteristic::class);
    }
}
