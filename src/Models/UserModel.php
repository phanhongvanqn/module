<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $table = 'user';
    protected $fillable = [
        'username', 'password', 'level'
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    protected $hidden = [];
}
