<section>
    <div class="">
        <header>
            <h2 class="">
                {{ __('Update Password') }}
            </h2>

            <p class="">
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </p>
        </header>

        <form method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')

            <div class="mb-2">
                <label for="current_password" class="form-label fw-bold fs-4">Password</label>
                <input id="current_password" name="current_password" type="password" class="mt-1"
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div class="mb-2">
                <label for="password" class="form-label fw-bold fs-4">New Password</label>
                <input id="password" name="password" type="password" class="mt-1" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="mb-2">
                <label for="password_confirmation" class="form-label fw-bold fs-4">Confirm Password </label>
                <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Save</button>

                @if (session('status') === 'password-updated')
                    <div class="alert alert-success d-inline-block" role="alert">saved.</div>
                @endif
            </div>
        </form>
    </div>
</section>
