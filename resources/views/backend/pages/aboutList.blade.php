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
                                            <a href="#" class="btn btn-info">Edit</a>

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
