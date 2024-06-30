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
      
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Traffic summary</h3>
              <div id="chart-mentions" class="chart-lg"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Locations</h3>
              <div class="ratio ratio-21x9">
                <div>
                  <div id="map-world" class="w-100 h-100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>




      </div>
    </div>
  </div>
