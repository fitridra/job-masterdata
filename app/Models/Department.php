<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['DepartmentName', 'Abbreviation'];

    public function job(){
        return $this->hasMany(Job::class, 'id', 'id');
    }
}