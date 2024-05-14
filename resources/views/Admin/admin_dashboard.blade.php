@include('Admin.include.header_include')
  <div id="main-wrapper">
    <div class="nav-header">
      <a href="#" class="brand-logo text-dark">
        <h1>StarTax</h1>
      </a>
      <div class="nav-control">
        <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
      </div>
    </div>
   
    @include('Admin.include.navbar_include')
    
    <div class="deznav">
      @include('Admin.include.sidebar_include')
    </div>
   
    <div class="content-body">
      <!-- row -->
      <div class="container-fluid">
        <!-- Add Order -->
        <div class="row">
          <div class="col-xl-3 col-xxl-4">
            <div class="row">
              <div class="col-xl-12 col-md-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end">
                      <div>
                        <p class="fs-14 mb-1">New Sales</p>
                        <span class="fs-35 text-black font-w600">93
                          <svg class="ms-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B" />
                          </svg>
                        </span>
                      </div>
                      <canvas class="lineChart" id="chart_widget_2" height="85"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12 col-md-6">
              <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <p class="fs-14 mb-1">Event Held</p>
                        <span class="fs-35 text-black font-w600">856
                          <svg class="ms-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B" />
                          </svg>
                        </span>
                      </div>
                      <div class="d-inline-block ms-auto position-relative donut-chart-sale">
                        <span class="donut" data-peity='{ "fill": ["rgb(254, 99, 78)", "rgba(244, 244, 244, 1)"],   "innerRadius": 31, "radius": 10}'>6/8</span>
                        <small class="text-secondary">90%</small>
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
    @include('Admin.include.powerdby_include')
  </div>
  @include('Admin.include.footer_include')

  