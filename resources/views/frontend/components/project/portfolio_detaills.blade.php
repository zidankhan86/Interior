<!-- Include Bootstrap CSS and JavaScript -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      
      <!-- Text Column -->
      <div class="col-md-4 ftco-animate">
        <h2 class="mb-3">{{ $portfolio_details->title }}</h2>
        
        <p style="margin-bottom: 5px;">Location:</p>
        <b style="display: block; margin-bottom: 10px;">{{ $portfolio_details->location }}</b>
        
        <p style="margin-bottom: 5px;">Scope:</p>
        <b style="display: block; margin-bottom: 10px;">{{ $portfolio_details->scope }}</b>
        
        <p style="margin-bottom: 5px;">Completion date:</p>
        <b style="display: block; margin-bottom: 10px;">{{ $portfolio_details->complete_date }}</b>
      </div>
      
      <!-- Image Column with Bootstrap Carousel -->
      <div id="imageSlider" class="carousel slide col-md-8 ftco-animate" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach (unserialize($portfolio_details->images) as $index => $image)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
              <img src="{{ url('/uploads/' . $image) }}" alt="Portfolio Image" class="d-block w-100 img-fluid">
            </div>
          @endforeach
        </div>
        
        <!-- Carousel controls with custom styling -->
        <button class="carousel-control-prev" type="button" data-bs-target="#imageSlider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageSlider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
    </div>
  </div>
</section>
