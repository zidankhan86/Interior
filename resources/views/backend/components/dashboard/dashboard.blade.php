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
                <div class="subheader">Total Liked</div>
                <div class="ms-auto lh-1">
                  <div class="dropdown">

                    <div class="dropdown-menu dropdown-menu-end">
                  
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-0 me-2">{{ $total_liked }}</div>
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
                <div class="subheader">Total Comments</div>
                <div class="ms-auto lh-1">
                  <div class="dropdown">
                   
                    <div class="dropdown-menu dropdown-menu-end">
                 
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-3 me-2">{{ $total_comments }}</div>
                <div class="me-auto">
                 
                </div>
              </div>
              
            </div>
          </div>
        </div>
      
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Users</h3>
             

<div class="container">
 
  <div class="col-12">
      <div class="card">
        <div class="table-responsive">
          <table
  class="table table-vcenter table-mobile-md card-table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Role</th>
                <th class="w-1"></th>
              </tr>
            </thead>
            <tbody>

              @foreach ($users as $user)
              <tr>
                <td data-label="Name" >
                  <div class="d-flex py-1 align-items-center">
                    
                    <div class="flex-fill">
                      <div class="font-weight-medium">{{ $user->name }}</div>
                      <div class="text-muted"><a href="#" class="text-reset">{{ $user->email }}</a></div>
                    </div>
                  </div>
                </td>
                <td data-label="Title" >
                  <div>{{ $user->role }}</div>
                
                </td>
                <td class="text-muted" data-label="Role" >
                  {{ $user->role }}
                </td>
                <td>
                  <div class="btn-list flex-nowrap">
                    
                    <div class="dropdown">
                     
                     
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

            </div>
          </div>
        </div>
        




      </div>
    </div>
  </div>
