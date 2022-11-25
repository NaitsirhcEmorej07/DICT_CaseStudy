<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="assets/city.js"></script>
  <title>Vaccination Records</title>


  <style>
    form {
      margin-top: 40px;
    }

    .pagetitle_record {
      text-align: center;
      margin: 50px;
    }
  </style>


</head>

<body>
  <?php
  require_once 'database.php';

  if (isset($_POST['btn_update_submit'])) {
    $fname = $_POST['txt_firstname'];
    $lname = $_POST['txt_lastname'];
    $number = $_POST['txt_number'];
    $haddress = $_POST['txt_homeaddress'];
    $province = $_POST['list_province_edit'];
    $city = $_POST['list_city_edit'];
    $dob = $_POST['date_dob'];
    $gender = $_POST['rad_gender_edit'];
    $nationality = $_POST['list_nationality'];
    $fdose = $_POST['list_firstdose'];
    $sdose = $_POST['list_seconddose'];
    $fbooster = $_POST['list_firstbooster'];
    $sbooster = $_POST['list_secondbooster'];
    $update_id_placeholder = $_POST['update_id_placeholder'];

    $Update_Record = "

    UPDATE tbl_vaccine_record
    SET 
    fname = '$fname', 
    lname = '$lname', 
    mobile = '$number', 
    address = '$haddress', 
    province = '$province', 
    city = '$city', 
    birthdate = '$dob', 
    gender = '$gender', 
    nationality = '$nationality', 

    fdoze = '$fdose', 
    sdoze = '$sdose', 

    fbooster = '$fbooster', 
    sbooster = '$sbooster'
    WHERE id = '$update_id_placeholder'
      ";

    if (mysqli_query($connect, $Update_Record)) {
      $msg = $fname . " " . $lname . " was successfully updated.";
      echo "<script>window.location.href='records.php?sucmsg=$msg'
        </script>";
    } else {
      $msg = "There is something wrong while recording " . $fname . " " . $lname . "'s info, please check your input or try again later";
      echo "<script>window.location.href='records.php?errmsg=error</script>";
    }
  }
  ?>


  <div id="Update_Modal" class="modal fade">
    <div class="container">
      <div class="modal-dialog modal-lg modal_large">
        <div class="modal-content">
          <div class="modal-header" style="background-color:bisque;background-size:cover;width: 100%;">
            <h4 class="modal-title" style="text-align:center;width: 100%;">Update Record</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="student_detail" style="background-color:#eee">
            <form method="POST" action="">
              <input type="text" id="update_id_placeholder" name="update_id_placeholder" hidden>

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
                  <select id="list_province_edit" name="list_province_edit" class="custom-select" onChange="filterCitiesUpdate()" required>
                    <script>
                      for (const [key] of Object.entries(cities)) {
                        document.write(`<option value='${key}'>${key}</option>`);
                      }
                      // filterCities()
                    </script>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4 col-form-label" for="select">City</label>
                <div class="col-8">
                  <select id="list_city_edit" name="list_city_edit" class="custom-select">
                    <script>
                      // filterCities()
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
                    
                    <input name="rad_gender_edit" id="rad_male_edit" type="radio" class="custom-control-input" value="Male">
                    <label for="rad_male_edit" class="custom-control-label">Male</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="rad_gender_edit" id="rad_female_edit" type="radio" class="custom-control-input" value="Female">
                    <label for="rad_female_edit" class="custom-control-label">Female</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="select2" class="col-4 col-form-label">Nationality</label>
                <div class="col-8">
                  <select id="list_nationality_edit" name="list_nationality_edit" class="custom-select" required>
                    <?php include 'nationality.php'; ?>
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
                  <select id="list_seconddose" name="list_seconddose" class="custom-select" >
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
                  <select id="list_firstbooster" name="list_firstbooster" class="custom-select" >
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
                  <select id="list_secondbooster" name="list_secondbooster" class="custom-select" >
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
                  <button name="btn_update_submit" id="btn_update_submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer" style="background-color:bisque;background-size:cover;width: 100%;">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
          </div>
        </div>
      </div>
    </div> <!-- modal -->
  </div>


  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
  <script>
    function filterCitiesUpdate() {
      province = document.getElementById('list_province_edit').value;
      city = document.getElementById("list_city_edit");

      while (city.hasChildNodes()) {
        city.removeChild(city.firstChild);
      }
      console.log(cities[province]);
      cities[province].forEach((filteredCity) => {
        let option = document.createElement('option');
        option.textContent = filteredCity;
        document.querySelector('#list_city_edit').appendChild(option);
      });
    }
  </script>

</body>

</html>