<div class="container">
  <br><h2 style="text-align: center">Category Table</h2>
  <div class="row">
      <!-- Category Table Column -->
      <div class="col-md-8">
          <div class="card">
              <div class="table-responsive">
                  <table class="table table-vcenter table-mobile-md card-table">
                      <thead>
                          <tr>
                              <th>Id</th>
                              <th>Category Type</th>
                              <th class="w-1">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @forelse ( $categories as $category )

                          <tr>
                              <td>{{ $category->id }}</td>
                              <td data-label="Name">{{ $category->type_name }}</td>
                              <td>
                                  <div class="btn-list flex-nowrap">
                                      <a href="{{ route('category.edit',$category->id) }}" class="btn">Edit</a>
                                      <a href="{{ route('category.delete', $category->id) }}" class="btn" onclick="return confirmDelete()">Delete</a>

                                  </div>
                              </td>
                          </tr>

                          @empty
                              <br><p style="text-align: center"><b>Create a category first</b></p>
                          @endforelse ()
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

      <!-- Category Form Column -->
      <div class="col-md-4">
          <form action="{{ route('category.store') }}" method="post">
              @csrf
              <div class="card">
                  <div class="card-body">
                      <h3 class="card-title">Category Form</h3>
                      <div class="mb-3">
                          <label class="form-label">Type Name</label>
                          <input type="text" name="type_name" class="form-control" placeholder="Type Name">
                          @if ($errors->has('type_name'))
                          <p class="text-danger">{{ $errors->first('type_name') }}</p>
                          @endif
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Status</label>
                          <select name="status" class="form-control">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                          </select>
                      </div>
                  </div>
                  <div class="card-footer text-end">
                      <button type="submit" class="btn btn-primary"><span></span>Create Category</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>
<script> function confirmDelete() { return confirm('Do you want to delete?'); } </script>
