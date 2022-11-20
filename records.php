<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="assets/city.js"></script>
  <title>Vaccination Records</title>
  

  <style>
    form{
      margin-top: 40px;
    }
    .pagetitle_record{
        text-align:center;
        margin: 50px;
    }
  </style>
</head>

<body>
  <?php 
    include 'nav.php'; 
    require_once 'database.php';

    require('database.php');

    if(isset($_POST['btn_submit'])){
      $fname = $_POST['txt_firstname'];
      $lname = $_POST['txt_lastname'];
      $number = $_POST['txt_number'];
      $haddress = $_POST['txt_homeaddress'];
      $province = $_POST['list_province'];
      $city = $_POST['list_city'];
      $dob = $_POST['date_dob'];
      $gender = $_POST['rad_gender'];
      $nationality = $_POST['list_nationality'];
      $fdose = $_POST['list_firstdose'];
      $sdose = $_POST['list_seconddose'];
      $fbooster = $_POST['list_firstbooster'];
      $sbooster = $_POST['list_secondbooster'];

      $insertRecord = "INSERT INTO 
      db_vaccination.tbl_vaccine_record 
      (fname, lname, mobile, address, province, city, birthdate, gender, nationality, fdoze, sdoze, fbooster, sbooster) 
      VALUES 
      ('$fname', '$lname', '$number', '$haddress', '$province', '$city', '$dob', '$gender', '$nationality', '$fdose', '$sdose', '$fbooster', '$sbooster')";
      
      if(mysqli_query($connect, $insertRecord)){
        $msg = $fname." ".$lname." wass successfully recorded.";
        header('Location: '.$_SERVER['PHP_SELF'].'?sucmsg='.$msg); 
      }
      else{
        $msg = "There is something wrong while recording ".$fname." ".$lname."'s info, please check your input or try again later";
        header('Location: '.$_SERVER['PHP_SELF'].'?errmsg='.$msg);
      }

    }
  ?>
<div class="container">
  
