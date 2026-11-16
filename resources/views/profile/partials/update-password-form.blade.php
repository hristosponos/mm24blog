<section>
    <h2 class="card-title">{{ __('Update Password') }}</h2>
    <p class="mt-2 text-base-content/70">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

    <form method="POST" action="{{ route('password.update') }}" class="mt-4 space-y-4">
        @csrf
        @method('put')

        <fieldset class="fieldset">
            <legend class="fieldset-legend"><label for="update_current_password">{{ __('Current Password') }}</label></legend>
            <input id="update_current_password" name="current_password" type="password"
                class="input w-full @error('current_password', 'updatePassword') input-error @enderror"
                required autocomplete="current-password">
            @error('current_password', 'updatePassword')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <fieldset class="fieldset">
            <legend class="fieldset-legend"><label for="update_password">{{ __('New Password') }}</label></legend>
            <input id="update_password" name="password" type="password"
                class="input w-full @error('password', 'updatePassword') input-error @enderror"
                required autocomplete="new-password">
            @error('password', 'updatePassword')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <fieldset class="fieldset">
            <legend class="fieldset-legend"><label for="update_password_confirmation">{{ __('Confirm Password') }}</label></legend>
            <input id="update_password_confirmation" name="password_confirmation" type="password"
                class="input w-full @error('password_confirmation', 'updatePassword') input-error @enderror"
                required autocomplete="new-password">
            @error('password_confirmation', 'updatePassword')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        @if (session('status') === 'password-updated')
            <div role="status" class="alert alert-success">
                <span>{{ __('Password updated.') }}</span>
            </div>
        @endif

        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </form>
</section>
