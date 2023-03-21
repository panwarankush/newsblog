<section>
    <div class="">
        <header>
            <h2 class="">
                {{ __('Profile Information') }}
            </h2>

            <p class="">
                {{ __("Update your account's profile information and email address.") }}
            </p>
        </header>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="name" class="form-label fw-bold fs-4"> Name </label>
                <input id="name" name="name" type="text" class="mt-2"
                    value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold fs-4">Email</label>
                <input id="email" name="email" type="email" class="mt-2" value="{{ old('email', $user->email)}}"
                    required autocomplete="username" >
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div>
                        <p class="">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification" class="btn btn-primary">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Save</button>

                @if (session('status') === 'profile-updated')
                    <div class="alert alert-success d-inline-block" role="alert">saved.</div>

                @endif
            </div>
        </form>
    </div>
</section>
