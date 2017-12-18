<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use User;
class User_social extends Model
{
    protected $fillable = [];
    protected $table = 'user_social';
    public function user()
    {
    	return $this->beLongsTo(User::class);
    }
}
