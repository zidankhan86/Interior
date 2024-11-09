@extends('backend.layout.app')

@section('content')

{{-- Include necessary CSS files --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">

<style type="text/css">
    .ck-editor__editable_inline {
        height: 150px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('portfolio.update', $portfolio->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
                <div class="card-body">
                    <h3 class="card-title text-center">Edit Portfolio</h3>
                    <div class="row row-cards">
                        {{-- Title --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title', $portfolio->title) }}" placeholder="5375sft Duplex | Rangpur">
                                @error('title')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        {{-- Category --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Select Category</label>
                                <select name="type_name_id" class="form-control js-example-basic-single">
                                    @foreach ($types as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == old('type_name_id', $portfolio->type_name_id) ? 'selected' : '' }}>
                                            {{ $category->type_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        {{-- Thumbnail --}}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" style="color: red">Choose Thumbnail (Re Enter image)</label>
                                <input type="file" name="thumbnail" class="dropify form-control" data-default-file="{{ asset('uploads/' . $portfolio->thumbnail) }}">
                                @error('thumbnail')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        {{-- Images --}}
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title" style="color: red">Choose Multiple Files (Re Enter images)</h3>
                                    <input name="images[]" type="file" multiple />
                                    @error('images')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                        </div>

                        {{-- Portfolio Description --}}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Portfolio Description</label>
                                <textarea id="editors" rows="5" name="portfolio_description" class="form-control" placeholder="Portfolio Description">{{ old('portfolio_description', $portfolio->portfolio_description) }}</textarea>
                                @error('portfolio_description')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        {{-- Status --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ old('status', $portfolio->status) == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status', $portfolio->status) == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        {{-- Complete Date --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Complete Date (Optional)</label>
                                <input type="text" name="complete_date" class="form-control" value="{{ old('complete_date', $portfolio->complete_date) }}" placeholder="27 Oct 2022">
                                @error('complete_date')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        {{-- Scope --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Scope</label>
                                <input type="text" name="scope" class="form-control" value="{{ old('scope', $portfolio->scope) }}" placeholder="Design and Build">
                                @error('scope')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        {{-- Location --}}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" class="form-control" value="{{ old('location', $portfolio->location) }}" placeholder="Rangpur">
                                @error('location')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Include necessary JS files --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

{{-- Initialize Plugins --}}
<script>
    $(document).ready(function() {
        // Select2
        $('.js-example-basic-single').select2();

        // Dropify
        $('.dropify').dropify({
            messages: {
                'default': 'Thumbnail',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happened.'
            }
        });

        // CKEditor
        ClassicEditor.create(document.querySelector('#editor')).catch(error => console.error(error));
        ClassicEditor.create(document.querySelector('#editors')).catch(error => console.error(error));
    });
</script>

@endsection
