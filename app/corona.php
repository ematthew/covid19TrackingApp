<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class corona extends Model
{
    protected $fillable = ['country_name', 'symptoms','cases'];
}
