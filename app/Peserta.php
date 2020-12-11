<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = ['calon_id', 'name', 'pascode'];

    public function calon()
    {
        return $this->belongsTo(Calon::class);
    }
}
