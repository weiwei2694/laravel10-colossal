<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    public function index(): Response
    {
        $categories = ProjectCategory::has('projects')->get();
        $projects = Project::where('project_category_id', request()->query('category_id'))->get();

        return response()
            ->view('projects.index', compact('categories', 'projects'));
    }
}
