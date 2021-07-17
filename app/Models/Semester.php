<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = ['tahun_id', 'name', 'active', 'description'];

    public function fakultas()
    {
        return $this->belongsTo(Tahun::class);
    }
}