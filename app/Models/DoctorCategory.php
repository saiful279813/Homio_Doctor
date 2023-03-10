<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorCategory extends Model
{
    use HasFactory;
    protected $table = 'doctor_categories';
    protected $fillable = [
        'id', 'name', 'slug', 'image', 'status', 'created_at', 'updated_at'
    ];
}
