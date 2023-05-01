<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\NotaFactory;
class nota extends Model
{
    use HasFactory;
    public function contactos(){
        $this->hasMany(nota::class);
    }
}
