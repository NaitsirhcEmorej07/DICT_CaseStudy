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
<!-- Modal -->
<div id="personal_record" class="modal fade">  
<div class="container">
    <div class="modal-dialog modal-lg modal_large">  
      <div class="modal-content">  
          <div class="modal-header" style="background-color:bisque;background-size:cover;width: 100%;"> 
            <h4 class="modal-title" style="text-align:center;width: 100%;">Add Record</h4>  
            <button type="button" class="close" data-dismiss="modal" onCLick="closeModal()">&times;</button>
          </div>  
          <div class="modal-body" id="student_detail" style="background-color:#eee">
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
                <div class="modal-footer" style="background-color:bisque;background-size:cover;width: 100%;">  
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onClick="closeModal()">Close</button>  
                </div>  
            </div>  
    </div>  
</div> <!-- modal -->
</div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
  <script>
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
      });
    }
  </script>
  <script>
    function closeModal(){
      $('#personal_record').modal('hide')
    }
  </script>
</body>
</html>