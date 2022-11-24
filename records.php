<?php
include("delete_records_confirmation_modal.php");
include("update_records.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/regular.min.css" integrity="sha512-k2UAKyvfA7Xd/6FrOv5SG4Qr9h4p2oaeshXF99WO3zIpCsgTJ3YZELDK0gHdlJE5ls+Mbd5HL50b458z3meB/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"/>
    <script src="assets/city.js"></script>
    <title>Vaccination Records</title>
    <style>
        body {
            margin: 0;
            padding: 0
        }

        .div_records {
            margin: auto;
            text-align: center;
            width: 100%;
        }

        .title {
            margin: 20px;
        }

        #btn_add_record {
            margin: 15px 5px;
        }
    </style>
</head>

<body>
    <?php
    include 'nav.php';
    require_once 'database.php';
    ?>
    <div class="container-fluid">

        <div class="row div_records">
            <h1 class="title">Vaccination Record</h1>
            <div class="msg">
                <?php
                if (isset($_GET['errmsg'])) {
                    echo "<div class='form-row' style='margin-top:-20px;margin-bottom:20px;text-align:center;font-size:15px;'><div class='col'><span style='color:#D8000C;'><i>" . $_GET['errmsg'] . "</i></span></div></div>";
                } elseif (isset($_GET['sucmsg'])) {
                    echo "<div class='form-row' style='margin-top:-20px;margin-bottom:20px;text-align:center;font-size:15px;'><div class='col'><span style='color:green;'><i>" . $_GET['sucmsg'] . "</i></span></div></div>";
                }
                ?>
            </div>
            <div class="col-lg-4 offset-lg-8" style="text-align:right;">
                <button class="btn btn-primary" id="btn_add_record"><i class="fa-sharp fa-solid fa-user-plus"></i> Add Record</button>
            </div>
            <div class="col-lg-12">
                <table class="table table-striped table_records" id="table_records" style="width: 100%;">
                    <thead class="table-dark">
                        <tr>
                            <td style='text-align:center;'>
                                ID
                            </td>
                            <td style='text-align:center;'>
                                First Name
                            </td>
                            <td style='text-align:center;'>
                                Last Name
                            </td>
                            <td style='text-align:center;'>
                                Mobile Number
                            </td>
                            <td style='text-align:center;'>
                                Home Address
                            </td>
                            <td style='text-align:center;'>
                                Province
                            </td>
                            <td style='text-align:center;'>
                                City
                            </td>
                            <td style='text-align:center;'>
                                Date of Birtd
                            </td>
                            <td style='text-align:center;'>
                                Gender
                            </td>
                            <td style='text-align:center;'>
                                Nationality
                            </td>
                            <td style='text-align:center;'>
                                Action
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sqlShowAll = "SELECT * FROM db_vaccination.tbl_vaccine_record";
                        if ($resShowAll = mysqli_query($connect, $sqlShowAll)) {
                            $checkShowAll = mysqli_num_rows($resShowAll);
                            if ($checkShowAll > 0) {
                                while ($row = mysqli_fetch_assoc($resShowAll)) {
                                    $id = $row['id'];
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
                                    $mobile = $row['mobile'];
                                    $address = $row['address'];
                                    $province = $row['province'];
                                    $city = $row['city'];
                                    $birthdate = $row['birthdate'];
                                    $gender = $row['gender'];
                                    $nationality = $row['nationality'];
                                    $action  = '
                                            <button type="button" class="btn btn-warning btn_show" data-bs-toggle="modal" data-bs-target="#mdl_showRecord" id="' . $id . '"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                                            <button type="button" class="btn btn-success update_records" value="' . $id . '" onclick="" id="' . $id . '"><i class="fa-sharp fa-solid fa-pencil" ></i></button>
                                            <button type="button" class="btn btn-danger delete_records"  value="' . $id . '" id="btn_delete"><i class="fa-sharp fa-solid fa-trash-can" ></i></button>
                                        ';

                                    echo
                                    "
                                        <tr>
                                            <td>
                                                $id
                                            </td>
                                            <td>
                                                $fname
                                            </td>
                                            <td>
                                                $lname
                                            </td>
                                            <td>
                                                $mobile
                                            </td>
                                            <td>
                                                $address
                                            </td>
                                            <td>
                                                $province
                                            </td>
                                            <td>
                                                $city
                                            </td>
                                            <td>
                                                $birthdate
                                            </td>
                                            <td>
                                                $gender
                                            </td>
                                            <td>
                                                $nationality
                                            </td>
                                            <td style='text-align:center;'>
                                                $action
                                            </td>
                                        </tr>
                                        ";
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        include('add_records.php');
        include('show_record.php');
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btn_add_record').on('click', function() {
                $('#mdl_addRecord').modal("show"); 
            });

            $('#table_records tbody').on('click', '.btn_show', function() {
                var record_id = $(this).attr("id");
                console.log(record_id);
                $.ajax({
                    url: "server_fetch_details.php",
                    method: "post",
                    data: {
                        record_id: record_id
                    },
                    success: function(data) {
                        $('#div_records').html(data);
                    },
                    error: function(data) {
                        alert('Ajax Data Fetch Error');
                    }
                });
            });
        })
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete_records', function(event) {
                $('#delete_records_confirmation_modal').modal('show');
                var delete_records_value = $(this).attr("value");
                $('#confirm_delete_btn').val(delete_records_value);

            });

            $(document).on('click', '#confirm_delete_btn', function(event) {
                var delete_records_value = $(this).attr("value");
                $.ajax({

                    url: "server_delete_details.php",
                    method: "POST",
                    data: {
                        delete_records_value
                    },
                    dataType: "json",
                    success: function(data) {
                        console.log(data);

                        var msg = data+"'s record was successfully deleted";
                        window.location.href='records.php?sucmsg='+msg;
                       
                    }
                })
            });

            $(document).on('click', '.update_records', function(event) {
                var update_records_value = $(this).attr("value");
                $.ajax({
                    url: "server_fetch_update_details.php",
                    method: "POST",
                    data: {
                        update_records_value
                    },
                    dataType: "json",
                    success: function(data) {
                    console.log(data);
                    
                    $('#Update_Modal').modal('show');
                    $('#update_id_placeholder').val(data.id);
                    $('#txt_firstname').val(data.fname);
                    $('#txt_lastname').val(data.lname);
                    $('#txt_number').val(data.mobile);
                    $('#txt_homeaddress').val(data.address);
                    $('#list_province_edit option[value="' + data.province + '"]').prop('selected', true);
                    $('#date_dob').val(data.birthdate);
                    $('input[value='+data.gender+']').prop('checked',true);
                    $('#list_nationality_edit option[value="' + data.nationality + '"]').prop('selected', true);
                    $('#list_firstdose').val(data.fdoze);
                    $('#list_seconddose').val(data.fbooster);
                    $('#list_firstbooster').val(data.sdoze);
                    $('#list_secondbooster').val(data.sbooster);
                    filterCitiesUpdate();
                    $('#list_city_edit').val(data.city);
                    }
                })
            });
        });
        $(document).ready( function () {
            $('#table_records').DataTable();
        } );
    </script>
</body>
</html>