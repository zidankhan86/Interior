@extends('backend.layout.app')
@section('content')
    <div class="container">
        <br>
        <h2 style="text-align: center">Table</h2>
        <div style="text-align: right">

            <a href="{{ route('about.employee') }}" class="btn btn-info" style="margin-right: 10px;">Add Employee</a>
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
                                <th>Employee Name</th>
                                <th class="w-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($abouts as $about)
                                <tr>
                                    <!-- Thumbnail -->
                                    <td data-label="Thumbnail" class="align-middle">
                                        <img src="{{ url('/uploads/' . $about->thumbnail) }}" alt="Thumbnail"
                                            class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                    </td>
                                    <td data-label="Employee Name" class="align-middle">{{ $about->position }}</td>
                                    <!-- Employee Name -->
                                    <td data-label="Employee Name" class="align-middle">{{ $about->employee_name }}</td>

                                    <!-- Actions -->
                                    <td data-label="Action" class="align-middle">
                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn btn-danger">Delete</a>

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
