<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Response;

class PricingController extends Controller
{
    public function index(): Response
    {
        $faqs = Faq::latest()->take(6)->get();
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
        $headTitle = 'Pricing';

        return response()
            ->view('pricing.index', compact('faqs', 'pricing', 'headTitle'));
    }
}
