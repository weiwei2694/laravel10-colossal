<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albertFloresImage = Storage::putFile('images/users', new File(public_path('/assets/users/albert-flores.png')), 'public');
        $annetteBlackImage = Storage::putFile('images/users', new File(public_path('/assets/users/annette-black.png')), 'public');
        $darrellStewardImage = Storage::putFile('images/users', new File(public_path('/assets/users/darrell-steward.png')), 'public');
        $devonLaneImage = Storage::putFile('images/users', new File(public_path('/assets/users/devon-lane.png')), 'public');
        $floydMiles = Storage::putFile('images/users', new File(public_path('/assets/users/floyd-miles.png')), 'public');
        $marvinMckinney = Storage::putFile('images/users', new File(public_path('/assets/users/marvin-mckinney.png')), 'public');
        $admin = Storage::putFile('images/users', new File(public_path('/assets/users/admin.jpg')), 'public');

        User::create([
            'name' => 'Albert Flores',
            'email' => 'albertflores@gmail.com',
            'password' => 'password',
            'role' => 'Founder',
            'image' => $albertFloresImage,
            'bio' => "Night subdue their morning created every light earth very darkness they're you're deep female. Tree sixth divided greater, midst earth forth won't for moved.",
            'twitter' => 'https://twitter.com/home',
            'facebook' => 'https://www.facebook.com/',
            'linkedin' => 'https://www.linkedin.com/'
        ]);
        User::create([
            'name' => 'Annette Black',
            'email' => 'annetteblack@gmail.com',
            'password' => 'password',
            'role' => 'Project Manager',
            'image' => $annetteBlackImage,
            'bio' => "Night subdue their morning created every light earth very darkness they're you're deep female. Tree sixth divided greater, midst earth forth won't for moved.",
            'twitter' => 'https://twitter.com/home',
            'facebook' => 'https://www.facebook.com/',
            'linkedin' => 'https://www.linkedin.com/'
        ]);
        User::create([
            'name' => 'Darrell Steward',
            'email' => 'darrellsteward@gmail.com',
            'password' => 'password',
            'role' => 'UI Designer',
            'image' => $darrellStewardImage,
            'bio' => "Night subdue their morning created every light earth very darkness they're you're deep female. Tree sixth divided greater, midst earth forth won't for moved.",
            'twitter' => 'https://twitter.com/home',
            'facebook' => 'https://www.facebook.com/',
            'linkedin' => 'https://www.linkedin.com/'
        ]);
        User::create([
            'name' => 'Marvin McKinney',
            'email' => 'marvinmckinney@gmail.com',
            'password' => 'password',
            'role' => 'Software Engineer',
            'image' => $marvinMckinney,
            'bio' => "Night subdue their morning created every light earth very darkness they're you're deep female. Tree sixth divided greater, midst earth forth won't for moved.",
            'twitter' => 'https://twitter.com/home',
            'facebook' => 'https://www.facebook.com/',
            'linkedin' => 'https://www.linkedin.com/'
        ]);
        User::create([
            'name' => 'Floyd Miles',
            'email' => 'floydmiles@gmail.com',
            'password' => 'password',
            'role' => 'System Analyst',
            'image' => $floydMiles,
            'bio' => "Night subdue their morning created every light earth very darkness they're you're deep female. Tree sixth divided greater, midst earth forth won't for moved.",
            'twitter' => 'https://twitter.com/home',
            'facebook' => 'https://www.facebook.com/',
            'linkedin' => 'https://www.linkedin.com/'
        ]);
        User::create([
            'name' => 'Devon Lane',
            'email' => 'devonlane@gmail.com',
            'password' => 'password',
            'role' => 'Chief Technology Officer',
            'image' => $devonLaneImage,
            'bio' => "Night subdue their morning created every light earth very darkness they're you're deep female. Tree sixth divided greater, midst earth forth won't for moved.",
            'twitter' => 'https://twitter.com/home',
            'facebook' => 'https://www.facebook.com/',
            'linkedin' => 'https://www.linkedin.com/'
        ]);

        # Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'is_admin' => 1,
            'role' => 'Admin',
            'image' => $admin,
            'bio' => 'Admin',
        ]);
    }
}
