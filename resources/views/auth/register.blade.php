<x-myapp>



    <div class="container my-5 text-center p-3 w-50">

        <h1>Register</h1>

        <form class="p-4 border border-2 border-dark" action="{{ route('register') }}" method="POST">

            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="Name" id="name" name="name"
                    value="{{ old('name') }}" required autofocus autocomplete="name">
                <label>Your Name</label>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email"
                    value="{{ old('email') }}" required autocomplete="username">
                <label>Your Email</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="password" name="password"
                    required autocomplete="new-password">
                <label>Your Password</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" placeholder="password" id="password_confirmation"
                    class="block mt-1 w-full" type="password" name="password_confirmation" required
                    autocomplete="new-password">
                <label>Confirm Password</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />


            </div>

            <a class="" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <button type="submit" class="btn btn-primary btn-lg">SignUp</button>
        </form>

    </div>
</x-myapp>
