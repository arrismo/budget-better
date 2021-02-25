<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table = 'user_budget';
    
    protected $fillable = 
    ['rent','spending','transportation','food','other','user_id','cityId'];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}

