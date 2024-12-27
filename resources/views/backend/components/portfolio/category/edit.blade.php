<!-- resources/views/portfolioType/edit.blade.php -->
@extends('backend.layout.app')

@section('content')
<div class="container ">
    <br>

    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
        <h2><strong>Portfolio Type/Edit</strong></h2>

            <form action="{{ route('portfolioType.update', $portfolioType->id) }}" method="post">
                @csrf
                @method('PUT') <!-- This method is necessary to indicate the update request -->
                <div class="card ">
                    <div class="card-body">
                        <h3 class="card-title">Edit Portfolio Type</h3>
                        <div class="mb-3">
                            <label class="form-label">Type Name</label>
                            <input type="text" name="type_name" class="form-control" value="{{ $portfolioType->type_name }}" placeholder="Type Name">
                            @if ($errors->has('type_name'))
                                <p class="text-danger">{{ $errors->first('type_name') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ $portfolioType->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $portfolioType->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Update Portfolio Type</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
