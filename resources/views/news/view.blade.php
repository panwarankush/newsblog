<x-myapp>

    <div class="container border border-dark">

        <div class="mt-5 p-3">

            <img src="{{ asset('images/' . $post->file_path) }}" alt="image" class="rounded my-5" title="" width="400"
                height="300">
            <h1>{{ ucwords($post->title) }} <span class="fs-4">({{ $post->category }})</span> </h1> <span class="text-secondary">by {{ $post->user_id }}</span>
        </div>
        <div class="mb-5 p-3">
            <p>{{ $post->body }}</p>
        </div>

    </div>

</x-myapp>
