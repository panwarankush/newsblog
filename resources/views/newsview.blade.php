
    <div class="container my-5 py-4">

        <div class="text-center mb-5">
            <h1>Latest News Are Here !!</h1>
        </div>

        <div class="row">
            <div class="col-md-9">

                <div class="row p-3">
                    @foreach ($posts as $post)
                        <div class="col-md-4 p-2 my-3 text-center">

                            <img src="{{ asset('images/' . $post->file_path) }}" alt="image" class="rounded" title=""
                                width="300" height="200">

                        </div>
                        <div class="col-md-8 p-2 border-bottom border-2 border-info my-3 ">
                            <h2> {{ ucwords($post->title) }} <span class="fs-6 text-secondary"> By
                                    {{ $post->user_id }}</span></h2>
                            <p>

                                {{ Str::of($post->body)->words(25, '  ') }}<a href="/news/{{ $post->id }}"
                                    class="text-decoration-none"> Read More...</a>

                            </p>

                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-md-3  border border-secondary rounded p-2 my-3">

                <div class="anm">
                    <img src="{{ asset('images/newss.jpg') }}" alt="ad image" width="300" height="">
                </div>
                <style>
                    div.anm {

                      position: relative;
                      animation-name: example;
                      animation-duration: 6s;
                      animation-timing-function: linear;
                      animation-delay: 1s;
                      animation-iteration-count: infinite;
                      animation-direction: alternate;
                    }

                    @keyframes example {
                      0%   {left:0px; top:0%;}
                      100%  {left:0px; top:50%;}
                    }
                    </style>



            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                {{ $posts->links() }}
            </div>
        </div>

    </div>

