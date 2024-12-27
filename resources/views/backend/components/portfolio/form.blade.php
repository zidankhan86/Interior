@extends('backend.layout.app')
@section('content')


<style type="text/css">
    .ck-editor__editable_inline {
        height: 150px;
    }
</style>
<link href="path/to/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">


<div class="container">
    <div class="row mt-5">
        <!-- Portfolio Form -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="card-title">Portfolio Form</h3>
                </div>
                <form action="{{ route('portfolio.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row row-cards">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="5375sft Duplex | Rangpur">
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Select Category</label>
                                    <select name="type_name_id" class="form-control js-example-basic-single">
                                        @foreach ($types as $category)
                                        <option value="{{ $category->id }}">{{ $category->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Choose Thumbnail</label>
                                    <input type="file" name="thumbnail" class="dropify form-control">
                                    @error('thumbnail')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Choose Multiple Files</h3>
                                        <input name="images[]" type="file" multiple id="image-input" />
                                        <div id="image-preview-container" class="mt-2"></div> <!-- Div to show image previews -->
                                        @error('images')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Portfolio Description</label>
                                    <textarea name="portfolio_description" id="editors" rows="5" class="form-control"
                                        placeholder="Enter portfolio description"></textarea>
                                    @error('portfolio_description')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    @error('status')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Complete Date (Optional)</label>
                                    <input type="text" name="complete_date" class="form-control" placeholder="27 Oct 2022">
                                    @error('complete_date')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Scope</label>
                                    <input type="text" name="scope" class="form-control" placeholder="Design and Build">
                                    @error('scope')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" class="form-control" placeholder="Rangpur">
                                    @error('location')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Add Portfolio</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Type Form -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="card-title">Type Form</h3>
                </div>
                <form action="{{ route('portfolioType.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Type Name</label>
                            <input type="text" name="type_name" class="form-control" placeholder="Type Name">
                            @error('type_name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
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
                        <button type="submit" class="btn btn-primary">Add Type</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('./dist/libs/dropzone/dist/dropzone-min.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script src="path/to/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop Portfolios',
            'replace': 'Drag Portfolios',
            'remove': 'Remove',
            'error': 'Oops, something went wrong.'
        }
    });

    ClassicEditor.create(document.querySelector('#editors')).catch(error => console.error(error));
</script>
<script>
    // Listen for changes in the file input
    document.getElementById('image-input').addEventListener('change', function(event) {
        let previewContainer = document.getElementById('image-preview-container');
        previewContainer.innerHTML = ''; // Clear previous previews

        // Loop through all selected files
        for (let i = 0; i < event.target.files.length; i++) {
            let file = event.target.files[i];

            // Only show images (optional)
            if (file.type.startsWith('image/')) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    // Create an image element
                    let imgElement = document.createElement('img');
                    imgElement.src = e.target.result; // Set the image source to the file's result
                    imgElement.style.width = '100px'; // Set a fixed size for the image preview
                    imgElement.style.margin = '5px'; // Add some margin between images
                    previewContainer.appendChild(imgElement); // Add image to preview container
                }

                reader.readAsDataURL(file); // Read the file as a data URL
            }
        }
    });
</script>

@endsection


