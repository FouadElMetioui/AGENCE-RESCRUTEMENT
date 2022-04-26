<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function Candidatures(){
        return $this->hasOne(Candidature::class);
    }
    public function Offres(){
        return $this->hasOne(Offre::class);
    }
}
