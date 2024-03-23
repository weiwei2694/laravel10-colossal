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
            'email' => "required|email|unique:users,email,$user->id",
            'bio' => 'nullable|max:225',
            'twitter' => 'nullable|url:http,https',
            'facebook' => 'nullable|url:http,https',
            'linkedin' => 'nullable|url:http,https',
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

    public function updatePassword(User $user): RedirectResponse
    {
        request()->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8'
        ]);

        if (!password_verify(request('current_password'), $user->password)) {
            return redirect()
                ->back()
                ->withErrors([
                    'current_password' => 'The password you entered is incorrect.'
                ]);
        }

        $user->password = bcrypt(request('new_password'));
        $user->save();

        return redirect()
            ->route('dashboard.settings.index')
            ->with('success', 'Password updated successfully.');
    }
}
