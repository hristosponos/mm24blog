@extends('partials.layout')

@section('content')
    <main class="container mx-auto max-w-4xl space-y-6 px-4 py-6">
        <h1 class="text-2xl font-bold">{{ __('Profile') }}</h1>

        <div class="card bg-base-300 shadow-sm">
            <div class="card-body">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="card bg-base-300 shadow-sm">
            <div class="card-body">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="card bg-base-300 shadow-sm">
            <div class="card-body">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </main>
@endsection
