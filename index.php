<?php
include_once 'database.php';
$sql = "
SELECT sum(DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthdate)), '%Y') + 0 < 18) AS minor, 
sum(DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthdate)), '%Y') + 0 >= 18) AS adult, 
(SELECT COUNT(*) FROM tbl_vaccine_record WHERE nationality != 'philippines' ) as foreigner,
(SELECT COUNT(*) FROM tbl_vaccine_record WHERE nationality = 'philippines' ) as local,
(SELECT COUNT(*) FROM tbl_vaccine_record) as total
FROM tbl_vaccine_record;
";
$result = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($result)) {
  $minor = $row["minor"];
  $adult = $row["adult"];
  $foreigner = $row["foreigner"];
  $local = $row["local"];
  $total = $row["total"];
}
//PERCENTAGE


if ($adult == 0) {
  $adultpercentage = 0;
}
else
{
  $adultpercentage = ($adult * 100) / $total;
}

if ($minor == 0) {
  $minorpercentage = 0;
}
else
{
  $minorpercentage = ($minor * 100) / $total;
}

if ($local == 0) {
  $localpercentage = 0;
}
else
{
  $localpercentage = ($local * 100) / $total;
}

if ($foreigner == 0) {
  $foreignerpercentage = 0;
}
else
{
  $foreignerpercentage = ($foreigner * 100) / $total;
}







//QUERY FOR FIRST DOSE
$sqlfdose = "
SELECT sum(DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthdate)), '%Y') + 0 < 18) AS minor, 
sum(DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthdate)), '%Y') + 0 >= 18) AS adult,
(SELECT COUNT(*) FROM tbl_vaccine_record WHERE nationality != 'philippines' ) as foreigner,
(SELECT COUNT(*) FROM tbl_vaccine_record WHERE nationality = 'philippines' ) as local
from tbl_vaccine_record 
WHERE fdoze != '';
";
$result = mysqli_query($connect, $sqlfdose);
while ($row = mysqli_fetch_array($result)) {
  $minorfdose = $row["minor"];
  $adultfdose = $row["adult"];
  $foreignerfdose = $row["foreigner"];
  $localfdose = $row["local"];
}

//QUERY FOR SECOND DOSE
$sqlsdose = "
SELECT sum(DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthdate)), '%Y') + 0 < 18) AS minor, 
sum(DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthdate)), '%Y') + 0 >= 18) AS adult,
(SELECT COUNT(*) FROM tbl_vaccine_record WHERE nationality != 'philippines' ) as foreigner,
(SELECT COUNT(*) FROM tbl_vaccine_record WHERE nationality = 'philippines' ) as local 
from tbl_vaccine_record 
WHERE sdoze != '';
";
$result = mysqli_query($connect, $sqlsdose);
while ($row = mysqli_fetch_array($result)) {
  $minorsdose = $row["minor"];
  $adultsdose = $row["adult"];
  $foreignersdose = $row["foreigner"];
  $localsdose = $row["local"];
}

//QUERY FOR FIRST BOOSTER
$sqlfbooster = "
SELECT sum(DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthdate)), '%Y') + 0 < 18) AS minor, 
sum(DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthdate)), '%Y') + 0 >= 18) AS adult,
(SELECT COUNT(*) FROM tbl_vaccine_record WHERE nationality != 'philippines' ) as foreigner,
(SELECT COUNT(*) FROM tbl_vaccine_record WHERE nationality = 'philippines' ) as local  
from tbl_vaccine_record 
WHERE fbooster != '';
";
$result = mysqli_query($connect, $sqlfbooster);
while ($row = mysqli_fetch_array($result)) {
  $minorfbooster = $row["minor"];
  $adultfbooster = $row["adult"];
  $foreignerfbooster = $row["foreigner"];
  $localfbooster = $row["local"];
}