<form method="POST" action="">
    <h1 class="pagetitle_record">Vaccination Record</h1>
    <div class="msg">
    <?php
      if(isset($_GET['errmsg'])){
        echo "<div class='form-row' style='margin-top:-20px;margin-bottom:20px;text-align:center;font-size:15px;'><div class='col'><span style='color:#D8000C;'><i>".$_GET['errmsg']."</i></span></div></div>";
      }
      elseif(isset($_GET['sucmsg'])){
        echo "<div class='form-row' style='margin-top:-20px;margin-bottom:20px;text-align:center;font-size:15px;'><div class='col'><span style='color:green;'><i>".$_GET['sucmsg']."</i></span></div></div>";
      }
    ?>
  </div>
    <div class="form-group row">
      <label for="text1" class="col-4 col-form-label">First Name</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-card"></i>
            </div>
          </div>
          <input id="txt_firstname" name="txt_firstname" placeholder="Enter First Name" type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="text2" class="col-4 col-form-label">Last Name</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-card"></i>
            </div>
          </div>
          <input id="txt_lastname" name="txt_lastname" placeholder="Enter Last name" type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="text3" class="col-4 col-form-label">Mobile Number</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-card"></i>
            </div>
          </div>
          <input id="txt_number" name="txt_number" placeholder="Enter Mobile Number" type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="text4" class="col-4 col-form-label">Home Address</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-home"></i>
            </div>
          </div>
          <input id="txt_homeaddress" name="txt_homeaddress" placeholder="Street No. Street Name Bldg No." type="text" class="form-control" required>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-4 col-form-label" for="select">Province</label>
      <div class="col-8">
        <select id="list_province" name="list_province" class="custom-select" onChange="filterCities()" required>
        <option value="--select one--" disabled="disabled" selected>-- Select One --</option>
            <script>
              for (const [key] of Object.entries(cities)) {
                document.write(`<option value='${key}'>${key}</option>`);
              }
            </script>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4 col-form-label" for="select">City</label>
      <div class="col-8">
        <select id="list_city" name="list_city" class="custom-select" required>
        <option value="--select one--" disabled="disabled" selected>-- Select One --</option>
          <script>
              
            </script>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="text" class="col-4 col-form-label">Date of Birth</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-calendar"></i>
            </div>
          </div>
          <input id="date_dob" name="date_dob" type="date" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Gender</label>
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="rad_gender" id="rad_male" type="radio" class="custom-control-input" value="Male" checked="checked">
          <label for="rad_male" class="custom-control-label">Male</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="rad_gender" id="rad_female" type="radio" class="custom-control-input" value="Female">
          <label for="rad_female" class="custom-control-label">Female</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="select2" class="col-4 col-form-label">Nationality</label>
      <div class="col-8">
        <select id="list_nationality" name="list_nationality" class="custom-select" required>
          <option value="--select one--" disabled="disabled" selected>-- Select One --</option>
          <option value="Afghanistan">Afghanistan</option>
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="Philippines">Philippines</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="select3" class="col-4 col-form-label">First Dose</label>
      <div class="col-8">
        <select id="list_firstdose" name="list_firstdose" class="custom-select" required>
        <option value="--select one--" disabled="disabled" selected>-- Select One --</option>
          <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
          <option value="Moderna (mRNA-1273) ">Moderna (mRNA-1273)</option>
          <option value="Oxford/AstraZeneca">Oxford/AstraZeneca</option>
          <option value="J&J">J&J</option>
          <option value="Sinopharm">Sinopharm</option>
          <option value="Sinovac">Sinovac</option>
          <option value="COVAXIN">COVAXIN</option>
          <option value="Covovax">Covovax</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="select4" class="col-4 col-form-label">2nd Dose</label>
      <div class="col-8">
        <select id="list_seconddose" name="list_seconddose" class="custom-select" required>
        <option value="--select one--" disabled="disabled" selected>-- Select One --</option>
          <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
          <option value="Moderna (mRNA-1273)">Moderna (mRNA-1273)</option>
          <option value="Oxford/AstraZeneca">Oxford/AstraZeneca</option>
          <option value="J&J">J&J</option>
          <option value="Sinopharm">Sinopharm</option>
          <option value="Sinovac">Sinovac</option>
          <option value="COVAXIN">COVAXIN</option>
          <option value="Covovax">Covovax</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="select5" class="col-4 col-form-label">First Booster</label>
      <div class="col-8">
        <select id="list_firstbooster" name="list_firstbooster" class="custom-select" required>
        <option value="--select one--" disabled="disabled" selected>-- Select One --</option>
          <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
          <option value="Moderna (mRNA-1273)">Moderna (mRNA-1273)</option>
          <option value="Oxford/AstraZeneca">Oxford/AstraZeneca</option>
          <option value="J&J">J&J</option>
          <option value="Sinopharm">Sinopharm</option>
          <option value="Sinovac">Sinovac</option>
          <option value="COVAXIN">COVAXIN</option>
          <option value="Covovax">Covovax</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="select6" class="col-4 col-form-label">Second Booster</label>
      <div class="col-8">
        <select id="list_secondbooster" name="list_secondbooster" class="custom-select" required>
        <option value="--select one--" disabled="disabled" selected>-- Select One --</option>
          <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
          <option value="Moderna (mRNA-1273)">Moderna (mRNA-1273)</option>
          <option value="Oxford/AstraZeneca">Oxford/AstraZeneca</option>
          <option value="J&J">J&J</option>
          <option value="Sinopharm">Sinopharm</option>
          <option value="Sinovac">Sinovac</option>
          <option value="COVAXIN">COVAXIN</option>
          <option value="Covovax">Covovax</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="btn_submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // for (const [key, value] of Object.entries(cities)) {
    //   console.log(`${key}: ${value}`);
    // }

    function filterCities(){
      province = document.getElementById('list_province').value;
      city = document.getElementById("list_city");
      
      // Remove Previous Options if Applicable
      while (city.hasChildNodes()) {
        city.removeChild(city.firstChild);
      }
      // INSERT CODE FOR <option value="--select one--" disabled="disabled" selected>-- Select One --</option>
      cities[province].forEach((filteredCity) => {
        let option = document.createElement('option');
        option.textContent = filteredCity;
        document.querySelector('#list_city').appendChild(option);
        // console.log(document.querySelector('#list_city').appendChild(option)) 
      });
      
    }
    
  </script>
  <?php
    
  ?>
</body>

</html>