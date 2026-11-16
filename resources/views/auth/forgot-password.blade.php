@extends('partials.layout')
@section('content')
<div class="container mx-auto">
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="card bg-base-300 shadow-sm w-2/3 mx-auto p-3">
        @csrf
        
        <fieldset class="fieldset">
            <legend class="fieldset-legend">@lang('Email')</legend>
            <input name="email" value="{{ old('email') }}" type="email"
                class="input w-full @error('email') input-error @enderror" required autocomplete="username" />
            @error('email')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <div class="flex items-center justify-end mt-4">
            <button class="btn btn-primary">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</div>
@endsection