//QUERY FOR SECOND BOOSTER
$sqlsbooster = "
SELECT sum(DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthdate)), '%Y') + 0 < 18) AS minor, 
sum(DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthdate)), '%Y') + 0 >= 18) AS adult,
(SELECT COUNT(*) FROM tbl_vaccine_record WHERE nationality != 'philippines' ) as foreigner,
(SELECT COUNT(*) FROM tbl_vaccine_record WHERE nationality = 'philippines' ) as local 

from tbl_vaccine_record 
WHERE sbooster != '';
";
$result = mysqli_query($connect, $sqlsbooster);
while ($row = mysqli_fetch_array($result)) {
  $minorsbooster = $row["minor"];
  $adultsbooster = $row["adult"];
  $foreignersbooster = $row["foreigner"];
  $localsbooster = $row["local"];
}

//QUERY FOR COUNT COMMIN BRAND
$sqlcountall= "SELECT

(SELECT COUNT(*) FROM tbl_vaccine_record WHERE 
fdoze = 'Pfizer-BioNTech' or 
sdoze = 'Pfizer-BioNTech' or 
fbooster = 'Pfizer-BioNTech' or 
sbooster = 'Pfizer-BioNTech'  ) as pfizer,

(SELECT COUNT(*) FROM tbl_vaccine_record WHERE 
fdoze = 'Moderna (mRNA-1273)' or 
sdoze = 'Moderna (mRNA-1273)' or 
fbooster = 'Moderna (mRNA-1273)' or 
sbooster = 'Moderna (mRNA-1273)'  ) as moderna,

(SELECT COUNT(*) FROM tbl_vaccine_record WHERE 
fdoze = 'Oxford/AstraZeneca' or 
sdoze = 'Oxford/AstraZeneca' or 
fbooster = 'Oxford/AstraZeneca' or 
sbooster = 'Oxford/AstraZeneca'  ) as astra,

(SELECT COUNT(*) FROM tbl_vaccine_record WHERE 
fdoze = 'J&J' or 
sdoze = 'J&J' or 
fbooster = 'J&J' or 
sbooster = 'J&J'  ) as jj,

(SELECT COUNT(*) FROM tbl_vaccine_record WHERE 
fdoze = 'Sinovac' or 
sdoze = 'Sinovac' or 
fbooster = 'Sinovac' or 
sbooster = 'Sinovac'  ) as sinovac,

(SELECT COUNT(*) FROM tbl_vaccine_record WHERE 
fdoze = 'Sinopharm' or 
sdoze = 'Sinopharm' or 
fbooster = 'Sinopharm' or 
sbooster = 'Sinopharm'  ) as sinopharm,

(SELECT COUNT(*) FROM tbl_vaccine_record WHERE 
fdoze = 'COVAXIN' or 
sdoze = 'COVAXIN' or 
fbooster = 'COVAXIN' or 
sbooster = 'COVAXIN'  ) as covaxin,

