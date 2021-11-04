<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Grafik Data Alumni</title>

    <link rel="stylesheet" href="alumni/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="alumni/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="alumni/assets/css/style.css">
    <link rel="shortcut icon" href="alumni/assets/images/binterbusih.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="alumni/assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="alumni/assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="alumni/https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="alumni/assets2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="alumni/assets2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="alumni/assets2/css/main.css" rel="stylesheet" media="all"> -->
    <script type="text/javascript">
        var analytics = <?php echo $jenis_kelamin; ?>

        google.charts.load('current', {
            'packages': ['corechart']
        });

        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                colors: ['#36a2eb', '#ff6384'],
                backgroundColor: '#00F0F8FF'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>

    <div class="container">
        <div class="page-header">
            <h2> Grafik Data Alumni </h2>
            <a href="/login" class="btn btn-gradient-info btn-rounded ml-auto">Login</a>
        </div>

        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Gender Alumni</h4>
                        <div id="pie_chart" style="width:470px; height:250px; margin:0 auto;">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Wilayah Adat</h4>
                        <canvas id="polarArea" style="height: 277px; display: block; width: 554px;" width="554" height="277" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Asal Kabupaten</h4>
                        <canvas id="pieChart" style="height: 277px; display: block; width: 554px;" width="554" height="277" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
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