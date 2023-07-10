<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membro extends Model
{
    use HasFactory;
    protected $table = 'membros';
    protected $fillable = [
       'id_setor',
        'nome',
        'cpf',
       'cargo',
       'dizimista'
    ];

    public function setor(){
        return $this->belongsTo('App\Models\setor', 'id_setor');
    }
}
