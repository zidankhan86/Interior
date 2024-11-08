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
    <div class="row">
      

        <br><br><div class="col-md-8">
            <form action="{{ route('portfolio.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <br><br><h3 class="card-title" style="text-align: center">Portfolio Form</h3>
                    <div class="row row-cards">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="5375sft Duplex | Rangpur">
                            </div>
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Select Category</label>
                                <select name="type_name_id" id="js-example-basic-single" class="form-control js-example-basic-single">
                                    @foreach ($types as $category)
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
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Choose Thumbnail</label>
                                <input type="file" name="thumbnail" class="dropify form-control">
                            </div>
                            @error('thumbnail')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                              <div class="card-body">
                                <h3 class="card-title">Choose Multiple File</h3>
                                
                                  <div class="fallback">
                                    <input name="images[]" type="file"  multiple  />
                                  </div>
                                  @error('images')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                              </div>
                            </div>
                          </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Portfolio Description</label>
                                <textarea id="editors" rows="5" name="portfolio_description" class="form-control" placeholder="Here can be your post description"></textarea>
                            </div>
                            @error('portfolio_description')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                        </div>

                       

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            @error('status')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Complete date (Optional)</label>
                                <div class="mb-3">
                                   
                                    <input type="text" name="complete_date" class="form-control" placeholder="27 oct 2022">
                                </div>
                                
                            </div>
                            @error('complete_date')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Scope</label>
                                <div class="mb-3">
                                   
                                    <input type="text" name="scope" class="form-control" placeholder="Design and Build">
                                </div>
                              
                            </div>
                            @error('scope')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" class="form-control" placeholder="Rangpur">
                            </div>
                            @error('location')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                        </div>
                    </div>

                    
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary"><span></span>Add</button>
                </div>
            </form>
        </div>

        <div class="col-md-4">
          <form action="{{ route('portfolioType.store') }}" method="post">
              @csrf
              <div class="card-body"><br><br>
                  <h2 class="card-title" style="text-align: center">Type Form</h2>
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
                  <button type="submit" class="btn btn-primary"><span></span>Add</button>
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
{{-- Ck-editor --}}
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


<script src="{{asset ('./dist/libs/dropzone/dist/dropzone-min.js?1692870487') }}" defer></script>

@endsection