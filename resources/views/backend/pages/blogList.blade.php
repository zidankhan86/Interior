@extends('backend.layout.app')
@section('content')

<div class="container">
    <br>
    <h2 style="text-align: center">Blog Table</h2>
    <div style="text-align: right">

        <a href="{{ route('category.list') }}" class="btn btn-primary" style="margin-right: 10px;"><span></span>Category</a>

        <a href="{{ route('blog.form') }}" class="btn btn-info" style="margin-right: 10px;"><span></span>Add Blog</a>

    </div>
    <br><br>
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th class="w-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td data-label="Image" class="align-middle">
                                    @foreach (unserialize($blog->post_image) as $image)
                                        <div class="d-inline-block" style="margin-right: 10px;">
                                            <img src="{{ url('/uploads/' . $image) }}" alt="Image"
                                                class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                        </div>
                                    @endforeach
                                </td>
                                <td data-label="Title" class="align-middle">{{ $blog->title }}</td>
                                <td data-label="Category" class="align-middle">{{ $blog->category->type_name }}</td>
                                <td data-label="Status" class="align-middle">
                                    {{ $blog->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td data-label="Date" class="align-middle">{{ $blog->created_at->format('D-M-Y') }}</td>
                                <td data-label="Action" class="align-middle">
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-info">Edit</a>
                                        <div class="dropdown">
                                            <a class="btn btn-danger" href="javascript:void(0);" onclick="confirmDelete('{{ route('blog.delete', $blog->id) }}')">Delete</a>

                                        </div>
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



@endsection


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function confirmDelete(url) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url; // Redirect to the delete route
        }
    });
}

</script>

