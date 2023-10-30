

<div class="container">
    <br><h2 style="text-align: center">Category Table</h2>
    <div style="text-align: right">
        <a href="{{ route('blog.form') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Blog</a>
    </div><br><br>
    <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table
    class="table table-vcenter table-mobile-md card-table">
              <thead>
                <tr>
                    <th>Title</th>
                  <th>Category Type</th>
                  <th>Category Type</th>
                  <th>Category Type</th>
                  <th>Category Type</th>
                  <th>Category Type</th>
                  <th class="w-1">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    @foreach ($blogs as $blog)
                    <tr>


                        <td data-label="image" >
                                 @foreach(unserialize($blog->post_image) as $image)
                            <div class="col-md-3" style="margin-right: 10px;">
                                <img src="{{ url('/uploads/' . $image) }}" alt="Image" class="img-thumbnail">
                            </div>
                                  @endforeach



                        <td>

                        <td data-label="Name" >
                            {{ $blog->title }}</td>
                        <td>

                    <div class="btn-list flex-nowrap">
                      <a href="#" class="btn">
                        Edit
                      </a>
                      <div class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                          Actions
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>


                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach


              </tbody>
            </table>
          </div>
        </div>
      </div>

</div>
