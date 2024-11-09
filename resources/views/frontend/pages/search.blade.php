@extends('frontend.layout.app')

@section('content')


<!-- Featured Section Begin -->
<br><section class="featured spad" style="padding-top: 100px; padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Search Results</h2>
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
             <div class="d-flex align-items-center justify-content-center vh-100">
                <div class="no-results-message text-center">
                    <div class="alert alert-warning py-4">
                        <h4 class="alert-heading">No Results Found</h4>
                        <p>We couldn't find any blogs matching "<strong>{{ request('search_key') }}</strong>".</p>
                        <p class="mb-0">Try using different keywords or explore our latest blogs.</p>
                        <a href="{{ route('blog') }}" class="btn btn-primary mt-3">Browse All Blogs</a>
                    </div>
                </div>
            </div>
            
            
         @endif




        </div>
    </div>
</section>
<!-- Featured Section End -->

@endsection
