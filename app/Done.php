<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Done extends Model
{
    protected $fillable = ['calon_id', 'jumlah_pemilih'];

    public function calon()
    {
        return $this->belongsTo(Calon::class);
    }
}
