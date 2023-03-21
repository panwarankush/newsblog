<x-userapp>
    <div class="container">

        <h1 class="display-4 text-center ">Post a new news. </h1>

        <hr class="border border-danger border-2 opacity-50">

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row g-4">


                <div class="col-12 mt-5">
                    <label for="title" class="fw-bold fs-3"> News Title</label>
                    <input type="text" id="title" class="form-control" name="title"
                        placeholder="Write News Title" required>
                </div>
                <div class="col-12 ">
                    <label for="body" class="fw-bold fs-3" >News</label>
                    <textarea id="body" class="form-control" name="body" placeholder="Write News Here..." style="height: 120px" required></textarea>
                </div>

                <div class="col-md-6 ">
                    <label for="category" class="fw-bold fs-3">News Category</label>
                    <select class="form-select" aria-label="category" name="category" required>
                        <option value="national">National</option>
                        <option value="international">International</option>
                        <option value="tech">Tech News</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="image" class="fw-bold fs-3">News Image</label>
                    <input class="form-control" type="file" id="image" name="image" required>
                </div>

                <div class="text-center m-5">
                    <button id="btn-submit" class="btn btn-info" type="submit">
                        Create Post
                    </button>
                </div>
            </div>
        </form>

    </div>
</x-userapp>
