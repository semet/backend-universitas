<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'start_date', 'end_date', 'active', 'description'];

    public function semesters()
    {
        return $this->hasMany(Semester::class);
    }
}
