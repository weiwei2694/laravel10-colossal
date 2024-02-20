@extends('layouts.dashboard.dashboard')

@section('content')
    <div class="flex flex-col-reverse lg:flex-row gap-[20px]">
        <!-- General Information & Total Posts -->
        <div class="flex flex-col gap-[20px] w-full">
            <div class="bg-white rounded w-full border h-fit">
                <div class="p-[20px] border-b">
                    <h1 class="font-semibold text-black text-lg">General Information</h1>
                </div>
                <div class="p-[20px]">
                    <ul class="flex flex-col gap-y-[20px]">
                        <li class="font-normal text-[14px] text-black/60">Name :<br /><span
                                class="font-medium text-[16px] text-black">{{ $user->name }}</span></li>
                        <li class="font-normal text-[14px] text-black/60">Email :<br /><span
                                class="font-medium text-[16px] text-black">{{ $user->email }}</span></li>
                        <li class="font-normal text-[14px] text-black/60">Role :<br /><span
                                class="font-medium text-[16px] text-black">{{ $user->role }}</span></li>
                        <li class="font-normal text-[14px] text-black/60">Admin :<br /><span
                                class="font-medium text-[16px] text-black">{{ $user->is_admin ? 'Yes' : 'No' }}</span></li>
                        <li class="font-normal text-[14px] text-black/60">Created At :<br /><span
                                class="font-medium text-[16px] text-black">{{ $user->created_at }}</span></li>
                        <li class="font-normal text-[14px] text-black/60">Updated At :<br /><span
                                class="font-medium text-[16px] text-black">{{ $user->updated_at->diffForHumans() }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bg-white rounded w-full border h-fit">
                <div class="p-[20px] border-b flex justify-between items-center">
                    <h1 class="font-semibold text-black text-lg">Total Posts {{ $user->posts->count() }}</h1>
                    {{-- TODO: when sent to the posts dashboard, filter all posts based on the current userId --}}
                    <a href="{{ route('dashboard.posts.index') }}"
                        class="py-2 px-8 rounded bg-blue-500 hover:bg-blue-500/90 text-white font-medium outline-none">Go To
                        Dashboard
                        Posts</a>
                </div>
            </div>
        </div>

        <!-- Profile Photo & Social Media -->
        <div class="flex flex-col gap-[20px] max-lg:w-full lg:w-[600px]">
            <div class="bg-white rounded shadow-sm w-full border h-fit">
                <div class="p-[20px] border-b">
                    <h1 class="font-semibold text-black text-lg">Profile Photo</h1>
                </div>
                <div class="p-[20px] grid place-items-center">
                    <img src="{{ asset('/storage/' . $user->image) }}" alt="Profile Photo"
                        class="w-fit rounded h-[400px]" />
                </div>
            </div>
            <div class="bg-white rounded shadow-sm w-full border">
                <div class="p-[20px] flex justify-between items-center">
                    <h1 class="font-semibold text-black text-lg">Social Media</h1>

                    @if (!$user->twitter && !$user->facebook && !$user->linkedin)
                        <p class="font-semibold text-black/60 text-xs">N/A</p>
                    @else
                        <ul class="flex items-center gap-[20px]">
                            @if ($user->twitter)
                                <li>
                                    <a href="{{ $user->twitter }}" target="_blank"><i
                                            class="ri-twitter-x-fill text-2xl"></i></a>
                                </li>
                            @endif
                            @if ($user->facebook)
                                <li>
                                    <a href="{{ $user->facebook }}" target="_blank"><i
                                            class="ri-facebook-line text-2xl"></i></a>
                                </li>
                            @endif
                            @if ($user->linkedin)
                                <li>
                                    <a href="{{ $user->linkedin }}" target="_blank"><i
                                            class="ri-linkedin-line text-2xl"></i></a>
                                </li>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    @endsection
