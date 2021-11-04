<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit Biodata Alumni</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../alumni/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../alumni/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../alumni/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="alumni/assets/images/binterbusih.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="../alumni/assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="../alumni/assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../alumni/assets2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="../alumni/assets2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link href="../alumni/assets2/css/main.css" rel="stylesheet" media="all">

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
                <h1 class="title">Edit Biodata {{$data->nama}}</h1> <br> <br>
                <h1 class="title_2">Data Pribadi Peserta</h1>
                <form method="post" action="/updatealumni/admin" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{$data->id}}">
                  <div class="row row-space">
                    <div class="">
                      <div class="input-group">
                        <label class="label">Nama Asli/Lengkap: </label>
                        <input class="input--style-4" type="text" name="nama_asli" value="{{$data->nama}}" required>
                      </div>
                    </div>
                  </div>

                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tempat Lahir: </label>
                        <input class="input--style-4" type="text" name="tempat" value="{{$data->tempat}}" required>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tanggal Lahir: </label>
                        <input class="input--style-4" type="date" name="tanggal_lahir" value="{{$data->tanggal_lahir}}" required>
                      </div>
                    </div>
                  </div>

                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Alamat Lengkap</label>
                        <input class="input--style-4" type="text" name="alamat_lgkp" value="{{$data->alamat}}" required>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Jenis Kelamin</label>
                        <div class="input-group">
                          <select class="form-select" id="inputGroupSelect02" name="gender" value="{{$data->jenis_kelamin}}">

                            <option value="Laki-Laki" @if ($data->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                            <option value="Perempuan" @if ($data->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                            <!-- <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option> -->
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label for="formFile" class="label">Upload Foto</label>
                        <input type="file" id="file" name="file">
                      </div>
                    </div>

                    @php $aslkab = DB::table('tb_kota')->get(); @endphp
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Asal Kabupaten: </label>
                        <div class="input-group">
                        <select class="custom-select form-control" name="aslkab" id="aslkab" required>
                                    <option hidden>{{$data->asal_kabupaten}}</option>
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
                          <select class="form-select" id="inputGroupSelect03" name="agama" required>
                            <option selected value="Islam" @if ($data->agama == 'Islam') selected @endif>Islam</option>
                            <option value="kristen" @if ($data->agama == 'kristen') selected @endif>kristen</option>
                            <option value="hindu" @if ($data->agama == 'hindu') selected @endif>hindu</option>
                            <option value="budha" @if ($data->agama == 'budha') selected @endif>budha</option>
                            <option value="konghucu" @if ($data->agama == 'konghucu') selected @endif>konghucu</option>
                            <option value="lainnya" @if ($data->agama == 'lainnya') selected @endif>lainnya</option>
                          </select>
                          <!-- <input class="input--style-4" type="text" name="agama" required> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Suku: </label>
                        <!-- <input class="input--style-4" type="text" name="suku" value="{{$data->suku}}" required> -->
                        <div class="input-group">
                          <select class="form-select" id="inputGroupSelect03" name="suku" required>
                            <option selected value="Suku Amungme" @if ($data->suku == 'Suku Amungme') selected @endif>Suku Amungme</option>
                            <option value="Suku Arfak" @if ($data->suku == 'Suku Arfak') selected @endif>Suku Arfak</option>
                            <option value="Suku Arguni" @if ($data->suku == 'Suku Arguni') selected @endif>Suku Arguni</option>
                            <option value="Suku Asmat" @if ($data->suku == 'Suku Asmat') selected @endif>Suku Asmat</option>
                            <option value="Suku Awyu" @if ($data->suku == 'Suku Awyu') selected @endif>Suku Awyu</option>
                            <option value="Suku Ayfat" @if ($data->suku == 'Suku Ayfat') selected @endif>Suku Ayfat</option>
                            <option value="Suku Baham" @if ($data->suku == 'Suku Baham') selected @endif>Suku Baham</option>
                            <option value="Suku Damal" @if ($data->suku == 'Suku Damal') selected @endif>Suku Damal</option>
                            <option value="Suku Dani" @if ($data->suku == 'Suku Dani') selected @endif>Suku Dani</option>
                            <option value="Suku Fayu" @if ($data->suku == 'Suku Fayu') selected @endif>Suku Fayu</option>
                            <option value="Suku Huli" @if ($data->suku == 'Suku Huli') selected @endif>Suku Huli</option>
                            <option value="Suku Kamoro" @if ($data->suku == 'Suku Kamoro') selected @endif>Suku Kamoro</option>
                            <option value="Suku Lani" @if ($data->suku == 'Suku Lani') selected @endif>Suku Lani</option>
                            <option value="Suku Marind" @if ($data->suku == 'Suku Marind') selected @endif>Suku Marind</option>
                            <option value="Suku Melayu" @if ($data->suku == 'Suku Melayu') selected @endif>Suku Melayu</option>
                            <option value="Suku Moni" @if ($data->suku == 'Suku Moni') selected @endif>Suku Moni</option>
                            <option value="Suku Motu" @if ($data->suku == 'Suku Motu') selected @endif>Suku Motu</option>
                            <option value="Suku Ansus" @if ($data->suku == 'Suku Ansus') selected @endif>Suku Ansus</option>
                            <option value="Suku Awyi" @if ($data->suku == 'Suku Awyi') selected @endif>Suku Awyi</option>
                            <option value="Suku Baburua" @if ($data->suku == 'Suku Baburua') selected @endif>Suku Baburua</option>
                            <option value="Suku Banlol" @if ($data->suku == 'Suku Banlol') selected @endif>Suku Banlol</option>
                            <option value="Suku Berik" @if ($data->suku == 'Suku Berik') selected @endif>Suku Berik</option>
                            <option value="Suku Biak" @if ($data->suku == 'Suku Biak') selected @endif>Suku Biak</option>
                            <option value="Suku Biksi" @if ($data->suku == 'Suku Biksi') selected @endif>Suku Biksi</option>
                            <option value="Suku Buruwai" @if ($data->suku == 'Suku Buruwai') selected @endif>Suku Buruwai</option>
                            <option value="Suku Busami" @if ($data->suku == 'Suku Busami') selected @endif>Suku Busami</option>
                            <option value="Suku Citak Mitak" @if ($data->suku == 'Suku Citak Mitak') selected @endif>Suku Citak Mitak</option>
                            <option value="Suku Dem" @if ($data->suku == 'Suku Dem') selected @endif>Suku Dem</option>
                            <option value="Suku Demta" @if ($data->suku == 'Suku Demta') selected @endif>Suku Demta</option>
                            <option value="Suku Dera" @if ($data->suku == 'Suku Dera') selected @endif>Suku Dera</option>
                            <option value="Suku Enggros" @if ($data->suku == 'Suku Enggros') selected @endif>Suku Enggros</option>
                            <option value="Suku Hanasbey" @if ($data->suku == 'Suku Hanasbey') selected @endif>Suku Hanasbey</option>
                            <option value="Suku Mander" @if ($data->suku == 'Suku Mander') selected @endif>Suku Mander</option>
                            <option value="Suku Hanasbey" @if ($data->suku == 'Suku Hanasbey') selected @endif>Suku Hanasbey</option>
                            <option value="Suku Marengge" @if ($data->suku == 'Suku Marengge') selected @endif>Suku Marengge</option>
                            <option value="Suku Mbaham-Matta" @if ($data->suku == 'Suku Mbaham-Matta') selected @endif>Suku Mbaham-Matta</option>
                            <option value="Melayu-Indonesia" @if ($data->suku == 'Melayu-Indonesia') selected @endif>Melayu-Indonesia</option>
                            <option value="Suku Meybrat" @if ($data->suku == 'Suku Meybrat') selected @endif>Suku Meybrat</option>
                            <option value="Suku Ngalum" @if ($data->suku == 'Suku Ngalum') selected @endif>Suku Ngalum</option>
                            <option value="Suku Pyu" @if ($data->suku == 'Suku Pyu') selected @endif>Suku Pyu</option>
                            <option value="Suku Roon" @if ($data->suku == 'Suku Roon') selected @endif>Suku Roon</option>
                            <option value="Suku Sasawa" @if ($data->suku == 'Suku Sasawa') selected @endif>Suku Sasawa</option>
                            <option value="Suku Sebyar" @if ($data->suku == 'Suku Sebyar') selected @endif>Suku Sebyar</option>
                            <option value="Suku Sentani" @if ($data->suku == 'Suku Sentani') selected @endif>Suku Sentani</option>
                            <option value="Suku Serui" @if ($data->suku == 'Suku Serui') selected @endif>Suku Serui</option>
                            <option value="Suku Wamesa" @if ($data->suku == 'Suku Wamesa') selected @endif>Suku Wamesa</option>
                            <option value="Suku Yali" @if ($data->suku == 'Suku Yali') selected @endif>Suku Yali</option>

                          </select>
                          <!-- <input class="input--style-4" type="text" name="agama" required> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Wilayah Adat: </label>
                        <!-- <input class="input--style-4" type="text" name="wilayah_adat" value="{{$data->wilayah_adat}}" required> -->
                        <div class="input-group">
                          <select class="form-select" id="inputGroupSelect03" name="wilayah_adat" required>
                            <option selected value="Mamta" @if ($data->wilayah_adat == 'Mamta') selected @endif>Mamta</option>
                            <option value="Saereri" @if ($data->wilayah_adat == 'Saereri') selected @endif>Saereri</option>
                            <option value="Domberai" @if ($data->wilayah_adat == 'Domberai') selected @endif>Domberai</option>
                            <option value="Bomberai" @if ($data->wilayah_adat == 'Bomberai') selected @endif>Bomberai</option>
                            <option value="Anim Ha" @if ($data->wilayah_adat == 'Anim Ha') selected @endif>Anim Ha</option>
                            <option value="La Pago" @if ($data->wilayah_adat == 'La Pago') selected @endif>La Pago</option>
                            <option value="Meepago" @if ($data->wilayah_adat == 'Meepago') selected @endif>Meepago</option>
                          </select>
                          <!-- <input class="input--style-4" type="text" name="agama" required> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Email: </label>
                        <input class="input--style-4" type="email" name="email" value="{{$data->email}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="input-group">
                      <label class="label">No. Telp: </label>
                      <input class="input--style-4" type="number" name="phone" value="{{$data->telpon}}" required>
                    </div>
                  </div> <br> <br>
                  <h1 class="title_2">Data Lembaga Studi</h1>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Nama Lembaga Studi: </label>
                        <input class="input--style-4" type="text" name="nama_lembaga" value="{{$data->nama_lembaga}}" required>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Jenis: </label>
                        <div class="input-group">
                          <select class="form-select" id="inputGroupSelect03" name="pekerjaan" required>
                          <!-- <select class="form-select" id="inputGroupSelect02" name="pekerjaan" value="{{$data->jenis}}"> -->
                            <option selected value="Negeri" @if ($data->jenis == 'Negeri') selected @endif>Negeri</option>
                            <option value="Swasta" @if ($data->jenis == 'Swasta') selected @endif>Swasta</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tahun Masuk: </label>
                        <input class="input--style-4" type="date" name="tahun_msk" value="{{$data->tahun_masuk}}" required>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tahun Lulus: </label>
                        <input class="input--style-4" type="date" name="tahun_lls" value="{{$data->tahun_lulus}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <label class="label">Jenjang Studi: </label>
                      <select class="form-select" id="inputGroupSelect02" name="jenjang" value="jenjang" required>
                        <option selected value="D3" @if ($data->jenjang_studi == 'D3') selected @endif>D3</option>
                            <option value="S1" @if ($data->jenjang_studi == 'S1') selected @endif>S1</option>
                            <option value="S2" @if ($data->jenjang_studi == 'S2') selected @endif>S2</option>
                            <option value="S3" @if ($data->jenjang_studi == 'S3') selected @endif>S3</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Alamat Lembaga Studi: </label>
                        <input class="input--style-4" type="text" name="alamat_lembaga" value="{{$data->alamat_lembaga}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Provinsi: </label>
                        <div class="input-group">
                          <select name="province_id" id="province_id" class="form-control" required>
                            <option hidden>{{$data->provinsi}}</option>
                            @foreach ($provinsi as $row)
                            <option value="{{$row->id}}" namaprovinsi="{{$row->provinsi}}">{{$row->provinsi}}</option>
                            @endforeach
                          </select>
                        </div>
                        <input type="hidden" class="form-control" id="nama_provinsi" name="nama_provinsi" value="{{$row->provinsi}}">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Kabupaten/Kota: </label>
                        <div class="input-group">
                          <select name="kota" id="kota" class="form-control" required>
                            <option hidden>{{$data->kabupaten}}</option>
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
                        <input class="input--style-4" type="text" name="jenis_pekerjaan" value="{{$data->jenis_pekerjaan}}">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Jabatan: </label>
                        <input class="input--style-4" type="text" name="jabatan" value="{{$data->jabatan}}">
                      </div>
                    </div>
                  </div>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Nama Perusahaan/Organisasi: </label>
                        <input class="input--style-4" type="text" name="nama_perusahaan" value="{{$data->nama_perusahaan}}">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Alamat Perusahaan/Organisasi: </label>
                        <input class="input--style-4" type="text" name="alamat_perusahaan" value="{{$data->alamat_perusahaan  }}">
                      </div>
                    </div>
                  </div> <br> <br>
                  <h1 class="title_2">Jenis Kegiatan Yang Pernah Diikuti</h1>
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Nama Kegiatan: </label>
                        <input class="input--style-4" type="text" name="nama_kegiatan" value="{{$data->nama_kegiatan}}">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <label class="label">Tahun: </label>
                        <input class="input--style-4" type="date" name="tahun_kegiatan" value="{{$data->tahun_kegiatan}}">
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="input-group">
                      <label class="label">Tempat Kegiatan: </label>
                      <input class="input--style-4" type="text" name="tempat_kegiatan" value="{{$data->tempat_kegiatan}}">
                    </div>
                  </div> <br> <br>
                  <div class="p-t-15">
                    <button class="btn btn--radius-2 btn--blue" type="submit">Save</button>
                    <a href="/data_Alumni"><button type="button" class="btn btn--radius-2 btn-danger">Cancel</button></a>
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
  <script src="../alumni/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../alumni/assets/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../alumni/assets/js/off-canvas.js"></script>
  <script src="../alumni/assets/js/hoverable-collapse.js"></script>
  <script src="../alumni/assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="../alumni/assets/js/dashboard.js"></script>
  <script src="../alumni/assets/js/todolist.js"></script>
  <!-- End custom js for this page -->
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../alumni/assets2/vendor/select2/select2.min.js"></script>
  <script src="../alumni/assets2/vendor/datepicker/moment.min.js"></script>
  <script src="../alumni/assets2/vendor/datepicker/daterangepicker.js"></script>
  <script src="../alumni/assets2/js/global.js"></script>
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
    $(document).ready(function(){
    //ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
    //name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian
    $('select[name="province_id"]').on('change', function(){
      var namaprovinsiku = $("#province_id option:selected").attr("namaprovinsi");
                // menampilkan hasil nama provinsi ke input id nama_provinsi
                $("#nama_provinsi").val(namaprovinsiku);
    // kita buat variable provincedid untk menampung data id select province
        let idprov = $(this).val();
    //kita cek jika id di dpatkan maka apa yg akan kita eksekusi
        if(idprov){
    // jika di temukan id nya kita buat eksekusi ajax GET
            jQuery.ajax({
    // url yg di root yang kita buat tadi
            url:"/kota/"+idprov,
    // aksion GET, karena kita mau mengambil data
            type:'GET',
    // type data json
            dataType:'json',
    // jika data berhasil di dapat maka kita mau apain nih
            success:function(data){
    // jika tidak ada select dr provinsi maka select kota kososng / empty
            $('select[name="kota"]').empty();
    // jika ada kita looping dengan each
            $.each(data, function(key, value){
    // perhtikan dimana kita akan menampilkan data select nya, di sini saya memberi name select kota adalah kota_id
            $('select[name="kota"]').append('<option value="'+ value.kota +'" >' + value.kota + '</option>');
            });
        }
    });
    }else {
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

  @include('sweetalert::alert')
</body>

</html>