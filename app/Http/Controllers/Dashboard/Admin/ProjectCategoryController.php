<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ProjectCategoryController extends Controller
{
    public function index(): Response
    {
        $projectCategories = ProjectCategory::with('projects')->paginate(10);

        return response()
            ->view('dashboard.admin.project-category.index', compact('projectCategories'));
    }

    public function create(): Response
    {
        return response()
            ->view('dashboard.admin.project-category.create');
    }

    public function store(): RedirectResponse
    {
        request()->validate([
            'name' => 'required|max:74|unique:project_categories,name',
        ]);

        $projectCategory = new ProjectCategory();
        $projectCategory->name = request()->input('name');
        $projectCategory->save();

        return redirect()
            ->route('dashboard.project-categories.index')
            ->with('success', 'Project category created successfully.');
    }

    public function show(ProjectCategory $project_category): Response
    {
        return response()
            ->view('dashboard.admin.project-category.show', compact('project_category'));
    }

    public function edit(ProjectCategory $project_category): Response
    {
        return response()
            ->view('dashboard.admin.project-category.edit', compact('project_category'));
    }

    public function update(ProjectCategory $project_category): RedirectResponse
    {
        request()->validate([
            'name' => "required|max:74|unique:project_categories,name,$project_category->id"
        ]);

        $project_category->name = request()->input('name');
        $project_category->save();

        return redirect()
            ->route('dashboard.project-categories.index')
            ->with('success', 'Project category updated successfully.');
    }

    public function destroy(ProjectCategory $project_category): RedirectResponse
    {
        $project_category->delete();

        return redirect()
            ->route('dashboard.project-categories.index')
            ->with('success', 'Project category deleted successfully.');
    }
}
