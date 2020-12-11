<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pascode extends Model
{
    protected $fillable = ['user_id', 'pascode', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
