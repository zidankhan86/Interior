@extends('backend.layout.app')
@section('content')

<div class="container">
  <br>
        <!-- Category Form Column -->
        <div class="col-md-4">
            <form action="{{ route('category.update',$categories->id) }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Category Form</h3>
                        <div class="mb-3">
                            <label class="form-label">Type Name</label>
                            <input type="text" name="type_name" value="{{ $categories->type_name }}" class="form-control" placeholder="Type Name">
                            @if ($errors->has('type_name'))
                            <p class="text-danger">{{ $errors->first('type_name') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ $categories->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $categories->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary"><span></span>Update Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
  

@endsection
