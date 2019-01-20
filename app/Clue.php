<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clue extends Model
{
    protected $fillable = [
        'id',
        'key',
        'clueText',
        'unlocks_id',
    ];

    public function unlocks()
    {
        return $this->hasMany(self::class, 'unlocks_id', 'id');
    }

    public function requires()
    {
        return $this->belongsTo(self::class, 'unlocks_id', 'id');
    }
}
