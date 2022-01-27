<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    protected $primaryKey = 'contents_id';

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
