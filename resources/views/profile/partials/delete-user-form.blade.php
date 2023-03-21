<header>
    <h2 class="">
        {{ __('Delete Account') }}
    </h2>

    <p class="">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
    </p>
</header>

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUser">
    Delete
</button>

<!-- Modal -->
<div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')

                    <h2 class="">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h2>

                    <div class="mt-6">
                        <label class="fw-bolder">Enter Password</label>

                        <input id="password" name="password" type="password" class="mt-1"
                            placeholder="{{ __('Password') }}" />
                        <button type="submit" class="btn btn-danger ms-3">Delete</button>

                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
