<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kelola Akun</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="alumni/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="alumni/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="alumni/assets/css/style.css">
  <!-- data table -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" media="screen">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="alumni/assets/images/binterbusih.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="alumni/assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="alumni/assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="alumni/https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="alumni/assets2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="alumni/assets2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link href="alumni/assets2/css/main.css" rel="stylesheet" media="all">
  <link href="alumni/assets2/css/main2.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      // Activate tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // Select/Deselect checkboxes
      var checkbox = $('table tbody input[type="checkbox"]');
      $("#selectAll").click(function() {
        if (this.checked) {
          checkbox.each(function() {
            this.checked = true;
          });
        } else {
          checkbox.each(function() {
            this.checked = false;
          });
        }
      });
      checkbox.click(function() {
        if (!this.checked) {
          $("#selectAll").prop("checked", false);
        }
      });
    });
  </script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="/superadmin">
          <h3>SI ALUMNI</h3>
        </a>
        <a class="navbar-brand brand-logo-mini" href="/superadmin">
          <h3>SIA</h3>
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-text">
                <p class="mb-1 text-black"><?php echo session()->get("nama"); ?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="/">
                <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?php echo session()->get("nama"); ?></span>
                <span class="text-secondary text-small"><?php echo session()->get("role"); ?></span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/superadmin">
              <span class="menu-title">Home</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/data_Alumni">
              <span class="menu-title">Data Alumni</span>
              <i class="mdi mdi-table-large menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic">
              <span class="menu-title">Laporan</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-clipboard-text menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/grafik" style="color: #434a54;">Grafik Laporan</a></li>
                <li class="nav-item"> <a class="nav-link" href="/cetaklaporan" style="color: #434a54;">Cetak Laporan</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kelola_akun">
              <span class="menu-title">Kelola Akun</span>
              <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
          </li>
          <li class="nav-item sidebar-actions">
            <span class="nav-link">
              <div class="border-bottom">
                <h6 class="font-weight-normal mb-3">Input Data</h6>
              </div>
              <div class="mt-3">
                <a class="btn btn-block btn-lg btn-gradient-info mt-4" href="/formAlumni">+Input</a>
              </div>
            </span>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="col-12">
                    <span class="d-flex align-items-center">
                      <h3>Data <b>Akun</b></h3>
                      <a href="/register" class="btn btn-sm btn-primary ml-auto" style="background-color: #047edf ; border: 0px; padding :1em">Tambah Akun</a>
                    </span>
                  </div> <br>
                  <div class="table-responsive">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <table class="table table-hover" id="TABLE" width="100%" cellspacing="0">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col"> Username </th>
                            <th scope="col"> Email </th>
                            <th scope="col"> Role </th>
                            <th scope="col"> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                          @php $no = 1; @endphp
                          @foreach($akun as $key => $data_akun)
                          <tr>
                            <th scope="row"> {{$no++}} </th>
                            <td> {{$data_akun->username}} </td>
                            <td> {{$data_akun->email}} </td>
                            <td> {{$data_akun->role}} </td>
                            <td>
                              <a href="/editakun/{{$data_akun->id}}" class="edit" title="Edit"><i class="mdi mdi-lead-pencil"></i></a>
                              <!-- <a href="superadmin.kelola_akun" class="delete" title="Delete" data-toggle="modal"><i class="mdi mdi-delete"></i></a>   -->
                              <a href="/deleteakun/{{$data_akun->id}}" class="delete" title="Delete"><i class="mdi mdi-delete"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- //Edit Modal HTML -->
                  <!-- <div id="editakun" class="modal fade">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <form >
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Data Akun</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h1 class="title_2">Data Akun</h1>
                                <div class="form-group">
                                <label>Username:</label>
                                <input type="text" class="form-control" name="username"required>
                                </div>
                                <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email"required>
                                </div>
                                <div class="form-group">
                                <label>Password:</label>
                                <input type="password" class="form-control" name="password"required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-info" value="Save">
                            </div>
                            </form>
                        </div>
                        </div>
                    </div> -->
                  <!-- Delete Modal HTML -->
                  <!-- <div id="deleteakun" class="modal fade">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="/delete/{{$data_akun->id}}/delete" method="post">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Data Akun</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete these Records?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                            </form>
                        </div>
                        </div>
                    </div> -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="alumni/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="alumni/assets/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="alumni/assets/js/off-canvas.js"></script>
  <script src="alumni/assets/js/hoverable-collapse.js"></script>
  <script src="alumni/assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="alumni/assets/js/dashboard.js"></script>
  <script src="alumni/assets/js/todolist.js"></script>
  <!-- End custom js for this page -->
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="alumni/assets2/vendor/select2/select2.min.js"></script>
  <script src="alumni/assets2/vendor/datepicker/moment.min.js"></script>
  <script src="alumni/assets2/vendor/datepicker/daterangepicker.js"></script>
  <script src="alumni/assets2/js/global.js"></script>
  <div class="daterangepicker dropdown-menu ltr single opensright">
    <div class="calendar left single" style="display: block;">
      <div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i>
        <div class="calendar-time" style="display: none;">
          <div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i>
        </div>
      </div>
      <div class="calendar-table"></div>
    </div>
    <div class="calendar right" style="display: none;">
      <div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i>
        <div class="calendar-time" style="display: none;">
          <div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i>
        </div>
      </div>
      <div class="calendar-table"></div>
    </div>
    <div class="ranges" style="display: none;">
      <div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" disabled="disabled" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div>
    </div>
  </div>
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');
  </script>
  {-- DATA TABLE --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#TABLE').DataTable();
    });
  </script>
  @include('sweetalert::alert')
</body>

</html>