<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;


    protected $fillable = [
        'doctor_name','department_name','image_one','status','doctor_slug','id',
        ];
}
