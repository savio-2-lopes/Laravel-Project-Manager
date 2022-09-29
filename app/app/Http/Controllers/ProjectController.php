<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Employees;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::with('client')->paginate(15);
        return view('projects.index', [
            'projects' => $projects
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Client::get();
        $funcionarios = Employees::ativos();

        return view('projects.create', [
            'clientes' => $clientes,
            'funcionarios' => $funcionarios
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  Projects $project
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $project)
    {
        $project->load(['client', 'employees']);

        return view('projects.show', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Projects $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $project)
    {
        $clientes = Client::get();
        $funcionarios = Employees::ativos();

        return view('projects.edit', [
            'project' => $project,
            'clientes' => $clientes,
            'funcionarios' => $funcionarios
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Projects $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $project)
    {
        DB::transaction(function () use ($request, $project) {
            $project->update(
                $request->except(['_token', 'funcionarios'])
            );

            $project->employees()->sync($request->funcionarios);
        });

        return redirect()->route('projects.index')
            ->with('mensagem', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Projects $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $project)
    {
        DB::transaction(function () use ($project) {
            $project->employees()->sync([]);

            $project->delete();
        });

        return redirect()->route('projects.index')
            ->with('mensagem', 'Projeto excluido com sucesso!');
    }
}
