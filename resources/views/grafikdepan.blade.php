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

  <script type="text/javascript">
    var analytics = <?php echo $jenis_kelamin; ?>;
    var analytics2 = <?php echo $wilayah_adat; ?>;
    var analytics3 = <?php echo $asal_kabupaten; ?>;
    var analytics4 = <?php echo $suku; ?>;

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
  </script>
</head>

<body>

  <div class="container-depan" style="width: 95% ; margin:0 auto;">
    <div class="page-header" style="margin-bottom: 3em;">
      <h2> Grafik Data Alumni </h2>
      <a href="/login" class="btn btn-gradient-info btn-rounded ml-auto">Login</a>
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