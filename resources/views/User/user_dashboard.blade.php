<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/user_panel_assets/plugins/fontawesome-free/css/all.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- DataTables -->
  <link rel="stylesheet" href="/user_panel_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="/user_panel_assets/dist/css/adminlte.min.css" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
  <link rel="stylesheet" href="/user_panel_assets/dist/css/Style.css">
</head>

<body class="body hold-transition layout-fixed sidebar-mini-md sidebar-collapse ">

  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Uplinks</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Uplinks</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Uplinks</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Uplinks</a>
        </li>
      </ul>



      <!-- SEARCH FORM -->
      <form class="form-inline ml-auto">

        <div class="drkMode ml-auto">
          <div class="inner_div_drk mr-3">
            <img src="/user_panel_assets/dist/img/moon.png" alt="" class="drkimg">
            <img src="/user_panel_assets/dist/img/sun.png" alt="" class="lightimg">
          </div>
        </div>

        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="./index.html" class="brand-link">
        <img src="/user_panel_assets/dist/img/favicon.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">Star Tax</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/user_panel_assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="./index.html" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Client
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./addClient.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Client</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Client</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

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
                      <th>Date</th>
                      <th>Customer</th>
                      <th>Country</th>
                      <th>Total Status</th>
                      <th>Total Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-toggle="modal" data-target="#modal-default">
                      <td>1</td>
                      <td>Mar 29, 2024</td>
                      <td>Abdul Harvey I V2</td>
                      <td>United States</td>
                      <td>$32,671.00</td>
                      <td>Order Placed</td>
                      <td class="d-flex align-items-center justify-content-center">
                        <button type="button" class="btn btn-block btn-info mr-2" style="width: fit-content">
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                        <button type="button" style="width: fit-content" class="btn btn-block btn-danger m-0">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                        </tdc>
                    </tr>
                    <tr data-toggle="modal" data-target="#modal-default">
                      <td>1</td>
                      <td>Mar 29, 2024</td>
                      <td>Abdul Harvey I V2</td>
                      <td>United States</td>
                      <td>$32,671.00</td>
                      <td>Order Placed</td>
                      <td class="d-flex align-items-center justify-content-center">
                        <button type="button" class="btn btn-block btn-info mr-2" style="width: fit-content">
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                        <button type="button" style="width: fit-content" class="btn btn-block btn-danger m-0">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                        </tdc>
                    </tr>
                    <tr data-toggle="modal" data-target="#modal-default">
                      <td>1</td>
                      <td>Mar 29, 2024</td>
                      <td>Abdul Harvey I V2</td>
                      <td>United States</td>
                      <td>$32,671.00</td>
                      <td>Order Placed</td>
                      <td class="d-flex align-items-center justify-content-center">
                        <button type="button" class="btn btn-block btn-info mr-2" style="width: fit-content">
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                        <button type="button" style="width: fit-content" class="btn btn-block btn-danger m-0">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                        </tdc>
                    </tr>
                    <tr data-toggle="modal" data-target="#modal-default">
                      <td>1</td>
                      <td>Mar 29, 2024</td>
                      <td>Abdul Harvey I V2</td>
                      <td>United States</td>
                      <td>$32,671.00</td>
                      <td>Order Placed</td>
                      <td class="d-flex align-items-center justify-content-center">
                        <button type="button" class="btn btn-block btn-info mr-2" style="width: fit-content">
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                        <button type="button" style="width: fit-content" class="btn btn-block btn-danger m-0">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                        </tdc>
                    </tr>
                    <tr data-toggle="modal" data-target="#modal-default">
                      <td>1</td>
                      <td>Mar 29, 2024</td>
                      <td>Abdul Harvey I V2</td>
                      <td>United States</td>
                      <td>$32,671.00</td>
                      <td>Order Placed</td>
                      <td class="d-flex align-items-center justify-content-center">
                        <button type="button" class="btn btn-block btn-info mr-2" style="width: fit-content">
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                        <button type="button" style="width: fit-content" class="btn btn-block btn-danger m-0">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                        </tdc>
                    </tr>
                    <tr data-toggle="modal" data-target="#modal-default">
                      <td>1</td>
                      <td>Mar 29, 2024</td>
                      <td>Abdul Harvey I V2</td>
                      <td>United States</td>
                      <td>$32,671.00</td>
                      <td>Order Placed</td>
                      <td class="d-flex align-items-center justify-content-center">
                        <button type="button" class="btn btn-block btn-info mr-2" style="width: fit-content">
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                        <button type="button" style="width: fit-content" class="btn btn-block btn-danger m-0">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                        </tdc>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>SNO#</th>
                      <th>Date</th>
                      <th>Customer</th>
                      <th>Country</th>
                      <th>Total Status</th>
                      <th>Total Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
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
              <div class="form-group">
                <label class="m-0">Select Years</label>
                <select class="form-control rounded-0 select2" style="width: 100%">
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
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="clientData.html"> <button type="button" class="btn btn-primary">Work On Client</button></a>
            </div>
          </div>
          <!-- Modal -->




        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <script src="/user_panel_assets/dist/js/mainProper.js"></script>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="/user_panel_assets/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="/user_panel_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- DataTables -->
      <script src="/user_panel_assets/plugins/datatables/jquery.dataTables.js"></script>
      <script src="/user_panel_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
      <!-- AdminLTE App -->
      <script src="/user_panel_assets/dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="/user_panel_assets/dist/js/demo.js"></script>
      <!-- page script -->

      <script>
        $(function() {
          $("#example1").DataTable();
          $("#example2").DataTable({
            paging: true,
            lengthChange: false,
            searching: false,
            ordering: true,
            info: true,
            autoWidth: false,
          });
        });
      </script>
</body>

</html>