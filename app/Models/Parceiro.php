<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
    use HasFactory;
    protected $fillable = ["setor", "pessoa_id"];

    public function pessoa()
    {
        return $this->belongsTo(pessoa::class,
         "pessoa_id");
    }
}