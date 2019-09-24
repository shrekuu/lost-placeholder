<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $appends = ['nickname'];

    public function getNicknameAttribute()
    {
        return $this->name;
    }
}
