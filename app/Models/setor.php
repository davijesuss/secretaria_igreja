<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setor extends Model
{
    use HasFactory, SoftDeletes;
    
    use HasFactory;
    protected $table = 'setores';
    protected $fillable = [
        'nome_setor'
    ];
}
