


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
  <!-- Modal -->
  <div class="modal fade" id="mdl_showRecord" tabindex="-1" aria-labelledby="mdl_showRecordLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color:bisque;">
          <h1 class="modal-title fs-5" id="mdl_showRecordLabel" style="text-align:center;width:100%;">Vaccination Record</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="div_records">
          ...asdasd
        </div>
        <div class="modal-footer" style="background-color:bisque;">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
  <script>
    function filterCities() {
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
    function closeModal() {
      $('#personal_record').modal('hide')
    }
  </script>


  
</body>

</html>