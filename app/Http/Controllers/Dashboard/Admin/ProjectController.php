<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $projects = Project::paginate(10);

        return response()
            ->view('dashboard.admin.projects.index', [
                'projects' => $projects
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $categories = ProjectCategory::all();

        return response()
            ->view('dashboard.admin.projects.create', [
                "categories" => $categories
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(): RedirectResponse
    {
        request()->validate([
            'title' => 'required|max:74',
            'description' => 'required|max:199',
            'client' => 'required|max:74',
            'technology' => 'required',
            'is_desktop' => 'required',
            'project_category_id' => 'required|exists:project_categories,id',
            'image' => 'required|file|max:1024'
        ]);

        $technology = json_encode(explode(',', request()->input('technology')));
        $fileName = time() . request()->file('image')->getClientOriginalName();
        $path = request()->file('image')->storeAs('images/projects', $fileName, 'public');

        $project = new Project();
        $project->title = request()->input('title');
        $project->description = request()->input('description');
        $project->client = request()->input('client');
        $project->technology = $technology;
        $project->is_desktop = request()->input('is_desktop') === "Yes";
        $project->project_category_id = request()->input('project_category_id');
        $project->image = $path;
        $project->save();

        return redirect()
            ->route('dashboard.projects.index')
            ->with('success', 'Project Created Successfully.');
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
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
