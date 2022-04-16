<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    

    public function to_user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
