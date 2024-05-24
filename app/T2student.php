<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T2student extends Model
{
    protected $fillable = ['name', 'masv', 'gender', 'date', 'address'];
}
