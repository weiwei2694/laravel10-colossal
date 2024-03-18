<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Illuminate\Http\Response;

class ProjectCategoryController extends Controller
{
    public function index(): Response
    {
        $projectCategories = ProjectCategory::with('projects')->paginate(10);

        return response()
            ->view('dashboard.admin.project-category.index', compact('projectCategories'));
    }
}
