<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ContactoFactory;

class contacto extends Model
{
    use HasFactory;

    public function eventos(){
        $this->belongsTo(contacto::class);
    }
    public function notas(){
        $this->belongsTo(contacto::class);
    }
}
