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
        <form action="{{ route('about.storeStep1') }}" method="post">
            @csrf
            <div class="card-body"><br>
                <h3 style="text-align: center"><b>Setup About</b></h3>
                <h3 class="card-title">Step 1</h3>
                <div class="row row-cards">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label"> Title</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}"  placeholder="The Inception">
                            @if ($errors->has('title'))
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">About Description</label>
                            <textarea id="editor" rows="5" name="description" class="form-control" placeholder="Here can be your description"></textarea>
                            @if ($errors->has('description'))
                                <p class="text-danger">{{ $errors->first('description') }}</p>
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