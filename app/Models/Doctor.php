<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=[
        'doctor_name',
        'specialization',
        'email',
        'contact',
        'time',
        'image',
    ];
      protected $primaryKey='doctor_id';
    use HasFactory;
}
