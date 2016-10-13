<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //Para poder passar valores para o objeto do modelo
    protected $fillable=['body'];

    public function Card()
    {
        return $this->belongsTo(Card::class);
    }
}
