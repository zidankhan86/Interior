<link href="path/to/select2.min.css" rel="stylesheet" />
<script src="path/to/select2.min.js"></script>

<style type="text/css">
    .ck-editor__editable_inline {
        height: 150px;
    }
</style>
<div class="container">
    <div class="row">
      

        <br><br><div class="col-md-8">
            <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <br><br><h3 class="card-title" style="text-align: center">Blog Form</h3>
                    <div class="row row-cards">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Select Category</label>
                                <select name="category_id" id="js-example-basic-single" class="form-control js-example-basic-single">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea id="editor" rows="5" name="description" class="form-control" placeholder="Here can be your description"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Choose Thumbnail</label>
                                <input type="file" name="thumbnail" class="dropify form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Choose Images</label>
                                <input type="file" name="post_image[]" class="filepond form-control" multiple>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Post Description</label>
                                <textarea id="editors" rows="5" name="post_description" class="form-control" placeholder="Here can be your post description"></textarea>
                            </div>
                        </div>

                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Featured</label>
                                <select name="featured" class="form-control">
                                    <option value="1">True</option>
                                    <option value="0">False</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Hashtags (comma-separated)</label>
                                <input type="text" name="hashtags" class="form-control" placeholder="E.g., #Health, #Game, #Tour">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Post Blog</button>
                </div>
            </form>
        </div>

        <div class="col-md-4">
          <form action="{{ route('category.store') }}" method="post">
              @csrf
              <div class="card-body"><br><br>
                  <h2 class="card-title" style="text-align: center">Category Form</h2>
                  <div class="mb-3">
                      <label class="form-label">Type Name</label>
                      <input type="text" name="type_name" class="form-control" placeholder="Type Name">
                      @if ($errors->has('type_name'))
                          <p class="text-danger">{{ $errors->first('type_name') }}</p>
                      @endif
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Status</label>
                      <select name="status" class="form-control">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                      </select>
                  </div>
              </div>
              <div class="card-footer text-end">
                  <button type="submit" class="btn btn-primary">Create Category</button>
              </div>
          </form>
      </div>
    </div>
</div>

{{-- DROPIFY --}}
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Dropify CSS and JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

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

<style type="text/css">
    .ck-editor__editable_inline {
        height: 150px;
    }
</style>

<script>
    $('.dropify').dropify({
        messages: {
            'default': 'Thumbnail',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happened.'
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
