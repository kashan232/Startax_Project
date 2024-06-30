@include('User.include.header_include')
<div class="wrapper">
  <!-- Navbar -->
  @include('User.include.navbar_include')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  @include('User.include.sidebar_include')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Customer</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Customer</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('store-client') }}" method="GET">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="m-0">Client Type</label>
                    <select name="client_type" id="client_type"  class="form-control rounded-0" >
                      <option value="Individual">Individual</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="m-0">First Name</label>
                    <input type="text" name="first_name" class="form-control rounded-0" placeholder="Enter First Name" />
                  </div>

                  <div class="form-group">
                    <label class="m-0">Middel Name</label>
                    <input type="text" name="middel_name" class="form-control rounded-0" placeholder="Enter Middel Name" />
                  </div>
                  <div class="form-group">
                    <label class="m-0">Last Name</label>
                    <input type="text" name="last_name" class="form-control rounded-0" placeholder="Enter Last Name" />
                  </div>
                  <div class="form-group">
                    <label class="m-0">Father's Name</label>
                    <input type="text" name="father_name" class="form-control rounded-0" placeholder="Enter Father's Name" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="m-0">Date Of Birth</label>
                    <input type="date" name="DOB" class="form-control rounded-0" placeholder="Enter Date Of Birth" />
                  </div>
                  <div class="form-group">
                    <label class="m-0">PAN Number *</label>
                    <input type="number" name="PAN_numbr" class="form-control rounded-0" placeholder="Enter PAN Number" />
                  </div>
                  <div class="form-group">
                    <label class="m-0">Gender</label>
                    <select class="form-control rounded-0" name="gender" style="width: 100%">
                      <option selected="selected">Select Option</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="m-0">Marital Status</label>
                    <select class="form-control rounded-0 select2" name="marital_status" style="width: 100%">
                      <option selected="selected">Select Option</option>
                      <option>Married</option>
                      <option>UnMarried</option>
                    </select>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-md-12">
                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                </div>

                <!-- /.col -->
              </div>
            </form>
            <!-- /.row -->

            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
@include('User.include.footer_include')