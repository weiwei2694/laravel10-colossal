<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    public function index(): Response|JsonResponse
    {
        $categories = ProjectCategory::has('projects')->get();
        $projects = Project::where('project_category_id', request()->query('category_id'))->paginate(1);

        if (request()->ajax()) {
            $view = view('components.cards-project', compact('projects'))->render();
            return response()->json(['html' => $view]);
        }

        return response()
            ->view('projects.index.index', compact('categories', 'projects'));
    }

    public function show(Project $project): Response
    {
        $projects = Project::where('id', '!=', $project->id)
            ->where('project_category_id', $project->project_category_id)
            ->orderBy('created_at', 'desc')
            ->take(2)
            ->get();

        return response()
            ->view('projects.show.show', compact('project', 'projects'));
    }
}
