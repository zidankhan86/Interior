@extends('frontend.layout.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Residential</title>
</head>
<body><BR><BR></BR></BR><br>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Residential Interior Showcase</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header class="header">
            <h1>Residential Interior Showcase</h1>
        </header>
        <section class="intro">
            <p>Explore our stunning residential interior projects designed to bring harmony and elegance to your living spaces.</p>
        </section>
        <main class="projects-container">

            @forelse ($architects as $achitect)
                <!-- Project 1 -->
            <article class="project">
               <a href="{{ route('portfolio.details',$achitect->id) }}"> <img src="{{ asset('uploads/' . $achitect->thumbnail) }}" alt="Modern Flat Design" class="project-img"></a>
                <div class="project-content">
                    <h2>{{ $achitect->title }}</h2>
                    <p><strong>Scope:</strong> {{ $achitect->scope }}</p>
                    <p><strong>Completion:</strong> {{ $achitect->complete_date }}</p>
                    <p>Experience luxurious and modern interiors tailored to your needs. This project features open spaces, modern kitchens, and elegant bedrooms.</p>
                </div>
            </article>
            @empty
                <p>Create a portfolio for Architectural interior</p>
            @endforelse
            
            
        </main>
       
    </body>
    </html>
    
    
</body>
</html>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background: #f9f9f9;
    color: #333;
}

.header {
    background: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.intro {
    text-align: center;
    padding: 20px;
    background: #fff;
    border-bottom: 2px solid #ddd;
}

.projects-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.project {
    background: #fff;
    display: flex;
    flex-wrap: wrap;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.project-img {
    flex: 1 1 300px;
    max-width: 300px;
    height: auto;
    object-fit: cover;
}

.project-content {
    padding: 15px;
    flex: 2 1 400px;
}

.project-content h2 {
    margin-top: 0;
    color: #555;
}

.footer {
    text-align: center;
    padding: 10px;
    background: #333;
    color: #fff;
}

</style>
@endsection
