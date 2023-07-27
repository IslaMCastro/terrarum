<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastro extends Model
{
    use HasFactory;

    protected $fillable = ["nome"];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class,
         "pessoa_id");
    }

    public function locais()
    {
        return $this->belongsTo(locais::class);
    }
}
