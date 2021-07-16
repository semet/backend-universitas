<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dekan extends Model
{
    use HasFactory;
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
}
