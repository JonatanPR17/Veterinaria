<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    public function cliente(){
        return $this->hasOne('App\Models\Cliente');
    }
    protected $guarded = [];
}
