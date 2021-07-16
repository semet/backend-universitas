<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];

    public function dekan()
    {
        return $this->hasOne(Dekan::class);
    } 

    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
