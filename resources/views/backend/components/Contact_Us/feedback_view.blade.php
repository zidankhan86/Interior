@extends('backend.layout.app')
@section('content')
  <body>
   <br> <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Message</h1>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-4 mx-auto">
              <div class="card mb-4 box-shadow">
                <h6>See Message</h6>
                <div class="card-body">
                  <p class="card-text">{{$messages->message}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                    <small class="text-muted">{{ $messages->created_at->diffForHumans() }}</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

  </body>
</html>

@endsection
