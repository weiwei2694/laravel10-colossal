<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\{Response, RedirectResponse};
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index(): Response
    {
        return response()
            ->view('dashboard.settings.index');
    }

    public function updateProfile(User $user): RedirectResponse
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'bio' => 'required|max:225',
            'twitter' => 'url:http,https',
            'facebook' => 'url:http,https',
            'linkedin' => 'url:http,https',
        ];
        if (request()->hasFile('image')) {
            $rules['image'] = 'required|file|max:3072|mimes:png,jpg,jpeg';
        }
        request()->validate($rules);

        $user->name = request('name');
        $user->email = request('email');
        $user->bio = request('bio');
        $user->twitter = request('twitter');
        $user->facebook = request('facebook');
        $user->linkedin = request('linkedin');
        if (request()->hasFile('image')) {
            Storage::disk('public')->delete($user->image);

            $fileName = time() . request()->file('image')->getClientOriginalName();
            $path = request()->file('image')->storeAs('images/users', $fileName, 'public');
            $user->image = $path;
        }
        $user->save();

        return redirect()
            ->route('dashboard.settings.index')
            ->with('success', 'Profile updated successfully.');
    }
}
