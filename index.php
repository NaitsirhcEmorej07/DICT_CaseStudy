<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>Covid 19 Vaccinated Records</h1>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <form>
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


    <!--Check the assets file for the values to be displayed on
provinces, cities and nationalities.-->

    <div class="form-group row">
      <label class="col-4 col-form-label" for="select">Province</label>
      <div class="col-8">
        <select id="select" name="select" class="custom-select">
          <option value="--select one--">--select one--</option>
          <option value="Abra">Abra</option>
          <option value="Agusan del Norte">Agusan del Norte</option>
          <option value="Agusan del Sur">Agusan del Sur</option>
          <option value="Aklan">Aklan</option>
          <option value="Albay">Albay</option>
          <option value="Antique">Antique</option>
          <option value="Apayao">Apayao</option>
          <option value="Aurora">Aurora</option>
          <option value="Basilan">Basilan</option>
          <option value="Bataan">Bataan</option>
          <option value="Batanes">Batanes</option>
          <option value="Batangas">Batangas</option>
          <option value="Benguet">Benguet</option>
          <option value="Biliran">Biliran</option>
          <option value="Bohol">Bohol</option>
          <option value="Bukidnon">Bukidnon</option>
          <option value="Bulacan">Bulacan</option>
          <option value="Cagayan">Cagayan</option>
          <option value="Camarines Norte">Camarines Norte</option>
          <option value="Camarines Sur">Camarines Sur</option>
          <option value="Camiguin">Camiguin</option>
          <option value="Capiz">Capiz</option>
          <option value="Catanduanes">Catanduanes</option>
          <option value="Cavite">Cavite</option>
          <option value="Cebu">Cebu</option>
          <option value="Compostela Valley">Compostela Valley</option>
          <option value="Cotabato">Cotabato</option>
          <option value="Davao del Norte">Davao del Norte</option>
          <option value="Davao del Sur">Davao del Sur</option>
          <option value="Davao Occidental">Davao Occidental</option>
          <option value="Davao Oriental">Davao Oriental</option>
          <option value="Dinagat Islands">Dinagat Islands</option>
          <option value="Eastern Samar">Eastern Samar</option>
          <option value="Guimaras">Guimaras</option>
          <option value="Ifugao">Ifugao</option>
          <option value="Ilocos Norte">Ilocos Norte</option>
          <option value="Ilocos Sur">Ilocos Sur</option>
          <option value="Iloilo">Iloilo</option>
          <option value="Isabela">Isabela</option>
          <option value="Kalinga">Kalinga</option>
          <option value="La Union">La Union</option>
          <option value="Laguna">Laguna</option>
          <option value="Lanao del Norte">Lanao del Norte</option>
          <option value="Lanao del Sur">Leyte</option>
          <option value="Leyte">Maguindanao</option>
          <option value="Maguindanao">Marinduque</option>
          <option value="Marinduque">Masbate</option>
          <option value="Masbate">Misamis Occidental</option>
          <option value="Misamis Occidental">Misamis Oriental</option>
          <option value="Mountain Province">Mountain Province</option>
          <option value="Negros Occidental">Negros Occidental</option>
          <option value="Negros Oriental">Negros Oriental</option>
          <option value="Northern Samar">Northern Samar</option>
          <option value="Nueva Ecija">Nueva Ecija</option>
          <option value="Nueva Vizcaya">Nueva Vizcaya</option>
          <option value="Occidental Mindoro">Occidental Mindoro</option>
          <option value="Oriental Mindoro">Oriental Mindoro</option>
          <option value="Palawan">Palawan</option>
          <option value="Pampanga">Pampanga</option>
          <option value="Pangasinan">Pangasinan</option>
          <option value="Quezon">Quezon</option>
          <option value="Quirino">Quirino</option>
          <option value="Rizal">Rizal</option>
          <option value="Romblon">Romblon</option>
          <option value="Samar">Samar</option>
          <option value="Sarangani">Sarangani</option>
          <option value="Siquijor">Siquijor</option>
          <option value="Sorsogon">Sorsogon</option>
          <option value="South Cotabato">South Cotabato</option>
          <option value="Southern Leyte">Southern Leyte</option>
          <option value="Sultan Kudarat">Sultan Kudarat</option>
          <option value="Sulu">Sulu</option>
          <option value="Surigao del Norte">Surigao del Norte</option>
          <option value="Surigao del Sur">Surigao del Sur</option>
          <option value="Tarlac">Tarlac</option>
          <option value="Tawi-Tawi">Tawi-Tawi</option>
          <option value="Zambales">Zambales</option>
          <option value="Zamboanga del Norte">Zamboanga del Norte</option>
          <option value="Zamboanga del Sur">Zamboanga del Sur</option>
          <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
          <option value="Metro Manila">Metro Manila</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="select1" class="col-4 col-form-label">City</label>
      <div class="col-8">
        <select id="select1" name="select1" class="custom-select">
          <option value="--select one--">--select one--</option>
          <option value="Alaminos">Alaminos</option>
          <option value="Angeles City">Angeles City</option>
          <option value="Antipolo">Antipolo</option>
          <option value="Bacolod">Bacolod</option>
          <option value="Bacoor">Bacoor</option>
          <option value="Bago">Bago</option>
          <option value="Baguio">Baguio</option>
          <option value="Bais">Bais</option>
          <option value="Balanga">Balanga</option>
          <option value="Batac">Batac</option>
          <option value="Batangas City">Batangas City</option>
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
          <input id="text" name="text" placeholder="yyyy-mm-dd" type="text" class="form-control">
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
</body>

</html>