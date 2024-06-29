@include('User.include.header_include');
<div class="wrapper">
  <!-- Navbar -->
  @include('User.include.navbar_include');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('User.include.sidebar_include');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="ind">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Clients</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SNO#</th>
                    <th>Name</th>
                    <th>Pan Number</th>
                    <th>Father Name</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($clients as $client)
                  <tr data-id="{{ $client->id }}" data-toggle="modal" data-target="#modal-default">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $client->first_name }} {{ $client->middel_name }} {{ $client->last_name }}</td>
                    <td>{{ $client->PAN_numbr }}</td>
                    <td>{{ $client->father_name }}</td>
                    <td>{{ $client->client_type }}</td>
                    <td class="d-flex align-items-center justify-content-center">
                      <button type="button" class="btn btn-block btn-info mr-2" style="width: fit-content">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                      </button>
                      <button type="button" style="width: fit-content" class="btn btn-block btn-danger m-0">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


    <!-- Modal -->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Client Work</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="GET" action="{{ route('client-catalog') }}" id="client-detail-form">
              <input type="text" id="client-id" name="client_id">
              <div class="form-group">
                <label class="m-0">Select Years</label>
                <select class="form-control rounded-0 select2" name="year" style="width: 100%">
                  <option selected="selected">Select Option</option>
                  <option value="2024">2024-2025</option>
                  <option value="2023">2023-2024</option>
                  <option value="2022">2022-2023</option>
                  <option value="2021">2021-2022</option>
                  <option value="2020">2020-2021</option>
                  <option value="2019">2019-2020</option>
                  <option value="2018">2018-2019</option>
                  <option value="2017">2017-2018</option>
                  <option value="2016">2016-2017</option>
                  <option value="2015">2015-2016</option>
                  <option value="2014">2014-2015</option>
                  <option value="2013">2013-2014</option>
                  <option value="2012">2012-2013</option>
                  <option value="2011">2011-2012</option>
                </select>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Work On Client</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



    @include('User.include.footer_include');

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const tableRows = document.querySelectorAll('#example1 tbody tr');
        const clientIdInput = document.getElementById('client-id');
        const clientDetailForm = document.getElementById('client-detail-form');

        tableRows.forEach(row => {
          row.addEventListener('click', function() {
            const clientId = this.getAttribute('data-id');
            clientIdInput.value = clientId;
          });
        });
      });
    </script>