<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cetak Laporan Alumni</title>
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
    <link href="alumni/https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="alumni/assets2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="alumni/assets2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="alumni/assets2/css/main.css" rel="stylesheet" media="all">
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
                    <li class="nav-item active">
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
                    <div class="page-header">
                        <h2> Cetak Laporan Alumni </h2>
                        
                    </div>

                    <div class="row">
                        <dir class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Note :</h3><br>
                                    <p>PDF : laporan yang berisi data alumni dengan data berdasarkan Nama, Tahun Lulus, Pekerjaan, Kabupaten, Wilayah Adat <br>
                                    Excel : laporan yang berisi data alumni lengkap</p>
                                    <a href="/cetakpdf_admin" class="btn btn-sm btn-primary ml-auto" style="background-color: #047edf; border: 0px;">Cetak laporan .PDF</a>
                                    <a href="/cetakxlsx_admin" class="btn btn-sm btn-primary ml-auto" style="background-color: #047edf; border: 0px;">Cetak laporan .XLSX</a>
                                </div>
                            </div>
                        </dir>
                    </div>

                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th> No</th>
                                                    <th> Nama </th>
                                                    <th> Tempat lahir </th>
                                                    <th> Tanggal lahir </th>
                                                    <th> Alamat </th>
                                                    <th> Jenis kelamin </th>
                                                    <th> Kabupaten </th>
                                                    <th> Agama </th>
                                                    <th> Suku </th>
                                                    <th> Wilayah adat </th>
                                                    <th> Email </th>
                                                    <th> No.telp </th>
                                                    <th> Nama lembaga studi </th>
                                                    <th> Jenis </th>
                                                    <th> Tahun masuk </th>
                                                    <th> Tahun lulus </th>
                                                    <th> Jenjang studi </th>
                                                    <th> Alamat lembaga studi </th>
                                                    <th> Provinsi </th>
                                                    <th> Kabupaten/kota </th>
                                                    <th> Jenis pekerjaan </th>
                                                    <th> Jabatan </th>
                                                    <th> Nama perusahaan </th>
                                                    <th> Alamat perusahaan </th>
                                                    <th> Nama kegiatan </th>
                                                    <th> Tahun </th>
                                                    <th> Tempat </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @php $i=1 @endphp

                                                    @foreach($data as $data)

                                                <tr>
                                                    <th>{{ $i++ }}</th>
                                                    <td>{{ $data->nama }}</td>
                                                    <td> {{ $data->tempat }} </td>
                                                    <td> {{ $data->tanggal_lahir }} </td>
                                                    <td> {{ $data->alamat }} </td>
                                                    <td> {{ $data->jenis_kelamin }} </td>
                                                    <td> {{ $data->asal_kabupaten }} </td>
                                                    <td> {{ $data->agama }} </td>
                                                    <td> {{ $data->suku }} </td>
                                                    <td> {{ $data->wilayah_adat }} </td>
                                                    <td> {{ $data->email }} </td>
                                                    <td> {{ $data->telpon }} </td>
                                                    <td> {{ $data->nama_lembaga }} </td>
                                                    <td> {{ $data->jenis }} </td>
                                                    <td> {{ $data->tahun_masuk }} </td>
                                                    <td> {{ $data->tahun_lulus }} </td>
                                                    <td> {{ $data->jenjang_studi }} </td>
                                                    <td> {{ $data->alamat_lembaga }} </td>
                                                    <td> {{ $data->provinsi }} </td>
                                                    <td> {{ $data->kabupaten }} </td>
                                                    <td> {{ $data->jenis_pekerjaan }} </td>
                                                    <td> {{ $data->jabatan }} </td>
                                                    <td> {{ $data->nama_perusahaan }} </td>
                                                    <td> {{ $data->alamat_perusahaan }} </td>
                                                    <td> {{ $data->nama_kegiatan }} </td>
                                                    <td> {{ $data->tahun_kegiatan }} </td>
                                                    <td> {{ $data->tempat_kegiatan }} </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <script src="alumni/assets/js/chart.js"></script>
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