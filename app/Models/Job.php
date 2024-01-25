<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['JobCode', 'JobTitleName', 'DepartmentID'];

    public function department(){
        return $this->belongsTo(Department::class, 'DepartmentID', 'id');
  }
}
