@extends('frontend.layout.app')

@section('content')

<br><br><br>

<body style="background: #f9f9f9; margin-top: 50px;">
    <!-- Header Section -->
    <header class="header" style="background: linear-gradient(135deg, #72EDF2 10%, #5151E5 100%); color: white; padding: 60px 0; text-align: center;">
        <h1 style="font-size: 2.5rem; margin-bottom: 0.5rem;">Residential Interior Showcase</h1>
        <p style="font-size: 1.2rem; margin-top: 0;">Explore our stunning residential interior projects designed to bring harmony and elegance to your living spaces.</p>
    </header>

    <main class="projects-container" style="display: flex; flex-wrap: wrap; gap: 20px; padding: 40px 20px; max-width: 1200px; margin: 0 auto;">
        @forelse ($architects as $architect)
            <!-- Project Card -->
            <article class="project" style="background: rgb(255, 253, 253); border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(117, 98, 98, 0.1); flex: 1 1 calc(33.333% - 20px); margin-bottom: 20px; transition: transform 0.3s ease;">
                <a href="{{ route('portfolio.details', $architect->id) }}">
                    <img src="{{ asset('uploads/' . $architect->thumbnail) }}" alt="{{ $architect->title }}" class="project-img" style="width: 100%; height: 300px; object-fit: cover;">
                </a>
                <div class="project-content" style="padding: 20px;">
                    <h2 style="color: #333; font-size: 1.5rem; margin-top: 0;">{{ $architect->title }}</h2>
                    <p><strong>Scope:</strong> {{ $architect->scope }}</p>
                    <p><strong>Completion:</strong> {{ $architect->complete_date }}</p>
                    <p>{!! $architect->portfolio_description !!}</p>
                    <div style="display: flex; justify-content: center; align-items: center;"> <a href="{{ route('portfolio.details', $architect->id) }}" class="btn btn-info" style="background-color: #5151E5; border-color: #5151E5;">View Project</a> </div>
                </div>
            </article>
        @empty
            <p style="flex: 1 1 100%; text-align: center;">Create a portfolio for Architectural interior</p>
        @endforelse
    </main>


    <style>
        .project:hover {
            transform: translateY(-10px);
        }
        .project-img:hover {
            transform: scale(1.05);
        }
    </style>
</body>
@endsection
