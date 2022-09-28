<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class Client extends Model
{
    protected $fillable = ['nome', 'endereco', 'observacao'];

    use HasFactory;

    /** 
     * Define a rela~ao com o projeto
     * 
     * @return void
     * **/

    public function projects()
    {
        return $this->hasMany(Projects::class, 'client_id', 'id');
    }
}
