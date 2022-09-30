<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InactiveEmployee extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Employees $employee)
    {
        if ($employee->data_demissao) {
            return redirect()->route('employees.show', $employee)
                ->with('mensagem', 'Funcionário já está inativo!');
        }
        $employee->data_demissao = Carbon::now();
        $employee->save();

        return redirect()->route('employees.show', $employee)
            ->with('mensagem', 'Funcionário deativado com sucesso!');
    }
}
