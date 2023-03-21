<x-userapp>
    <div class="container p-5">

        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="control-group col-12 my-2">
                    <label for="title" class="fs-4 fw-bolder">Post Title</label>
                    <input type="text" id="title" class="form-control" name="title" placeholder="Enter Post Title"
                        value="{{ $post->title }}" required>
                </div>
                <div class="control-group col-12 my-2">
                    <label for="body" class="fs-4 fw-bolder">Post Body</label>
                    <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body" rows="5" required>{{ $post->body }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="control-group col-12 my-2 ">
                    <label for="category" class=" fs-4 fw-bolder">News Category</label>
                    <select class="form-select" aria-label="category" name="category" required>
                        <option selected>{{ $post->category }}</option>
                        <option value="national">National</option>
                        <option value="international">International</option>
                        <option value="tech">Tech News</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="control-group col-12 text-center my-2">
                    <button id="btn-submit" class="btn btn-primary">
                        Update Post
                    </button>
                </div>
            </div>
        </form>
        <form id="delete-frm" class="text-center mt-2" action="/news/{{ $post->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Delete Post</button>
        </form>
    </div>
</x-userapp>
