<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cpf', 'data_contratacao', 'data_demissao'];

    public function address()
    {
        return $this->hasOne(Addresses::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Projects::class, 'employee_project', 'employee_id', 'project_id');
    }

    static public function ativos()
    {
        return Employees::where('data_demissao', null)->get();
    }

}
