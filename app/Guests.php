<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{
    protected $table = 'guests';
    protected $fillable = ['id','firstname', 'lastname', 'email'];
}
