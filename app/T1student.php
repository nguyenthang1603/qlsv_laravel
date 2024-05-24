<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T1student extends Model
{
    protected $fillable = ['name', 'masv', 'gender', 'date', 'address'];
}
