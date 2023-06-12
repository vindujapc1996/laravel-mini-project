<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=[
        'patient_name',
        'gender',
        'age',
        'place',
        'email',
        'contact',
        'department',
        'doctor_id',
        'image',
        'staff_id',

    ];
    protected $primaryKey='patient_id';
    use HasFactory;
}
