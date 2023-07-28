<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $fillable = ["coordenadas","valorcontrato", "setor", "cadastro_id"];

    public function cadastro()
    {
        return $this->belongsTo(cadastro::class,
         "cadastro_id");
    }
}