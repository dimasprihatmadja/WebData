<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Laporan (PDF)</title>
    <link rel="stylesheet" href="../alumni/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../alumni/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../alumni/assets/css/style.css">
    <link rel="shortcut icon" href="../alumni/assets/images/binterbusih.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="../alumni/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../alumni/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../alumni/assets/css/style.css">
  <link rel="shortcut icon" href="../alumni/assets/images/binterbusih.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link rel="stylesheet" href="../alumni/assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="../alumni/assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../alumni/assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../alumni/https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script type="text/javascript">
        $(function() {
            var analytics = @foreach($data as $data1) <?php $data1->jenis_kelamin; ?>; @endforeach
            var analytics2 =@foreach($data as $data2) <?php $data2->wilayah_adat; ?>; @endforeach
            var analytics3 =@foreach($data as $data3) <?php $data3->asal_kabupaten; ?>; @endforeach
            var analytics4 =@foreach($data as $data4) <?php $data4->suku; ?>; @endforeach

            google.charts.load('current', {
                'packages': ['corechart']
            });

            //GENDER
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable(analytics);
                var options = {
                    colors: ['#bae1ff', '#ffb3ba'],
                    backgroundColor: '#00F0F8FF'
                };
                var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
                chart.draw(data, options);
            }

            //WILAYAH ADAT
            function drawChart2() {
                // Define the chart to be drawn.
                var data = google.visualization.arrayToDataTable(analytics2);

                var options = {
                    colors: ['#bae1ff', '#ff6384']
                };

                // Instantiate and draw the chart.
                var chart = new google.visualization.ColumnChart(document.getElementById('col'));
                chart.draw(data, options);
            }
            google.charts.setOnLoadCallback(drawChart2);

            //ASAL KABUPATEN
            function drawChart3() {
                // Define the chart to be drawn.
                var data = google.visualization.arrayToDataTable(analytics3);

                var options = {
                    colors: ['#ffb3ba']
                };

                // Instantiate and draw the chart.
                var chart = new google.visualization.ColumnChart(document.getElementById('col2'));
                chart.draw(data, options);
            }
            google.charts.setOnLoadCallback(drawChart3);

            //SUKU
            function drawChart4() {
                // Define the chart to be drawn.
                var data = google.visualization.arrayToDataTable(analytics4);

                var options = {
                    colors: ['#B5EAD7']
                };

                // Instantiate and draw the chart.
                var chart = new google.visualization.ColumnChart(document.getElementById('col3'));
                chart.draw(data, options);
            }
            google.charts.setOnLoadCallback(drawChart4);

        });
    </script>
</head>

<body>
    <div class="container-heading">

        <div class="heading" style="text-align: center; padding: 2em; margin-bottom: 5em;">
            <h4> Grafik Data Alumni</h4><br>
            <h4>Yayasan Binterbusih Semarang</h4><br>
        </div>

    </div>

    <div class="card" style="margin-bottom: 3em;">
        <div class="card-body">
            <h4 class="card-title">Gender Alumni</h4>
            <!-- <div id="container-kelamin"></div> -->
            <div id="pie_chart" style="width:50%; height:250px; margin:0 auto;">

            </div>
        </div>
    </div>

    <div class="card card-2" style="margin-bottom: 3em;">
        <div class="card-body">
            <h4 class="card-title">Wilayah Adat</h4>
            <!-- <div id="container-wilayahadat"></div> -->
            <div id="col" style="width:100%; height:250px; margin:0 auto;"></div>
        </div>
    </div>

    <div class="card" style="margin-bottom: 3em;">
        <div class="card-body">
            <h4 class="card-title">Asal Kabupaten</h4>
            <div id="col2" style="width:100%; height:250px; margin:0 auto;"></div>
        </div>
    </div>


    <div class="card" style="margin-bottom: 3em;">
        <div class="card-body">
            <h4 class="card-title">Suku</h4>
            <div id="col3" style="width:100%; height:250px; margin:0 auto;"></div>
        </div>
    </div>

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
    <script src="../alumni/assets/js/chart.js"></script>
    <!-- End custom js for this page -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="../alumni/assets2/vendor/select2/select2.min.js"></script>
    <script src="../alumni/assets2/vendor/datepicker/moment.min.js"></script>
    <script src="../alumni/assets2/vendor/datepicker/daterangepicker.js"></script>
    <script src="../alumni/assets2/js/global.js"></script>

</body>

</html>