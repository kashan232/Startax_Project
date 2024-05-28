@include('User.include.header_include')

<div class="app">
  <!-- header sections Start -->
  @include('User.include.navbar_include')
  <!-- header sections end -->

  <div class="wrapper">
    <!-- SIde Bar Start -->
    @include('User.include.sidebar_include')
    <!-- SIde Bar ENd  -->

    <div class="main-container">
      <!-- COnetnt_wrpper Sec Start -->
      <!-- COnetnt_wrpper header Start -->
      <!-- <div class="main-header">
            <a class="menu-link-main" href="#">All Menu</a>
            <div class="header-menu">
              <a class="main-header-link is-active" href="#">Links Here</a>
              <a class="main-header-link" href="#">Links Here</a>
              <a class="main-header-link" href="#">Links Here</a>
            </div>
          </div> -->
      <!-- COnetnt_wrpper header Start -->
      <div class="content-wrapper">
        <div class="content-section">
          <div class="content-section-title">All Clients</div>

          <div class="tabel_main">
            <div class="table-responsive text-nowrap" style="padding: 10px 10px 10px 0">
              <table id="userTable">
                <thead>
                  <tr>
                    <th>SNO#</th>
                    <th>Name</th>
                    <th>Client Type</th>
                    <th>DOB / DOI</th>
                    <th>PAN</th>
                    <th>AY</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($clients as $client)
                  <tr onclick="window.location='{{ route('client-detail', ['id' => $client->id]) }}';" style="cursor:pointer;">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $client->personal_details['first_name'] }} {{ $client->personal_details['middel_name'] }} {{ $client->personal_details['last_name'] }}</td>
                    <td>{{ $client->personal_details['client_type'] }}</td>
                    <td>{{ $client->personal_details['DOB'] }}</td>
                    <td>{{ $client->personal_details['PAN_numbr'] }}</td>
                    <td>{{ $client->personal_details['AY'] }}</td>
                    <td>
                      <div class="button-wrapper">
                        <div class="menu">
                          <button class="dropdown">
                            <ul>
                              <li><a href="#">Go to Discover</a></li>
                              <li><a href="#">Learn more</a></li>
                              <li><a href="#">Delete</a></li>
                            </ul>
                          </button>
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
      <!-- COnetnt_wrpper Sec Start -->
    </div>
  </div>
  <div class="overlay-app"></div>
</div>

<!-- jQuery and Bootstrap -->
@include('User.include.footer_include')

</body>

</html>