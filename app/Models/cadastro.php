<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastro extends Model
{
    use HasFactory;

    protected $fillable = ["nome"];

    public function produto()
    {
        return $this->belongsTo(Pessoa::class,
         "pessoa_id");
    }

    public function local()
    {
        return $this->belongsTo(locais::class);
    }
  

}
