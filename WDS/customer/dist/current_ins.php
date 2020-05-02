<!-- This page shows current home insurances -->
<!DOCTYPE html>
<html>

<head>
    <title>Home Insurance</title>
</head>

<body class="sb-nav-fixed">
    <?php
    require_once 'header.php';
    ?>
    <div id="layoutSidenav_content">
        <?php
        require_once 'home_ins_header.php';
        ?>


        <input type="hidden" name="emailField" id="userEmail" value="<?php echo $_SESSION['email']; ?>">

        <!-- Div class for error handling -->


        <div id="error" style="display:<?php echo isset($_SESSION['display']) ? $_SESSION['display'] : 'none;';
                                        unset($_SESSION['display']); ?> ">
            <br><br>
            <div class="<?php echo isset($_SESSION['alert_class']) ? $_SESSION['alert_class'] : 'none;';
                        unset($_SESSION['alert_class']); ?>">
                <?php echo isset($_SESSION['errorMsg']) ? $_SESSION['errorMsg'] : 'none;';
                unset($_SESSION['errorMsg']);  ?></div>
        </div>

        <?php

        $result1 = showHomeInsDetails($_SESSION['email']);
        while ($row1 = mysqli_fetch_array($result1)) {

            $res1 = createHomeModal($row1['hinsid']);
            addAssetModal($row1['hinsid']);
        }

        ?>


        <div class="home_ins_content">
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i> Current Insurances</div>
                <div class="card-body">
                    <div class="table-table-responsive-lg">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th>Policy No.</th>
                                    <th>House Details</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Amount</th>
                                    <th>Payments</th>
                                    <th>Status</th>
                                    <th>Add Assets</th>
                                </tr>
                            </thead>
                            <tbody>
                                

                            <?php

                            $result = showHomeInsDetails($_SESSION['email']);
                            if ($result == false) {
                                echo " <tr>
                                        <td colspan='8'>No insurances found. &nsp;&nbsp;Add some from new insurance portal.</td>
                                      </tr>";
                            } else {
                                while ($row = mysqli_fetch_array($result)) {

                                    if($row['status']=='C'){
                                        $row['status'] = 'Current';
                                    }
                                    else{
                                        $row['status'] = 'Expired';
                                    }
                                    $row['start_date'] = getFormattedDate(strtotime($row['start_date']));
                                    $row['end_date'] = getFormattedDate(strtotime($row['end_date']));
 
                                    echo "
                                            <tr>
                                                <td>".$row['hinsid']."</td>
                                                <td><a href='#' data-toggle='modal' data-target='#homeDetailsModall".$row['hinsid']."'>Click Here</a></td>
                                                <td>" . $row['start_date'] . "</td>
                                                <td>" . $row['end_date'] . "</td>
                                                <td>" . $row['total_amount'] . "</td>
                                                <td> 1,2,3</td>
                                                <td>" . $row['status'] . "</td>
                                                <td><a href='#' data-toggle='modal' data-target='#addAssetModal".$row['hinsid']."'><i class='fas fa-plus-circle'></i></a></td>
                                            </tr>
                                        ";
                                }
                            }

                            ?>

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

    <!-- After main footer should come. -->
    <?php
    require_once 'footer.php';
    ?>
    </div>
    </div> <!-- This is the ending of the header -->
</body>

</html>


<?php

if (isset($_POST['newHouse'])) {

    //create a new house
  
    $cust_details = showCustDetails($_SESSION['email']);
    $cust_id = $cust_details['cust_id'];
    $location = $_POST['location'];
    $purchase_date = $_POST['purchase_date'];
    $purchase_value = $_POST['purchase_value'];
    $area_sq_feet = $_POST['area_sq_feet'];
    $home_type = $_POST['home_type'];
    $auto_fire_noti = $_POST['auto_fire_noti'];
    $home_security = $_POST['home_security'];
    $swimming_pool = $_POST['swimming_pool'];
    $basement = $_POST['basement'];
    $hinsid = $_POST['hinsid'];
  
  
    $result = insertHome($cust_id, $location, $purchase_date, $purchase_value, $area_sq_feet, $home_type, $auto_fire_noti, $home_security, $swimming_pool, $basement, $hinsid);
    

  
    if ($result != 0) {
      $home_id = $result;
      $getAmountDetails = calculateHomeInsAmount($home_id);

    //   echo "<script>alert('amount: ');</script>";

      $today = date("Y-m-d",strtotime("today"));

      $res1 = addAssetToIns($hinsid, $getAmountDetails['totalAmount'], $today);

      if($res1){
        $_SESSION['display'] = "inline";
        $_SESSION['errorMsg'] = "Successfully added the asset to the insurance";
        $_SESSION['alert_class'] = "alert alert-success";
        echo "<script>window.location.replace('current_ins.php');</script>";
      }
      else{
        $_SESSION['display'] = "inline";
        $_SESSION['errorMsg'] = "Error! <br> Please try again after some time.";
        $_SESSION['alert_class'] = "alert alert-danger";
        echo "<script>window.location.replace('current_ins.php');</script>";
      }
    } else if ($result == 0) {
        $_SESSION['display'] = "inline";
        $_SESSION['errorMsg'] = "Error in inserting house! <br> Please try again after some time.";
        $_SESSION['alert_class'] = "alert alert-danger";
        echo "<script>window.location.replace('current_ins.php');</script>";
    }
  }


?>