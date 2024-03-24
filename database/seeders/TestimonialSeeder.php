<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estherHowardImage = Storage::putFile('images/testimonials', new File(public_path('/assets/testimonials/1708487630.jpg')), 'public');
        $courtneyHenry = Storage::putFile('images/testimonials', new File(public_path('/assets/testimonials/1708492325.jpg')), 'public');
        $ronaldRichards = Storage::putFile('images/testimonials', new File(public_path('/assets/testimonials/1708492372.jpg')), 'public');

        Testimonial::create([
            'name' => 'Esther Howard',
            'image' => $estherHowardImage,
            'company_name' => 'Abstergo Ltd.',
            'content' => "Your company is truly upstanding and is behind its product 100%. It's the perfect solution for our business. It has really helped our business.",
        ]);
        Testimonial::create([
            'name' => 'Courtney Henry',
            'image' => $courtneyHenry,
            'company_name' => 'Biffco Enterprises Ltd.',
            'content' => "Very easy to use. I made back the purchase price in just 48 hours! It's great. It's is both attractive and highly adaptable."
        ]);
        Testimonial::create([
            'name' => 'Ronald Richards',
            'image' => $ronaldRichards,
            'company_name' => 'Barone LLC.',
            'content' => "I am really satisfied with it. I'm good to go. It really saves me time and effort. It's is exactly what our business has been lacking."
        ]);
    }
}
