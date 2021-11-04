<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan (Excel)</title>
    <link rel="stylesheet" href="alumni/assets/css/main.css">
    <link rel="shortcut icon" href="alumni/assets/images/sia.svg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="alumni/assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="alumni/assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="alumni/https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="head-tabel">
            <h1>Tabel Laporan Alumni</h1> <br> <br>
        </div>


        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr style="text-align: center;">
                        <th class="align-middle"> No</th>
                        <th class="align-middle"> Nama </th>
                        <th class="align-middle"> Tempat lahir </th>
                        <th class="align-middle"> Tanggal lahir </th>
                        <th class="align-middle"> Alamat </th>
                        <th class="align-middle"> Jenis kelamin </th>
                        <th class="align-middle"> Kabupaten </th>
                        <th class="align-middle"> Agama </th>
                        <th class="align-middle"> Suku </th>
                        <th class="align-middle"> Wilayah adat </th>
                        <th class="align-middle"> Email </th>
                        <th class="align-middle"> No.telp </th>
                        <th class="align-middle"> Nama lembaga studi </th>
                        <th class="align-middle"> Jenis </th>
                        <th class="align-middle"> Tahun masuk </th>
                        <th class="align-middle"> Tahun lulus </th>
                        <th class="align-middle"> Jenjang studi </th>
                        <th class="align-middle"> Alamat lembaga studi </th>
                        <th class="align-middle"> Provinsi </th>
                        <th class="align-middle"> Kabupaten/kota </th>
                        <th class="align-middle"> Jenis pekerjaan </th>
                        <th class="align-middle"> Jabatan </th>
                        <th class="align-middle"> Nama perusahaan </th>
                        <th class="align-middle"> Alamat perusahaan </th>
                        <th class="align-middle"> Nama kegiatan </th>
                        <th class="align-middle"> Tahun </th>
                        <th class="align-middle"> Tempat </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($data as $data)
                    <tr>
                        <th scope="row" class="align-middle">{{ $i++ }}</th>
                        <td class="align-middle"> {{ $data->tempat }} </td>
                        <td class="align-middle"> {{ $data->tanggal_lahir }} </td>
                        <td class="align-middle"> {{ $data->alamat }}</td>
                        <td class="align-middle"> {{ $data->jenis_kelamin }} </td>
                        <td class="align-middle"> {{ $data->asal_kabupaten }} </td>
                        <td class="align-middle"> {{ $data->agama }} </td>
                        <td class="align-middle"> {{ $data->suku }} </td>
                        <td class="align-middle"> {{ $data->wilayah_adat }} </td>
                        <td class="align-middle"> {{ $data->email }} </td>
                        <td class="align-middle"> {{ $data->telpon }} </td>
                        <td class="align-middle"> {{ $data->nama_lembaga }} </td>
                        <td class="align-middle"> {{ $data->jenis }} </td>
                        <td class="align-middle"> {{ $data->tahun_masuk }} </td>
                        <td class="align-middle"> {{ $data->tahun_lulus }} </td>
                        <td class="align-middle"> {{ $data->jenjang_studi }} </td>
                        <td class="align-middle"> {{ $data->alamat_lembaga }} </td>
                        <td class="align-middle"> {{ $data->provinsi }} </td>
                        <td class="align-middle"> {{ $data->kabupaten }} </td>
                        <td class="align-middle"> {{ $data->jenis_pekerjaan }} </td>
                        <td class="align-middle"> {{ $data->jabatan }} </td>
                        <td class="align-middle"> {{ $data->nama_perusahaan }} </td>
                        <td class="align-middle"> {{ $data->alamat_perusahaan }} </td>
                        <td class="align-middle"> {{ $data->nama_kegiatan }} </td>
                        <td class="align-middle"> {{ $data->tahun_kegiatan }} </td>
                        <td class="align-middle"> {{ $data->tempat_kegiatan }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>