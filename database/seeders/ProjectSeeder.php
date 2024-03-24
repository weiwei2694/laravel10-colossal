<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Models\{ProjectCategory, Project};

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technology = ProjectCategory::create(['name' => 'Technology']);
        $webApps = ProjectCategory::create(['name' => 'Web Apps']);

        $personalDashboard = Storage::putFile('images/projects', new File(public_path('/assets/projects/personal-dashboard.png')), 'public');
        $foxManager = Storage::putFile('images/projects', new File(public_path('/assets/projects/foxmanager.jpg')), 'public');
        $creatives = Storage::putFile('images/projects', new File(public_path('/assets/projects/creatives.png')), 'public');
        $cryptocurrencyDashboard = Storage::putFile('images/projects', new File(public_path('/assets/projects/cryptocurrency-dashboard.png')), 'public');
        $max = Storage::putFile('images/projects', new File(public_path('/assets/projects/max.png')), 'public');

        Project::create([
            'title' => 'Personal Dashboard',
            'description' => "Create personalized dashboard for users to efficiently manage tasks, track progress, and access relevant data easily.",
            'client' => 'Luke',
            'technology' => json_encode(['Reactjs, Typescript, Tailwindcss']),
            'is_desktop' => 1,
            'project_category_id' => $webApps->id,
            'image' => $personalDashboard,
        ]);
        Project::create([
            'title' => 'Cryptocurrency Dashboard',
            'description' => 'Cryptocurrency Dashboard',
            'client' => 'One Week Wonders',
            'technology' => json_encode(['Reactjs, Tailwindcss']),
            'is_desktop' => 0,
            'project_category_id' => $webApps->id,
            'image' => $cryptocurrencyDashboard
        ]);
        Project::create([
            'title' => 'Max',
            'description' => "Something has always existed. According to physics, there can never be true physical nothingness—though there can be times when existence resembles nothing.",
            'client' => 'Ds Studio',
            'technology' => json_encode(['Reactjs, Tailwindcss']),
            'is_desktop' => 0,
            'project_category_id' => $technology->id,
            'image' => $max
        ]);
        Project::create([
            'title' => 'Fox Manager',
            'description' => "No Description",
            'client' => 'Wei',
            'technology' => json_encode(['Reactjs, Nextjs14, Tailwindcss, Shadcn UI']),
            'is_desktop' => 1,
            'project_category_id' => $webApps->id,
            'image' => $foxManager
        ]);
        Project::create([
            'title' => 'Project Management Dashboard',
            'description' => "Project Management Dashboard you can use to keep track of every project and task with advanced filtering and custom layouts.",
            'client' => 'Robert Avram',
            'technology' => json_encode(['Flutter']),
            'is_desktop' => 0,
            'project_category_id' => $technology->id,
            'image' => $creatives
        ]);
    }
}
