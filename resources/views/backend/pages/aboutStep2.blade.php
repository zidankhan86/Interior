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
    <div class="col-8">
        <form action="{{ route('about.storeStep2', $about->id) }}" method="post">
            @csrf
            <div class="card-body"><br>
                <h3 style="text-align: center">About Achivement</h3>
                <h3 class="card-title">Step 2</h3>
                <div class="row row-cards">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label"> Icon</label>
                            <input type="text" name="icon" class="form-control" placeholder="Type Name">
                            @if ($errors->has('icon'))
                                <p class="text-danger">{{ $errors->first('icon') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Icon Title</label>
                            <input type="text" name="icon_title" class="form-control" placeholder="Type Name">
                            @if ($errors->has('icon_title'))
                                <p class="text-danger">{{ $errors->first('icon_title') }}</p>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Icon Description</label>
                            <textarea name="icon_description" id="" cols="40" rows="5" class="form-control" placeholder="Enter description"></textarea>
                            @if ($errors->has('icon_description'))
                                <p class="text-danger">{{ $errors->first('icon_description') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary"><span></span>Next</button>
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