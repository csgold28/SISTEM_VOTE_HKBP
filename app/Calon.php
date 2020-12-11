<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    protected $fillable = ['user_id', 'name', 'foto', 'alamat', 'kontak', 'visi_misi', 'nomor_urut'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function peserta()
    {
        return $this->hasMany(Peserta::class);
    }

    public function monitoring()
    {
        return $this->hasOne(Monitoring::class);
    }

    public function done()
    {
        return $this->hasOne(Done::class);
    }
}
