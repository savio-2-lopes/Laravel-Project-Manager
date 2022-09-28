<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'orcamento', 'data_inicio', 'data_final', 'client_id'];

    /**
     * Define a relação com o cliente
     * 
     * @return void
     **/

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    /**
     * Define a relação com os funcionários
     *
     * @return
     **/

    public function employees()
    {
        return $this->belongsToMany(Employees::class, 'employee_project', 'project_id', 'employee_id');
    }
}
