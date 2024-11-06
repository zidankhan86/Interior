{{-- <section class="slider mt-4">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">

                @foreach ($latestBlog as $blog)
                    <div class="slider-item">
                        <div class="slider-item-content">
                            <div class="post-thumb mb-4">
                                <a href="{{ route('blog.view', $blog->id) }}">
                                    <img src="{{ url('/uploads/' . $blog->thumbnail) }}" alt="" class="img-fluid">
                                </a>
                            </div>

                            <div class="slider-post-content">
                                <span
                                    class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">{{ $blog->Category->type_name }}</span>
                                <h3 class="post-title mt-1"><a
                                        href="{{ route('blog.view', $blog->id) }}">{{ $blog->title }}</a></h3>
                                <span
                                    class=" text-muted  text-capitalize">{{ $blog->created_at->format('Y M d') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">

                    @foreach ($blogs as $blog)
                        <div class="col-lg-3 col-md-6">
                            <article class="post-grid mb-5">
                                <a class="post-thumb mb-4 d-block" href="{{ route('blog.view', $blog->id) }}">
                                    <img src="{{ url('/uploads/' . $blog->thumbnail) }}" alt=""
                                        class="img-fluid w-100">
                                </a>
                                <span
                                    class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{ $blog->Category->type_name }}</span>
                                <h3 class="post-title mt-1"><a
                                        href="{{ route('blog.view', $blog->id) }}">{{ $blog->title }}</a></h3>

                                <span
                                    class="text-muted letter-spacing text-uppercase font-sm">{{ $blog->created_at->format('Y-M-d') }}
                                </span>

                            </article>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="m-auto">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</section> --}}


@extends('frontend.layout.app')

@section('content')



<section class="ftco-section">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="frontend/images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <h3>Office Interior Design in Paris</h3>
                    </div>
                    <a href="frontend/images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="frontend/images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <h3>Office Interior Design in Paris</h3>
                    </div>
                    <a href="frontend/images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="frontend/images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <h3>Office Interior Design in Paris</h3>
                    </div>
                    <a href="frontend/images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="frontend/images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <h3>Office Interior Design in Paris</h3>
                    </div>
                    <a href="frontend/images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="frontend/images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <h3>Office Interior Design in Paris</h3>
                    </div>
                    <a href="frontend/images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="frontend/images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <h3>Office Interior Design in Paris</h3>
                    </div>
                    <a href="frontend/images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="frontend/images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <h3>Office Interior Design in Paris</h3>
                    </div>
                    <a href="frontend/images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="frontend/images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <h3>Office Interior Design in Paris</h3>
                    </div>
                    <a href="frontend/images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
</section>



@endsection