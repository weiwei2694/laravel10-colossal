<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Sponsor;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function __invoke(): Response
    {
        $features = [
            [
                "icon" => "/assets/figma.svg",
                "name" => "Design",
                "description" => "The project interface will be designed first, our favorite tool is Figma."
            ],
            [
                "icon" => "/assets/code.svg",
                "name" => "Develop",
                "description" => "Transform design and write business logic here. Choose the technology you want."
            ],
            [
                "icon" => "/assets/box.svg",
                "name" => "Ship",
                "description" => "After the work is complete, we will send the project and all its assets to you."
            ]
        ];
        $sponsors = Sponsor::all();
        $projects = Project::orderBy('created_at', 'desc')->take(2)->get();
        $pricing = [
            [
                'title' => 'UI Design',
                'price' => '1200',
                'lists' => ["10 design pages", "Well-documented", "4 revisions", "$100/additional page"]
            ],
            [
                "title" => "Development",
                "price" => "5000",
                "lists" => ["Web & Mobile", "Well-documented", "8 revisions", "$1000/additional feature"]
            ],
            [
                "title" => "Maintenance",
                "price" => "3000",
                "lists" => ["Daily backup", "3 hourse of maintenance", "Including fixing", "$50/additional hour"]
            ]
        ];
        $testimonials = Testimonial::all();
        $headTitle = 'Home';

        return response()
            ->view('home.home', compact("features", "sponsors", "projects", "pricing", "testimonials", "headTitle"));
    }
}
