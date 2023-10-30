
<style type="text/css">
.ck-editor__editable_inline{
  height: 150px;
}

</style>

<div class="container">

<div class="col-12">
    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <h3 class="card-title">Blog Form</h3>
        <div class="row row-cards">
          <div class="col-md-6">
            <div class="mb-3">
              <label class="form-label">Title</label>
              <input type="text" name="title" class="form-control"  placeholder="Title">
            </div>
          </div>

          <div class="col-sm-6 col-md-6">
            <div class="mb-">
                <label class="form-label">Select Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->type_name }}</option>
                    @endforeach
                </select>
              </div>
          </div>



          <div class="col-sm-6 col-md-6">
            <div class="mb-3 mb-0">
                <label class="form-label">Description</label>
                <textarea id="editor" rows="5" name="description" class="form-control" placeholder="Here can be your description"></textarea>
              </div>
          </div>


          <div class="col-sm-6 col-md-6">
            <div class="mb-3">
              <label class="form-label">Choose Thumbnail</label>
              <input type="file" name="thumbnail" class="form-control">
            </div>
          </div>

          <div class="col-sm-6 col-md-12">
            <div class="mb-3">
                <label class="form-label">Choose Blog post Thumbnails</label>
                <input type="file" name="post_image[]" class="form-control" multiple>
            </div>
        </div>


        <div class="col-sm-6 col-md-12">
            <div class="mb-3 mb-0">
                <label class="form-label">Post Description</label>
                <textarea id="editors" rows="5" name="post_description" class="form-control" placeholder="Here can be your post description"></textarea>
            </div>
        </div>

        <div>
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        </div>

          <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" id="" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Featured</label>
                    <select name="featured" id="" class="form-control">
                        <option value="1">True</option>
                        <option value="0">False</option>
                    </select>
                </div>

          </div>


        </div>
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">Post Blog</button>
      </div>
    </form>

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#editors'))
        .catch(error => {
            console.error(error);
        });
</script>

  </div>
</div>

