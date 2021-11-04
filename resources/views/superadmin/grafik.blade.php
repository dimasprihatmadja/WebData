<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Grafik Laporan Alumni</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="alumni/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="alumni/assets/vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="alumni/assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- End layout styles -->
  <link rel="shortcut icon" href="alumni/assets/images/binterbusih.png" />
  <script type="text/javascript">
    $(function() {
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

    });
  </script>
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
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic">
              <span class="menu-title">Laporan</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-clipboard-text menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/grafik" style="color: #434a54;">Grafik Laporan</a></li>
                <li class="nav-item"> <a class="nav-link" href="/cetaklaporan" style="color: #434a54;">Cetak Laporan</a></li>
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
              <div class="mt-3">
                <a class="btn btn-block btn-lg btn-gradient-info mt-4" href="/formAlumni">+Input</a>
              </div>
            </span>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header" style="margin-bottom: 3em;">
            <h2> Grafik Laporan Alumni </h2>
            <a href="/graph" class="btn btn-sm btn-primary ml-auto" style="background-color: #047edf; border: 0px; padding :1em">Cetak grafik</a>
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