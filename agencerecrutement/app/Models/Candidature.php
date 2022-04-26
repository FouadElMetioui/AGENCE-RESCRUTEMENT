<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Candidature extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }
}
