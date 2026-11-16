<section class="space-y-4">
    <h2 class="card-title">{{ __('Delete Account') }}</h2>
    <p class="text-base-content/70">
        {{ __('Deleting your account permanently removes your account and its associated data.') }}
    </p>

    <button type="button" class="btn btn-error" onclick="document.getElementById('confirm-user-deletion').showModal()">
        {{ __('Delete Account') }}
    </button>

    <dialog id="confirm-user-deletion" class="modal" aria-labelledby="delete-account-title">
        <div class="modal-box">
            <h3 id="delete-account-title" class="text-lg font-bold">{{ __('Delete your account?') }}</h3>
            <p class="mt-2">{{ __('Enter your password to confirm. This action cannot be undone.') }}</p>

            <form method="POST" action="{{ route('profile.destroy') }}" class="mt-4">
                @csrf
                @method('delete')

                <fieldset class="fieldset">
                    <legend class="fieldset-legend"><label for="delete_password">{{ __('Password') }}</label></legend>
                    <input id="delete_password" name="password" type="password"
                        class="input w-full @error('password', 'userDeletion') input-error @enderror"
                        required autocomplete="current-password">
                    @error('password', 'userDeletion')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="modal-action">
                    <button type="button" class="btn" onclick="document.getElementById('confirm-user-deletion').close()">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" class="btn btn-error">{{ __('Delete Account') }}</button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>{{ __('Close') }}</button>
        </form>
    </dialog>

    @if ($errors->userDeletion->isNotEmpty())
        <script>
            document.getElementById('confirm-user-deletion').showModal();
        </script>
    @endif
</section>
