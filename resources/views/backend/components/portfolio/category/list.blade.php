@extends('backend.layout.app')

@section('content')
<div class="container">
    <br><h2 style="text-align: center">Porfolio Type Table</h2>

    <div class="row">
        <!-- Category Form Column (now on top) -->
        <div class="col-md-4">
            <form action="{{ route('portfolioType.store') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Portfolio Type</h3>
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
                </div>
            </form>
        </div>

        <!-- Category Table Column (below the form) -->
        <div class="col-md-8">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Type</th>
                                <th class="w-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td data-label="Name">{{ $category->type_name }}</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route('portfolioType.edit',$category->id) }}" class="btn">Edit</a>
                                        <a href="{{ route('portfolioType.delete',$category->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger" class="btn">delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
