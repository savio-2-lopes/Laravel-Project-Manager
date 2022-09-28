<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;
    protected $fillable = ['logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'cep', 'estado'];

    public function employee()
    {
        return $this->belongsTo(Employees::class);
    }
}
