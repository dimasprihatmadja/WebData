<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan (PDF)</title>
    <link rel="stylesheet" href="alumni/assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="alumni/assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="alumni/assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="alumni/https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>
    <div class="container-heading" style="display: flex; margin: 0 auto;">
        <img src="alumni/assets/images/binterbusih.png" style="width: 120px" ;>

        <div class="heading" style="text-align: center; margin-left: -2em;">
            <h5>Data Alumni</h5><br>
            <h5>Yayasan Binterbusih Semarang</h5><br>
        </div>

    </div>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tahun Lulus</th>
                    <th>Pekerjaan</th>
                    <th>Kabupaten</th>
                    <th>Wilayah Adat</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1 @endphp
                @foreach ($data as $data)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->tahun_lulus}}</td>
                    <td>{{$data->jenis_pekerjaan}}</td>
                    <td>{{$data->kabupaten}}</td>
                    <td>{{$data->wilayah_adat}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>