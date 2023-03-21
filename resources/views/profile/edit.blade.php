<x-userapp>

    <div class="m-md-5 p-3">
        <div class="row">
            <div class="col-lg-6">
                <div class="p-3">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="col-lg-6">
                <div class="p-3">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="col-7 mt-4">
                <div class="p-3">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-userapp>
