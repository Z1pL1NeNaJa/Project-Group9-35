<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class background extends Model
{
    protected $primaryKey = 'background_id';
    
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
