

<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contact Information</h2>
        </div>
        
      </div>
      <div class="row block-9">
        <div class="col-md-6 order-md-last pr-md-5">
          <form action="{{ route('contact.store') }}" method="post">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="tel" name="phone" class="form-control" placeholder="Your Phone">
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>

        <div class="col-md-6">
            <div class="w-100"></div>
        <div class="col-md-6">
          <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
        </div>
        <div class="col-md-6">
          <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
        </div>
        <div class="col-md-6">
          <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
        </div>
        <div class="col-md-6">
          <p><span>Website</span> <a href="#">yoursite.com</a></p>
        </div>
        </div>
      </div>
    </div>
  </section>