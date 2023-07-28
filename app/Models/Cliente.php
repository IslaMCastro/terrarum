<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ["interesse", "pessoa_id"];

    public function pessoa()
    {
        return $this->belongsTo(pessoa::class,
         "pessoa_id");
    }
}
