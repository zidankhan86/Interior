@extends('frontend.layout.app')

@section('content')

    <!-- Header Section -->
    <div class="container" style="padding-top: 100px;">
        <div class="jumbotron text-center" style="background-color: #f5f5f5; padding-top: 100px; padding-bottom: 50px; border-radius: 15px;">
            <h1 class="display-4" style="color: #08111b;"><strong>Commercial Interior Projects</strong></h1>
            <p class="lead" style="color: #6c757d;">Showcasing our finest commercial interior designs.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button" style="background-color: #1e221f; border-color: #28a745;">See More</a>
        </div>
    </div>

    <!-- Project Cards -->
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <!-- Sample Project Card -->
            @forelse ($residential as $row)
            <div class="col-md-4">
                <div class="card project-card">
                    <img src="{{ asset('uploads/' . $row->thumbnail) }}" class="card-img-top project-image" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">{{ $row->title }}</h5>
                        <p class="card-text">A brief description of the project. Highlight the key features and design elements.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
            @empty
            <strong>No Portfolio added yet</p>
            @endforelse

            <!-- Repeat for more projects -->
        </div>
    </div><br><br>
@endsection
