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
    /* .container{
      background-color: green;
    } */
  </style>

</head>

<body>
  <?php 
    include 'nav.php'; 
    // require_once 'database.php';
  ?>
<div class="container">
<form method="POST" action="">
    <div class="form-group row">
      <label for="text1" class="col-4 col-form-label">First Name</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-card"></i>
            </div>
          </div>
          <input id="text1" name="text1" placeholder="Enter First Name" type="text" class="form-control">
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
          <input id="text2" name="text2" placeholder="Enter Last name" type="text" class="form-control">
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
          <input id="text3" name="text3" placeholder="Enter Mobile Number" type="text" class="form-control">
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
          <input id="text4" name="text4" placeholder="Street No. Street Name Bldg No." type="text" class="form-control">
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-4 col-form-label" for="select">Province</label>
      <div class="col-8">
        <select id="list_province" name="select" class="custom-select" onChange="filterCities()">
          <option value="--select one--" >--select one--</option>
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
        <select id="list_city" name="select" class="custom-select">
          <option value="--select one--">--select one--</option>
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
          <input id="text" name="text" type="date" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Gender</label>
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Male">
          <label for="radio_0" class="custom-control-label">Male</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Female">
          <label for="radio_1" class="custom-control-label">Female</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="select2" class="col-4 col-form-label">Nationality</label>
      <div class="col-8">
        <select id="select2" name="select2" class="custom-select">
          <option value="--select one--">--select one--</option>
          <option value="Afghanistan">Afghanistan</option>
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="select3" class="col-4 col-form-label">First Dose</label>
      <div class="col-8">
        <select id="select3" name="select3" class="custom-select">
          <option value="--select one--">--select one--</option>
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
        <select id="select4" name="select4" class="custom-select">
          <option value="--select one--">--select one--</option>
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
        <select id="select5" name="select5" class="custom-select">
          <option value="--select one--">--select one--</option>
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
        <select id="select6" name="select6" class="custom-select">
          <option value="--select one--">--select one--</option>
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
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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
      var province = document.getElementById('list_province').value;
      var city = document.getElementById("list_city");
      
      var option = document.createElement("option");
      city.remove(option); // remove current list of options

      const selectedCities = province.map(city => {
        console.log(city)
      }
      )


      // option.text = province;
      // city.add(option);
    }
    
  </script>
</body>

</html>