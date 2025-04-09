<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
class ProjectController extends Controller
{

    public function index()
    {
        //
        $Project = Project::orderBy('id', 'DESC')->get();
        return view("Project.Project", compact("Project"));
    }

    public function public(Request $request)
    {
        $Project = Project::where("detail", "=", $request->description)->first();
        if ($Project == "") {
            abort(404);
        } else {
            return view("Project.Project_detail", compact("Project"));
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Project = Project::orderBy('id', 'DESC')->get();
        return view("Project.Projecttable", compact("Project"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Project = new Project;


          $Project->description = $request->description;

          // Guardar en la base de datos
          $Project->save();

        // Retornar la vista de creación
        return $this->create();
    }


    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $Project = Project::find($request->id);
        return $Project;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Project = Project::find($request->id);

        $Project->description = $request->description;

        // Guardar en la base de datos
        $Project->save();

        // Retornar la vista de creación
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $table = Project::find($request["id"]);


            // Eliminar el registro de la base de datos
            $table->delete();


        // Redirigir al método create
        return $this->create();
    }
}
