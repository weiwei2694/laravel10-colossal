<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $github = Storage::putFile('images/sponsors', new File(public_path('/assets/sponsors/github.png')), 'public');
        $facebook = Storage::putFile('images/sponsors', new File(public_path('/assets/sponsors/facebook.png')), 'public');
        $forbes = Storage::putFile('images/sponsors', new File(public_path('/assets/sponsors/forbes.png')), 'public');
        $google = Storage::putFile('images/sponsors', new File(public_path('/assets/sponsors/google.png')), 'public');
        $microsoft = Storage::putFile('images/sponsors', new File(public_path('/assets/sponsors/microsoft.png')), 'public');

        Sponsor::create([
            'name' => 'Github',
            'image' => $github
        ]);
        Sponsor::create([
            'name' => 'Facebook',
            'image' => $facebook
        ]);
        Sponsor::create([
            'name' => 'Forbes',
            'image' => $forbes
        ]);
        Sponsor::create([
            'name' => 'Google',
            'image' => $google
        ]);
        Sponsor::create([
            'name' => 'Microsoft',
            'image' => $microsoft
        ]);
    }
}
