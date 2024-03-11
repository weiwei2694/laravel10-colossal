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
            ->view('projects.index', compact('categories', 'projects'));
    }
}
