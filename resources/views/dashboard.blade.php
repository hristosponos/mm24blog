@extends('partials.layout')

@section('content')
    <main class="container mx-auto max-w-4xl px-4 py-6">
        <div class="card bg-base-300 shadow-sm">
            <div class="card-body">
                <h1 class="card-title">{{ __('Dashboard') }}</h1>
                <p>{{ __("You're logged in!") }}</p>
            </div>
        </div>
    </main>
@endsection
