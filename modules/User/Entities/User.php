<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'users';
	protected $fillable = ['username','password','fullname','birthday','email','gender'];
	protected $hidden = false;
}
