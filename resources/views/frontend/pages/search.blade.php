@extends('frontend.layout.app')

@section('content')

@include('frontend.components.fixed.blogHeader')


<!-- Featured Section Begin -->
<br><section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Search Blogs </h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter">


            @if($searchResult->count()>0)
                @foreach($searchResult as $blog)


                <div class="col-lg-3 col-md-6">
                    <article class="post-grid mb-5">
                        <a class="post-thumb mb-4 d-block" href="{{ route('blog.view',$blog->id) }}">
                            <img src="{{ url('/uploads/'.$blog->thumbnail) }}" alt="" class="img-fluid w-100">
                        </a>
                        <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{ $blog->Category->type_name }}</span>
                        <h3 class="post-title mt-1">{{ $blog->title }}</a></h3>

                        <span class="text-muted letter-spacing text-uppercase font-sm"> {{ $blog->created_at->format('Y-M-d') }}
                        </span>

                    </article>
                </div>


             @endforeach
             @else
             <p class="alert alert-danger">No Blog Match.</p>
         @endif




        </div>
    </div>
</section>
<!-- Featured Section End -->

@endsection
