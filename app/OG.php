<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OG extends Model
{
    protected $table = 'orientation_groups';
    protected $fillable = [
      "chat_id",
      "name"
    ];
}
