<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Project, ProjectCategory};
use Illuminate\Http\{Response, RedirectResponse};
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response|RedirectResponse
    {
        $categories = ProjectCategory::all();

        $projects = Project::query();
        if (request('category') && request('category') !== "all") {
            $projects->where('project_category_id', request('category'));
        }
        if (
            request('desktop') === "yes" ||
            request('desktop') === "no"
        ) {
            $projects->where('is_desktop', request('desktop') === "yes");
        }
        if (request('search')) {
            $searchTerm = '%' . request('search') . '%';
            $projects->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', $searchTerm)
                    ->orWhere('client', 'like', $searchTerm);
            });
        }
        $projects = $projects->with('projectCategory')->paginate(10);

        return response()
            ->view('dashboard.admin.projects.index', compact('projects', 'categories'));
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
        $project->is_desktop = request()->input('is_desktop') == "1";
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
    public function show(Project $project): Response
    {
        return response()
            ->view('dashboard.admin.projects.show', [
                'project' => $project
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project): Response
    {
        $categories = ProjectCategory::all();

        return response()
            ->view('dashboard.admin.projects.edit', [
                'categories' => $categories,
                'project' => $project
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Project $project): RedirectResponse
    {
        $rules = [
            'title' => 'required|max:74',
            'description' => 'required|max:199',
            'client' => 'required|max:74',
            'technology' => 'required',
            'is_desktop' => 'required',
            'project_category_id' => 'required|exists:project_categories,id',
        ];
        if (request()->hasFile('image')) {
            $rules['image'] = 'required|file|max:1024';
        }
        request()->validate($rules);

        $technology = json_encode(explode(',', request()->input('technology')));

        $project->title = request()->input('title');
        $project->description = request()->input('description');
        $project->client = request()->input('client');
        $project->technology = $technology;
        $project->is_desktop = request()->input('is_desktop') == "1";
        $project->project_category_id = request()->input('project_category_id');
        if (request()->hasFile('image')) {
            Storage::disk('public')->delete($project->image);

            $fileName = time() . request()->file('image')->getClientOriginalName();
            $path = request()->file('image')->storeAs('images/projects', $fileName, 'public');
            $project->image = $path;
        }
        $project->save();

        return redirect()->route('dashboard.projects.index')->with('success', 'Project Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project): RedirectResponse
    {
        Storage::disk('public')->delete($project->image);
        $project->delete();

        return redirect()->route('dashboard.projects.index')->with('success', 'Project Deleted Successfully.');
    }
}
