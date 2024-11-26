@extends('backend.layout.app')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<style type="text/css">
    .ck-editor__editable_inline {
        height: 150px;
    }
</style>
<div class="container">
    <div class="col-8">
        <form action="{{ route('about.storeStep2', $about->id) }}" method="post">
            @csrf
            <div id="form-container">
                <div class="card-body"><br>
                    <h3 style="text-align: center">About Achievement</h3>
                    <h3 class="card-title">Step 2</h3>
                    <div class="about-form">
                        <div class="row row-cards">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Icon</label>
                                    <input type="text" name="icon[]" class="form-control" placeholder="Type Icon Name">
                                    @if ($errors->has('icon'))
                                        <p class="text-danger">{{ $errors->first('icon') }}</p>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Icon Title</label>
                                    <input type="text" name="icon_title[]" class="form-control" placeholder="Type Icon Title">
                                    @if ($errors->has('icon_title'))
                                        <p class="text-danger">{{ $errors->first('icon_title') }}</p>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Icon Description</label>
                                    <textarea name="icon_description[]" cols="40" rows="5" class="form-control" placeholder="Enter description"></textarea>
                                    @if ($errors->has('icon_description'))
                                        <p class="text-danger">{{ $errors->first('icon_description') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plus Button to Duplicate Form -->
            <button type="button" id="add-more-form" class="btn btn-success">+ Add More</button>

            <!-- Submit All Forms Button -->
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit All</button>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        function initializePlugins() {
            $('.dropify').dropify();
            $('.js-example-basic-single').select2();
            ClassicEditor.create(document.querySelectorAll('.ckeditor'))
                .catch(error => console.error(error));
        }
        initializePlugins();

        // Add More Form
        $('#add-more-form').click(function() {
            var newForm = $('.about-form:first').clone(); // Clone the form
            newForm.find('input, textarea').val(''); // Clear inputs and textareas
            newForm.appendTo('#form-container'); // Append the cloned form
            initializePlugins(); // Re-initialize plugins for new form
        });
    });
</script>

@endsection
