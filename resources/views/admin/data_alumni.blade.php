<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data Alumni</title>
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
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
        <a class="navbar-brand brand-logo" href="/home">
          <h3>SI ALUMNI</h3>
        </a>
        <a class="navbar-brand brand-logo-mini" href="/home">
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
              <a class="dropdown-item" href="/logout">
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
            <a class="nav-link" href="/home">
              <span class="menu-title">Home</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/data_Alumni_admin">
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
                <li class="nav-item"> <a class="nav-link" href="/grafikadmin" style="color: #434a54;">Grafik Laporan</a></li>
                <li class="nav-item"> <a class="nav-link" href="/cetaklaporanadmin" style="color: #434a54;">Cetak Laporan</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item sidebar-actions">
            <span class="nav-link">
              <div class="border-bottom">
                <h6 class="font-weight-normal mb-3">Input Data</h6>
              </div>
              <div class="mt-3">
                <a class="btn btn-block btn-lg btn-gradient-info mt-4" href="/formAlumniadmin">+Input</a>
              </div>
            </span>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="table-title">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2>Data <b>Alumni</b></h2>
                    </div>
                    <!-- <div class="col-sm-4">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Cari Alumni" aria-label="Recipient's username" aria-describedby="button-addon2">
                          <button class="btn btn-primary" type="button" id="button-addon2" style="background-color: #03A9F4;">Search</button>
                        </div>
                    </div> -->
                  </div>
                </div>
                <div class="table-responsive">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <table class="table table-hover" id="TABLE" width="100%" cellspacing="0">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Email</th>
                          <th scope="col">Lembaga Studi</th>
                          <th scope="col">Jenjang Studi</th>
                          <th scope="col">Tahun Lulus</th>
                          <th scope="col">Pekerjaan</th>
                          <th scope="col">Aksi</th>
                        </tr>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach($alumni as $key => $data)
                        <tr>
                          <th scope="row">{{$no++}}</th>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->tempat}}</td>
                          <td>{{$data->email}}</td>
                          <td>{{$data->nama_lembaga}}</td>
                          <td>{{$data->jenjang_studi}}</td>
                          <td>{{$data->tahun_lulus}}</td>
                          <td>{{$data->jenis_pekerjaan}}</td>
                          <td>
                            <a href="/editalumni_admin/{{$data->id}}" class="edit" title="Edit"><i class="mdi mdi-lead-pencil"></i></a>
                            <a href="/deletealumni_admin/{{$data->id}}" class="delete" title="Delete"><i class="mdi mdi-delete"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- START EDIT -->
                  <!-- <div class="clearfix">
                    <div class="hint-text">Showing <b>25</b> out of <b>100</b> entries</div>
                    <div class="halaman">
                      <ul class="pagination">
                        <li class="page-item"><a href="#" class="page-link"><i class="mdi mdi-chevron-double-left"></i></a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link"><i class="mdi mdi-chevron-double-right"></i></a></li>
                      </ul>
                    </div>
                  </div> -->
                  <!-- END EDIT -->
                  <!-- edit 2 -->
                  <!-- Edit Modal HTML -->
                  <div id="editalumni" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form>
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Data Alumni</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          </div>
                          <div class="modal-body">
                            <h1 class="title_2">Data Pribadi Peserta</h1>
                            <div class="form-group">
                              <label>Nama Asli/Lengkap:</label>
                              <input type="text" class="form-control" name="nama_asli" required>
                            </div>
                            <div class="form-group">
                              <label>Tempat, Tanggal Lahir:</label>
                              <input type="text" class="form-control" name="tanggal_lahir" required>
                            </div>
                            <div class="form-group">
                              <label>Alamat Lengkap:</label>
                              <input type="text" class="form-control" name="alamat_lgkp" required>
                            </div>
                            <div class="form-group">
                              <label>Jenis Kelamin:</label>
                              <div class="input-group">
                                <label class="radio-container m-r-45">Laki-Laki
                                  <input type="radio" checked="checked" name="gender" required>
                                  <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Perempuan
                                  <input type="radio" name="gender" required>
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="formFile">Upload Foto:</label>
                              <input class="input-group" type="file" id="formFile">
                            </div>
                            <div class="form-group">
                              <label>Asal Kabupaten:</label>
                              <input type="text" class="form-control" name="asl_kabupaten" required>
                            </div>
                            <div class="form-group">
                              <label>Agama:</label>
                              <input type="text" class="form-control" name="agama" required>
                            </div>
                            <div class="form-group">
                              <label>Suku:</label>
                              <input type="text" class="form-control" name="suku" required>
                            </div>
                            <div class="form-group">
                              <label>Wilayah Adat:</label>
                              <input type="text" class="form-control" name="wilayah_adat" required>
                            </div>
                            <div class="form-group">
                              <label>Email:</label>
                              <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                              <label>No. Telp:</label>
                              <input type="number" class="form-control" name="phone" required>
                            </div> <br>

                            <h1 class="title_2">Data Lembaga Studi</h1>
                            <div class="form-group">
                              <label>Nama Lembaga Studi:</label>
                              <input type="text" class="form-control" name="nama_lembaga" required>
                            </div>
                            <div class="form-group">
                              <label>Jenis:</label>
                              <div class="input-group">
                                <label class="radio-container m-r-45">Negeri
                                  <input type="radio" checked="checked" name="negeri" required>
                                  <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Swasta
                                  <input type="radio" name="negeri" required>
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Tahun Masuk:</label>
                              <input type="date" class="form-control" name="tahun_msk" required>
                            </div>
                            <div class="form-group">
                              <label>Tahun Lulus:</label>
                              <input type="date" class="form-control" name="tahun_lls" required>
                            </div>
                            <div class="form-group">
                              <label>Jenjang Studi:</label>
                              <select class="form-select" id="inputGroupSelect02">
                                <option selected>D3</option>
                                <option value="1">S1</option>
                                <option value="2">S2</option>
                                <option value="3">S3</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Alamat Lembaga Studi:</label>
                              <input type="text" class="form-control" name="alamat_lembaga" required>
                            </div>
                            <div class="form-group">
                              <label>Provinsi:</label>
                              <input type="text" class="form-control" name="provinsi" required>
                            </div>
                            <div class="form-group">
                              <label>Kabupaten/Kota:</label>
                              <input type="text" class="form-control" name="kabupatenkota" required>
                            </div> <br>
                            <h1 class="title_2">Pekerjaan</h1>
                            <div class="form-group">
                              <label>Jenis Pekerjaan:</label>
                              <input type="text" class="form-control" name="jenis_pekerjaan" required>
                            </div>
                            <div class="form-group">
                              <label>Jabatan:</label>
                              <input type="text" class="form-control" name="jabatan" required>
                            </div>
                            <div class="form-group">
                              <label>Nama Perusahaan/Organisasi:</label>
                              <input type="text" class="form-control" name="nama_perusahaan" required>
                            </div>
                            <div class="form-group">
                              <label>Alamat Perusahaan:</label>
                              <input type="text" class="form-control" name="alamat_perusahaan" required>
                            </div> <br>
                            <h1 class="title_2">Jenis Kegiatan Yang Pernah Diikuti</h1>
                            <div class="form-group">
                              <label>Nama Kegiatan:</label>
                              <input type="text" class="form-control" name="nama_kegiatan" required>
                            </div>
                            <div class="form-group">
                              <label>Tahun:</label>
                              <input type="date" class="form-control" name="tahun_kegiatan" required>
                            </div>
                            <div class="form-group">
                              <label>Tempat Kegiatan:</label>
                              <input type="text" class="form-control" name="tempat_kegiatan" required>
                            </div> <br>
                          </div>
                          <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Delete Modal HTML -->
                  <div id="deletealumni" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form>
                          <div class="modal-header">
                            <h4 class="modal-title">Delete Data Alumni</h4>
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
                  </div>
                  <!-- end edit 2 -->
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
</body>

</html>