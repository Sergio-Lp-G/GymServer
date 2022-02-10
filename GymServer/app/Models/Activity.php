<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Activity extends Model
{
    use HasFactory;

    public function sesions(){
        return $this->hasMany(User::class);
    }
}
