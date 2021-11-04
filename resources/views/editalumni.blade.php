<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Formulir Biodata Alumni</title>
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
  <!-- End layout styles -->
  <link rel="shortcut icon" href="alumni/assets/images/binterbusih.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="alumni/assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="alumni/assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="alumni/assets2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="alumni/assets2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link href="alumni/assets2/css/main.css" rel="stylesheet" media="all">
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
              <div class="nav-profile-img">
                <img src="alumni/assets/images/faces/face14.jpg" alt="image">
                <span class="availability-status online"></span>
              </div>
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
              <div class="nav-profile-image">
                <img src="alumni/assets/images/faces/face14.jpg" alt="profile">
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
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
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Laporan</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-clipboard-text menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/grafik">Grafik Laporan</a></li>
              </ul>
            </div>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Cetak Laporan</a></li>
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
              <a class="btn btn-block btn-lg btn-gradient-info mt-4" href="/formAlumni">+Input</a>
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
                <h1 class="title">Edit Biodata Alumni</h1> <br> <br>
                <h1 class="title_2">Data Pribadi Peserta</h1>
                <form method="post" action="/formAlumni/store">
                  {{ csrf_field() }}
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Nama Asli/Lengkap: </label>
                        <input class="input--style-4" type="text" name="nama_asli">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tempat, Tanggal Lahir: </label>
                        <input class="input--style-4" type="text" name="tanggal_lahir">
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Alamat Lengkap</label>
                        <input class="input--style-4" type="text" name="alamat_lgkp">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Jenis Kelamin</label>
                        <div class="input-group">
                          <label class="radio-container m-r-45">Laki-Laki
                            <input type="radio" checked="checked" name="gender">
                            <span class="checkmark"></span>
                          </label>
                          <label class="radio-container">Perempuan
                            <input type="radio" name="gender">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label for="formFile" class="label">Upload Foto</label>
                        <input class="input-group" type="file" id="formFile">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Asal Kabupaten: </label>
                        <input class="input--style-4" type="text" name="asl_kabupaten">
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Agama: </label>
                        <input class="input--style-4" type="text" name="agama">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Suku: </label>
                        <input class="input--style-4" type="text" name="suku">
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Wilayah Adat: </label>
                        <input class="input--style-4" type="text" name="wilayah_adat">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Email: </label>
                        <input class="input--style-4" type="email" name="email">
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="input-group">
                      <label class="label">No. Telp: </label>
                      <input class="input--style-4" type="number" name="phone">
                    </div>
                  </div> <br> <br>
                  <h1 class="title_2">Data Lembaga Studi</h1>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Nama Lembaga Studi: </label>
                        <input class="input--style-4" type="text" name="nama_lembaga">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Jenis: </label>
                        <div class="input-group">
                          <label class="radio-container m-r-45">Negeri
                            <input type="radio" checked="checked" name="negeri">
                            <span class="checkmark"></span>
                          </label>
                          <label class="radio-container">Swasta
                            <input type="radio" name="negeri">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tahun Masuk: </label>
                        <input class="input--style-4" type="date" name="tahun_msk">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tahun Lulus: </label>
                        <input class="input--style-4" type="date" name="tahun_lls">
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <label class="label">Jenjang Studi: </label>
                      <select class="form-select" id="inputGroupSelect02">
                        <option selected>D3</option>
                        <option value="1">S1</option>
                        <option value="2">S2</option>
                        <option value="3">S3</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Alamat Lembaga Studi: </label>
                        <input class="input--style-4" type="text" name="alamat_lembaga">
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Provinsi: </label>
                        <input class="input--style-4" type="text" name="provinsi">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Kabupaten/Kota: </label>
                        <input class="input--style-4" type="text" name="kabupatenkota">
                      </div>
                    </div>
                  </div> <br> <br>
                  <h1 class="title_2">Pekerjaan</h1>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Jenis Pekerjaan: </label>
                        <input class="input--style-4" type="text" name="jenis_pekerjaan">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Jabatan: </label>
                        <input class="input--style-4" type="text" name="jabatan">
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Nama Perusahaan/Organisasi: </label>
                        <input class="input--style-4" type="text" name="nama_perusahaan">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Alamat Perusahaan/Organisasi: </label>
                        <input class="input--style-4" type="text" name="alamat_perusahaan">
                      </div>
                    </div>
                  </div> <br> <br>
                  <h1 class="title_2">Jenis Kegiatan Yang Pernah Diikuti</h1>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Nama Kegiatan: </label>
                        <input class="input--style-4" type="text" name="nama_kegiatan">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tahun: </label>
                        <input class="input--style-4" type="date" name="tahun_kegiatan">
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="input-group">
                      <label class="label">Tempat Kegiatan: </label>
                      <input class="input--style-4" type="text" name="tempat_kegiatan">
                    </div>
                  </div> <br> <br>
                  <div class="p-t-15">
                    <button class="btn btn--radius-2 btn--blue" type="button">Save</button>
                    <button type="button" class="btn btn--radius-2 btn-danger">Cancel</button>
                  </div>
                </form>
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
</body>

</html>