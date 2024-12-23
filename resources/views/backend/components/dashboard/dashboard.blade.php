 <!-- Page body -->
 <div class="page-body">
     <div class="container-xl">
         <div class="row row-deck row-cards">
             <div class="col-sm-6 col-lg-3">
                 <div class="card">
                     <div class="card-body">
                         <div class="d-flex align-items-center">
                             <div class="subheader">Number of users</div>
                             <div class="ms-auto lh-1">
                                 <div class="dropdown">

                                     <div class="dropdown-menu dropdown-menu-end">

                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="h1 mb-3">{{ $total_users }}</div>
                         <div class="d-flex mb-2">

                         </div>

                     </div>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-3">
                 <div class="card">
                     <div class="card-body">
                         <div class="d-flex align-items-center">
                             <div class="subheader">Total Portfolio</div>
                             <div class="ms-auto lh-1">
                                 <div class="dropdown">

                                     <div class="dropdown-menu dropdown-menu-end">

                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="d-flex align-items-baseline">
                             <div class="h1 mb-0 me-2">{{ $total_portfolio }}</div>
                             <div class="me-auto">

                             </div>
                         </div>
                     </div>

                 </div>
             </div>
             <div class="col-sm-6 col-lg-3">
                 <div class="card">
                     <div class="card-body">
                         <div class="d-flex align-items-center">
                             <div class="subheader">Total Blog</div>
                             <div class="ms-auto lh-1">
                                 <div class="dropdown">

                                     <div class="dropdown-menu dropdown-menu-end">

                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="d-flex align-items-baseline">
                             <div class="h1 mb-3 me-2">{{ $total_blog }}</div>

                         </div>

                     </div>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-3">
                 <div class="card">
                     <div class="card-body">
                         <div class="d-flex align-items-center">
                             <div class="subheader">Total Team Members</div>
                             <div class="ms-auto lh-1">
                                 <div class="dropdown">

                                     <div class="dropdown-menu dropdown-menu-end">

                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="d-flex align-items-baseline">
                             <div class="h1 mb-3 me-2">{{ $total_team_members }}</div>
                             <div class="me-auto">

                             </div>
                         </div>

                     </div>
                 </div>
             </div>


                 <div class="container">
                     <br>

                     <br><br>
                     <div class="col-12">
                         <div class="card">
                             <div class="table-responsive">
                                 <table class="table table-vcenter table-mobile-md card-table">
                                     <thead>
                                         <tr>
                                             <th>Image</th>
                                             <th>Title</th>
                                             <th>Category</th>
                                             <th>Status</th>
                                             <th>Date</th>
                                             <th class="w-1">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($blogs as $blog)
                                             <tr>
                                                 <td data-label="Image" class="align-middle">
                                                     @foreach (unserialize($blog->post_image) as $image)
                                                         <div class="d-inline-block" style="margin-right: 10px;">
                                                             <img src="{{ url('/uploads/' . $image) }}" alt="Image"
                                                                 class="img-thumbnail"
                                                                 style="max-width: 100px; max-height: 100px;">
                                                         </div>
                                                     @endforeach
                                                 </td>
                                                 <td data-label="Title" class="align-middle">{{ $blog->title }}</td>
                                                 <td data-label="Category" class="align-middle">
                                                     {{ $blog->category->type_name }}</td>
                                                 <td data-label="Status" class="align-middle">
                                                     {{ $blog->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                 <td data-label="Date" class="align-middle">
                                                     {{ $blog->created_at->format('D-M-Y') }}</td>
                                                 <td data-label="Action" class="align-middle">
                                                     <div class="btn-list flex-nowrap">
                                                         <a href="{{ route('blog.edit', $blog->id) }}"
                                                             class="btn btn-info">Edit</a>
                                                         <div class="dropdown">
                                                             <button
                                                                 class="btn btn-secondary dropdown-toggle align-text-top"
                                                                 data-bs-toggle="dropdown">Actions</button>
                                                             <div class="dropdown-menu dropdown-menu-end">
                                                                 <a class="dropdown-item" href="javascript:void(0);" onclick="confirmDelete('{{ route('blog.delete', $blog->id) }}')">Delete</a>

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
                     {{ $blogs->links() }}

                 </div>

         </div>
     </div>
 </div>
