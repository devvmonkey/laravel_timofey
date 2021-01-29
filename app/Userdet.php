<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdet extends Model
{
	protected $table = 'users';
    
	protected $fillable = ['nic', 'email'];
} 
