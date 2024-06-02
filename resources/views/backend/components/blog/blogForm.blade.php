
<style type="text/css">
.ck-editor__editable_inline{
  height: 150px;
}

</style>

<div class="container">

<div class="col-12">
    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data" >
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
              <input type="file" name="thumbnail" class="dropify form-control">
            </div>
          </div>

          <div class="col-sm-6 col-md-12">
            <div class="mb-3">
                <label class="form-label">Choose Blog post Thumbnails</label>
                <input type="file" name="post_image[]" class="dropzone form-control" id="myDropzone" multiple> 
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



          <div class="col-sm-6 col-md-12">
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
</div>
{{-- DROPZONE --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.css">
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
    .ck-editor__editable_inline{
    height: 150px;
    }
    </style>
    
        <script>
          $('.dropify').dropify({ messages: {
          'default': 'Choose Thumbnail', 'replace': 'Drag and drop or click to replace', 'remove': 'Remove',
          'error':	'Ooops, something wrong happended.'
          }
          });
        </script>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
    <script>
        Dropzone.autoDiscover = false;

        $(document).ready(function () {
            var myDropzone = new Dropzone("#myDropzone", {
                paramName: "images",
                maxFilesize: 4,
                acceptedFiles: "image/*",
                addRemoveLinks: true,
                autoProcessQueue: false,
                uploadMultiple: true,
                parallelUploads: 5,
            });

            $("#submit-all").on("click", function () {
                myDropzone.processQueue();
            });

            myDropzone.on("complete", function (file) {
                file.previewElement.remove();
            });

            myDropzone.on("success", function (file, response) {
                console.log(response);
                myDropzone.removeAllFiles();

                // Show success toast message
                toastr.success('Images uploaded successfully');
            });
        });
    </script>