(SELECT COUNT(*) FROM tbl_vaccine_record WHERE 
fdoze = 'Covovax' or 
sdoze = 'Covovax' or 
fbooster = 'Covovax' or 
sbooster = 'Covovax'  ) as covovax;
";
$result = mysqli_query($connect, $sqlcountall);
while ($row = mysqli_fetch_array($result)) {
  $pfizer = $row["pfizer"];
  $moderna = $row["moderna"];
  $astra = $row["astra"];
  $jj = $row["jj"];
  $sinovac = $row["sinovac"];
  $sinopharm = $row["sinopharm"];
  $covaxin = $row["covaxin"];
  $covovax = $row["covovax"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vaccination Records</title>


  <style>
    form {
      margin-top: 40px;
    }
  </style>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
  <?php
  include 'nav.php';
  // require_once 'database.php';
  ?>

  <div class="text-center">
    <h1>STATISTICS</h1>
    <div class="row">
      <div class="col d-flex justify-content-center">
        <h4>TOTAL RECORDS: </h4> &nbsp;
        <br>
        <!-- <button class="btn btn-primary"></button> -->
        <h4><?php echo ($total); ?></h4>
      </div>
    </div>
  </div>

  <br>

  <div class="container ">
    <div class="row">
      <div class="col-md-3 d-flex justify-content-end ">
        <button class="btn btn-outline-primary btn-lg" style="width:220px; height: 100px; border-width: medium; color:black">Adult <br>
          <p><?php echo ($adult." Records "."|    ".number_format($adultpercentage)."%");  ?></p>
        </button>
      </div>
      <div class="col-md-3 ">
        <button class="btn btn-outline-danger btn-lg" style="width:220px; height: 100px; border-width: medium; color:black">Minor <br>
          <p><?php echo ($minor." Records "."|    ".number_format($minorpercentage)."%");  ?></p>
        </button>
      </div>
      <div class="col-md-3 d-flex justify-content-end ">
        <button class="btn btn-outline-warning btn-lg" style="width:220px; height: 100px; border-width: medium; color:black">Local <br>
        <p><?php echo ($local." Records "."|    ".number_format($localpercentage)."%");  ?></p>
        </button>
      </div>
      <div class="col-md-3 ">
        <button class="btn btn-outline-success btn-lg" style="width:220px; height: 100px; border-width: medium; color:black">Foreigner <br>
        <p><?php echo ($foreigner." Records "."|    ".number_format($foreignerpercentage)."%");  ?></p>
        </button>
      </div>
    </div>
  </div>

  <br>
  <div class="container  text-center mb-1" style=" border:solid; border-width: thin;">
    <div class="p-3" id="barchart" style="width: 100%; height: 400px;"></div>
  </div>
  <div class="container  text-center" style=" border:solid; border-width: thin;">
    <div id="piechart" style="width: 1000px; height: 500px;"></div>
  </div>


  <script type="text/javascript">
    //PIE CHART
    google.charts.load('current', {
      'packages': ['corechart']
    });
    //BAR CHART 
    google.charts.load('current', {
      'packages': ['bar']
    });

    //PIE AND BAR CHART ONLOAD
    google.charts.setOnLoadCallback(drawChart);


    function drawChart() {
      //PIE CHART
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Pfizer-BioNTech', <?php echo($pfizer); ?>],
        ['Moderna (mRNA-1273)', <?php echo($moderna); ?>],
        ['Oxford/AstraZeneca', <?php echo($astra); ?>],
        ['J&J', <?php echo($jj); ?>],
        ['Sinopharm', <?php echo($sinopharm); ?>],
        ['Sinovac', <?php echo($sinovac); ?>],
        ['COVAXIN', <?php echo($covaxin); ?>],
        ['Covovax', <?php echo($covovax); ?>],
      ]);
      var options = {
        is3D: true,
        bold: false,
        fontSize: 18,
        title: 'COMMONLY USED VACCINE BRANDS'
      };


      //BAR CHART
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
      var data = google.visualization.arrayToDataTable([
        ['Image 1: Bar Chart for the Vaccination Report of vaccine dosage and booster', 'Adults', 'Minor', 'Local', 'Foreigner'],
        ['First Dose', <?php echo $adultfdose  ?>, <?php echo $minorfdose ?>, <?php echo $localfdose ?>, <?php echo $foreignerfdose ?>],
        ['Second Dose', <?php echo $adultsdose ?>, <?php echo $minorsdose ?>, <?php echo $localsdose ?>, <?php echo $foreignersdose ?>],
        ['First Booster', <?php echo  $adultfbooster ?>, <?php echo $minorfbooster ?>, <?php echo $localfbooster ?>, <?php echo $foreignerfbooster ?>],
        ['Second Booster', <?php echo $adultsbooster ?>, <?php echo $minorsbooster ?>, <?php echo $localsbooster ?>, <?php echo $foreignersbooster ?>]
      ]);
      var options = {
        chart: {
          fontSize: 20,
          title: 'VACCINATION REPORT',
          subtitle: '1st-2nd Dose and 1st-2nd Booster',
        }
      };
      var chart = new google.charts.Bar(document.getElementById('barchart'));
      chart.draw(data, google.charts.Bar.convertOptions(options));
      
      // $(window).resize(function() {
      //   drawChart();
      // });
    }
  </script>
  <?php 
  
  ?>
</body>

</html>