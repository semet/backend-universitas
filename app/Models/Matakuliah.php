<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $fillable = ['fakultas_id', 'name', 'sks', 'description'];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function dosens()
    {
        return $this->hasMany(Dosen::class);
    }
}
