<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacteristicRule extends Model
{
    use HasFactory;

    protected $casts = [
        'mb' => 'float',
        'md' => 'float'
    ];

    public $timestamps = false;

    public function characteristic()
    {
        return $this->belongsTo(Characteristic::class);
    }

    public function questionaire()
    {
        return $this->belongsTo(Questionaire::class);
    }
}
