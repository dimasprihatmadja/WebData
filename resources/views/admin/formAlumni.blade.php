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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

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
              <a class="btn btn-block btn-lg btn-gradient-info mt-4" href="/formAlumniadmin">+Input</a>
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
                <h1 class="title">Formulir Biodata Alumni</h1> <br> <br>
                <h1 class="title_2">Data Pribadi Peserta</h1>
                <form method="post" action="/insertalumni/admin" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="row row-space">
                    <div class="">
                      <div class="input-group">
                        <label class="label">Nama Asli/Lengkap: </label>
                        <input class="input--style-4" type="text" name="nama_asli" required>
                      </div>
                    </div>
                  </div>

                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tempat Lahir: </label>
                        <input class="input--style-4" type="text" name="tempat" required>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tanggal Lahir: </label>
                        <input class="input--style-4" type="date" name="tanggal_lahir" required>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Alamat Lengkap</label>
                        <input class="input--style-4" type="text" name="alamat_lgkp" required>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Jenis Kelamin</label>
                        <div class="input-group">
                          <select class="form-select" id="inputGroupSelect02" name="gender">
                            <option selected value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label for="formFile" class="label">Upload Foto</label>
                        <input type="file" id="foto" name="foto">
                        <small id="passwordHelpBlock" class="form-text text-muted">
                          Maksimal file 2 MB
                        </small>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Asal Kabupaten: </label>
                        <div class="input-group">
                          <select class="custom-select form-control" name="aslkab" id="aslkab" required>
                            <option hidden>----</option>
                            @foreach ($aslkab as $a)
                            <option value="{{$a->kota}}">{{$a->kota}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Agama: </label>
                        <div class="input-group">
                          <select class="form-select" id="inputGroupSelect03" name="agama">
                            <option selected value="Islam">Islam</option>
                            <option value="kristen">kristen</option>
                            <option value="hindu">hindu</option>
                            <option value="budha">budha</option>
                            <option value="konghucu">konghucu</option>
                            <option value="lainnya">lainnya</option>
                          </select>
                          <!-- <input class="input--style-4" type="text" name="agama" required> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Suku: </label>
                        <div class="input-group">
                          <select class="form-select select2" id="inputGroupSelect04" name="suku" required>
                            <option selected value="Suku Amungme">Suku Amungme</option>
                            <option value="Suku Arfak">Suku Arfak</option>
                            <option value="Suku Arguni">Suku Arguni</option>
                            <option value="Suku Asmat">Suku Asmat</option>
                            <option value="Suku Atam">Suku Atam</option>
                            <option value="Suku Atori">Suku Atori</option>
                            <option value="Suku Awyu">Suku Awyu</option>
                            <option value="Suku Ayfat">Suku Ayfat</option>
                            <option value="Suku Baham">Suku Baham</option>
                            <option value="Suku Damal">Suku Damal</option>
                            <option value="Suku Dani">Suku Dani</option>
                            <option value="Suku Fayu">Suku Fayu</option>
                            <option value="Suku Huli">Suku Huli</option>
                            <option value="Suku Kamoro">Suku Kamoro</option>
                            <option value="Suku Lani">Suku Lani</option>
                            <option value="Suku Marind">Suku Marind</option>
                            <option value="Suku Melayu">Suku Melayu</option>
                            <option value="Suku Moni">Suku Moni</option>
                            <option value="Suku Motu">Suku Motu</option>
                            <option value="Suku Ansus">Suku Ansus</option>
                            <option value="Suku Awyi">Suku Awyi</option>
                            <option value="Suku Baburua">Suku Baburua</option>
                            <option value="Suku Banlol">Suku Banlol</option>
                            <option value="Suku Berik">Suku Berik</option>
                            <option value="Suku Biak">Suku Biak</option>
                            <option value="Suku Biksi">Suku Biksi</option>
                            <option value="Suku Buruwai">Suku Buruwai</option>
                            <option value="Suku Busami">Suku Busami</option>
                            <option value="Suku Citak Mitak">Suku Citak Mitak</option>
                            <option value="Suku Dem">Suku Dem</option>
                            <option value="Suku Demta">Suku Demta</option>
                            <option value="Suku Dera">Suku Dera</option>
                            <option value="Suku Enggros">Suku Enggros</option>
                            <option value="Suku Hanasbey">Suku Hanasbey</option>
                            <option value="Suku Mander">Suku Mander</option>
                            <option value="Suku Hanasbey">Suku Hanasbey</option>
                            <option value="Suku Marengge">Suku Marengge</option>
                            <option value="Suku Mbaham-Matta">Suku Mbaham-Matta</option>
                            <option value="Suku Melayu-Indonesia">Suku Melayu-Indonesia</option>
                            <option value="Suku Meybrat">Suku Meybrat</option>
                            <option value="Suku Ngalum">Suku Ngalum</option>
                            <option value="Suku Pyu">Suku Pyu</option>
                            <option value="Suku Roon">Suku Roon</option>
                            <option value="Suku Sasawa">Suku Sasawa</option>
                            <option value="Suku Sebyar">Suku Sebyar</option>
                            <option value="Suku Sentani">Suku Sentani</option>
                            <option value="Suku Serui">Suku Serui</option>
                            <option value="Suku Wamesa">Suku Wamesa</option>
                            <option value="Suku Yali">Suku Yali</option>
                            <option value="Suku Lainnya">Suku Lainnya</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Wilayah Adat: </label>
                        <!--  <input class="input--style-4" type="text" name="wilayah_adat" required> -->
                        <div class="input-group">
                          <select class="form-select" id="inputGroupSelect04" name="wilayah_adat" required>
                            <option selected value="Mamta">Mamta</option>
                            <option value="Saereri">Saereri</option>
                            <option value="Domberai">Domberai</option>
                            <option value="Bomberai">Bomberai</option>
                            <option value="Anim Ha">Anim Ha</option>
                            <option value="La Pago">La Pago</option>
                            <option value="Meepago">Meepago</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Email: </label>
                        <input class="input--style-4" type="email" name="email" required>
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="input-group">
                      <label class="label">No. Telp: </label>
                      <input class="input--style-4" type="number" name="phone" required>
                    </div>
                  </div> <br> <br>
                  <h1 class="title_2">Data Lembaga Studi</h1>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Nama Lembaga Studi: </label>
                        <input class="input--style-4" type="text" name="nama_lembaga" required>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Jenis: </label>
                        <div class="input-group">
                          <select class="form-select" id="inputGroupSelect02" name="pekerjaan">
                            <option selected value="Negeri">Negeri</option>
                            <option value="Swasta">Swasta</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tahun Masuk: </label>
                        <input class="input--style-4" type="date" name="tahun_msk" required>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tahun Lulus: </label>
                        <input class="input--style-4" type="date" name="tahun_lls" required>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <label class="label">Jenjang Studi: </label>
                      <select class="form-select" id="inputGroupSelect02" name="jenjang">
                        <option selected>D3</option>
                        <option value="1">S1</option>
                        <option value="2">S2</option>
                        <option value="3">S3</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Alamat Lembaga Studi: </label>
                        <input class="input--style-4" type="text" name="alamat_lembaga" required>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Provinsi: </label>
                        <div class="input-group">
                          <select name="province_id" id="province_id" class="form-control">
                            <option hidden>----</option>
                            @foreach ($provinsi as $row)
                            <option value="{{$row->id}}" namaprovinsi="{{$row->provinsi}}">{{$row->provinsi}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Kabupaten/Kota: </label>
                        <div class="input-group">
                          <select name="kota" id="kota" class="form-control">
                            <option hidden>----</option>
                          </select>
                        </div>
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
                    <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
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
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      //ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
      //name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian
      $('select[name="province_id"]').on('change', function() {
        // kita buat variable provincedid untk menampung data id select province
        let idprov = $(this).val();
        //kita cek jika id di dpatkan maka apa yg akan kita eksekusi
        if (idprov) {
          // jika di temukan id nya kita buat eksekusi ajax GET
          jQuery.ajax({
            // url yg di root yang kita buat tadi
            url: "/kota/" + idprov,
            // aksion GET, karena kita mau mengambil data
            type: 'GET',
            // type data json
            dataType: 'json',
            // jika data berhasil di dapat maka kita mau apain nih
            success: function(data) {
              // jika tidak ada select dr provinsi maka select kota kososng / empty
              $('select[name="kota"]').empty();
              // jika ada kita looping dengan each
              $.each(data, function(key, value) {
                // perhtikan dimana kita akan menampilkan data select nya, di sini saya memberi name select kota adalah kota_id
                $('select[name="kota"]').append('<option value="' + value.kota + '" >' + value.kota + '</option>');
              });
            }
          });
        } else {
          $('select[name="kota"]').empty();
        }
      });
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.select2').select2();
    });
  </script>

</body>

</html>