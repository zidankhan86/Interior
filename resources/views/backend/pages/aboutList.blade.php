@extends('backend.layout.app')
@section('content')
 

<div class="container">
    <br>
    <h2 style="text-align: center">Blog Table</h2>
    <div style="text-align: right">
        <a href="{{ route('about.form') }}" class="btn btn-primary" style="margin-right: 10px;">Add About</a>
        <a href="{{ route('about.brand') }}" class="btn btn-info" style="margin-right: 10px;">Add Brand</a>
        <a href="{{ route('about.employee') }}" class="btn btn-info" style="margin-right: 10px;">Add Employee</a>
    </div>
    <br><br>
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table">
                    <thead>
                        <tr>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            
                           
                            {{-- <th>Icon</th> --}}
                            <th>Icon Title</th>
                            <th>Icon Description</th>
                            <th>Employee Name</th>
                           
                            <th class="w-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                            <tr>
                                <!-- Thumbnail -->
                                <td data-label="Thumbnail" class="align-middle">
                                    <img src="{{ url('/uploads/' . $about->thumbnail) }}" alt="Thumbnail" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                </td>
                                
                                <!-- Title -->
                                <td data-label="Title" class="align-middle">{{ $about->title }}</td>
                               
                                {{-- <!-- Icon -->
                                <td data-label="Icon" class="align-middle">
                                    <img src="{{ url('/uploads/' . $about->icon) }}" alt="Icon" style="max-width: 50px; max-height: 50px;">
                                </td> --}}

                                <!-- Icon Title -->
                                <td data-label="Icon Title" class="align-middle">{{ $about->icon_title }}</td>

                                <!-- Icon Description -->
                                <td data-label="Icon Description" class="align-middle">{{$about->icon_description}}</td>

                                <!-- Employee Name -->
                                <td data-label="Employee Name" class="align-middle">{{ $about->employee_name }}</td>

                               

                                <!-- Actions -->
                                <td data-label="Action" class="align-middle">
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-info">Edit</a>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle align-text-top" data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                            </div>
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