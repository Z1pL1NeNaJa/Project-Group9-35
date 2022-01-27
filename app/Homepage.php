<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $primaryKey = 'Homepage_id';

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
