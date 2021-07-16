<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Dosen extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'fakultas_id',
        'employee_number',
        'username',
        'name',
        'email',
        'password',
        'active'
    ];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
}
