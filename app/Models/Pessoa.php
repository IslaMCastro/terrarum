<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = ["nome","cpfcnpj","cep" ,"numero", "email", "telefone", "cadastro_id"];

    public function cadastro()
    {
        return $this->belongsTo(Cadastro::class,
         "cadastro_id");
    }
}
