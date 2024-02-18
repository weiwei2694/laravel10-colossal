<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function __invoke(): Response
    {
        $lists = [
            [
                "name" => "Services",
                "url" => "/services",
            ],
            [
                "name" => "How We Work",
                "url" => "/how-we-work"
            ],
            [
                "name" => "Projects",
                "url" => "/project"
            ],
            [
                "name" => "About",
                "url" => "/about"
            ]
        ];
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

        return response()
            ->view('home.home', compact("lists", "features"));
    }
}
