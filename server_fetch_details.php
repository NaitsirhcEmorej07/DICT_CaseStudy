<?php
if(isset($_POST['record_id'])){
    require_once('database.php');

    $sqlShowAll = "SELECT * FROM db_vaccination.tbl_vaccine_record WHERE id = '".$_POST['record_id']."'";
    if($resShowAll = mysqli_query($connect, $sqlShowAll)){
        $checkShowAll = mysqli_num_rows($resShowAll);
        if($checkShowAll > 0){
            while($row = mysqli_fetch_assoc($resShowAll)){
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
                $fdoze = $row['fdoze'];
                $sdoze = $row['sdoze'];
                $fbooster = $row['fbooster'];
                $sbooster = $row['sbooster'];
            }
        }
    }

    $somejson = "";
    $somejson .= "
        <form method='POST' action=''>
            <div class='form-group row'>
                <div class='col-12' style='text-align:left;width:100%;'>
                    
                    <h1 style='border-bottom: 3px solid #ddd; margin-bottom: 20px;'>$fname $lname</h1>
                    <table style='margin-left: 15px;margin-right: 15px;'>
                        <tbody>
                            <tr>
                                <td width='200'>
                                    <b>Mobile Number: </b>
                                </td>
                                <td>
                                    $mobile
                                </td>
                            </tr>
                            <tr>
                                <td width='200'>
                                    <b>Address: </b>
                                </td>
                                <td>
                                    $address, $city, $province
                                </td>
                            </tr>
                            <tr>
                                <td width='200'>
                                    <b>Date of Birth: </b>
                                </td>
                                <td>
                                    $birthdate
                                </td>
                            </tr>
                            <tr>
                                <td width='200'>
                                    <b>Gender: </b>
                                </td>
                                <td>
                                    $gender
                                </td>
                            </tr>
                            <tr>
                                <td width='200'>
                                    <b>Nationality: </b>
                                </td>
                                <td>
                                    $nationality
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class='form-group row'>
                <div class='col-12' style='text-align:center;width:100%;'>
                    <table style='border: 1px solid #555;width:100%;'>
                        <thead>
                            <tr>
                                <td style='border: 1px solid #555;background-color: #a6b9ff;'> </td>
                                <td style='border: 1px solid #555;background-color: #a6b9ff;'><b>Dose</b></td>
                                <td style='border: 1px solid #555;background-color: #a6b9ff;'><b>Booster</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style='border: 1px solid #555;'>1st</td>
                                <td style='border: 1px solid #555;'>$fdoze</td>
                                <td style='border: 1px solid #555;'>$sdoze</td>
                            </tr>
                            <tr>
                                <td style='border: 1px solid #555;'>2nd</td>
                                <td style='border: 1px solid #555;'>$fbooster</td>
                                <td style='border: 1px solid #555;'>$sbooster</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>   
        ";
    echo $somejson;
}
    
?>