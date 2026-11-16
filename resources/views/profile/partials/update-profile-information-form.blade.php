<section>
    <h2 class="card-title">{{ __('Profile Information') }}</h2>
    <p class="mt-2 text-base-content/70">{{ __("Update your account's profile information and email address.") }}</p>

    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('profile.update') }}" class="mt-4 space-y-4">
        @csrf
        @method('patch')

        <fieldset class="fieldset">
            <legend class="fieldset-legend"><label for="profile_name">{{ __('Name') }}</label></legend>
            <input id="profile_name" name="name" type="text" value="{{ old('name', $user->name) }}"
                class="input w-full @error('name') input-error @enderror" required autocomplete="name">
            @error('name')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <fieldset class="fieldset">
            <legend class="fieldset-legend"><label for="profile_email">{{ __('Email') }}</label></legend>
            <input id="profile_email" name="email" type="email" value="{{ old('email', $user->email) }}"
                class="input w-full @error('email') input-error @enderror" required autocomplete="email">
            @error('email')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <p>{{ __('Your email address is unverified.') }}</p>
            <button type="submit" form="send-verification" class="btn btn-link">
                {{ __('Resend verification email') }}
            </button>
        @endif

        @if (session('status') === 'verification-link-sent')
            <div role="status" class="alert alert-success">
                <span>{{ __('A new verification link has been sent to your email address.') }}</span>
            </div>
        @endif

        @if (session('status') === 'profile-updated')
            <div role="status" class="alert alert-success">
                <span>{{ __('Profile updated.') }}</span>
            </div>
        @endif

        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </form>
</section>
