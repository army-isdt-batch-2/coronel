<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Department extends Model
{
    use HasFactory,softdeletes;
    protected $table = 'Department';

    protected $fillable = [
        'Department',
        
     ];
}
