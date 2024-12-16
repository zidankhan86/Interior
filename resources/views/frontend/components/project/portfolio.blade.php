
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">

</div>
        <div class="row">

@foreach ($portfolio as $item)

  <div class="col-md-4 ftco-animate">
    <div class="blog-entry">
      <a href="{{ route('portfolio.details',$item->id) }}" class="block-20" style="background-image: url({{ asset('uploads/' . $item->thumbnail) }});">
      </a>
      <div class="text d-flex py-4">

        <div class="desc pl-3">
            <h3 class="heading"><a href="#">{{ $item->title }}</a></h3>
          </div>
      </div>
    </div>
  </div>

@endforeach
</div>
{{ $portfolio->links() }}
    </div>
</section>
