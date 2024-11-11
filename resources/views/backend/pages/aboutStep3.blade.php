@extends('backend.layout.app')
@section('content')
 
<link href="path/to/select2.min.css" rel="stylesheet" />
<script src="path/to/select2.min.js"></script>

<style type="text/css">
    .ck-editor__editable_inline {
        height: 150px;
    }
</style>
<div class="container">
    <div class="col-12">
        <form action="{{ route('about.storeStep3', $about->id) }}" method="post">
            @csrf
            <div class="card-body">
                <h3 class="card-title">Step 3</h3>
                <div class="row row-cards">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label"> Brand Name</label>
                            <input type="text" name="brand_name" class="form-control" placeholder="Type Name">
                            @if ($errors->has('brand_name'))
                                <p class="text-danger">{{ $errors->first('brand_name') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Brand Image</label>
                            <input type="file" class="dropify" id="dropify" name="thumbnail" class="form-control" placeholder="Type Name">
                            @if ($errors->has('thumbnail'))
                                <p class="text-danger">{{ $errors->first('thumbnail') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary"><span></span>Submit</button>
            </div>
        </form>
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
            'default': 'Image',
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


@endsection