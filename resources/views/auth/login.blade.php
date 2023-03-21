<x-myapp>

    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="container my-5 text-center p-3 w-50">


        <h1>Login</h1>
        <form class="p-4 border border-dark border-2" action="{{ route('login') }}" method="POST">

            @csrf
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email"
                    value="{{ old('email') }}" required autofocus autocomplete="username">
                <label>Email address</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="password" name="password"
                    required autocomplete="current-password">
                <label>Password</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <a class="" href="{{ route('register') }}">
                {{ __('Not Register Yet?') }}
            </a>

            <button type="submit" class="btn btn-primary btn-lg">SignIn</button>


            <!-- Remember Me -->
            {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button> --}}
        </form>
    </div>
</x-myapp>
