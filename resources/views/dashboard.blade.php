<x-userapp>
    <div class="container p-4">
        <div class="row text-center my-5">
            <div class="col align-auto">
                <h2>Hello {{ Auth::user()->name }}, Do you want to create a post:- <a class="btn btn-info"
                        href="/news/create/post">Create Post</a></h2>
            </div>
        </div>

        <div class="row m-4">
            <h3 class="mb-4 fw-bolder">Click on news to modify them !!</h3>


            <div class="list-group list-group-light list-group-numbered">
                @forelse ($posts as $post)
                    <a class="list-group-item list-group-item-action list-group-item-secondary fs-5"
                        href="/news/{{ $post->id }}/edit">{{ ucfirst($post->title) }} <span class="fs-6">({{ $post->category }})</span></a>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
        <div class="row m-4">

                {{ $posts->links() }}

        </div>
    </div>
</x-userapp>
