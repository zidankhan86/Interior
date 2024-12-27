@extends('backend.layout.app')
@section('content')

<link href="path/to/select2.min.css" rel="stylesheet" />
<script src="path/to/select2.min.js"></script>

<style type="text/css">
    .ck-editor__editable_inline {
        height: 150px;
    }
</style><br>
<div class="container">
    <div class="col-12 card">
        <form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h3 style="text-align: center">Team</h3>

                <div class="row row-cards">
                    <div class="col-md-12">

                        <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="employee_name" class="form-control" placeholder="Team Member Name">
                                    @if ($errors->has('employee_name'))
                                        <p class="text-danger">{{ $errors->first('employee_name') }}</p>
                                    @endif

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Position</label>
                                <input type="text" name="position" class="form-control" placeholder="Enter Position">
                                @if ($errors->has('position'))
                                    <p class="text-danger">{{ $errors->first('position') }}</p>
                                @endif

                        </div>

                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">About Employee</label>
                           <textarea name="about_employee" id="" cols="132" rows="6" class="form-control"></textarea>
                            @if ($errors->has('about_employee'))
                                <p class="text-danger">{{ $errors->first('about_employee') }}</p>
                            @endif

                    </div>
                        <div class="mb-3">
                            <label class="form-label">Employee Image</label>
                            <input type="file" class="dropify" id="dropify" name="thumbnail" class="form-control" placeholder="Type Name">
                            @if ($errors->has('thumbnail'))
                                <p class="text-danger">{{ $errors->first('thumbnail') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary"><span></span>Add</button>
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
