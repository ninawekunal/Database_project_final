<!-- This page shows Vehicle details -->
<?php
if (session_status() != PHP_SESSION_ACTIVE) session_start();
require_once 'functions.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Auto Insurance</title>

    <script>
        
        function toggleAddNewVehicles() {
            var addNewVehicles = document.getElementById('addNewVehicles');
            var viewAllVehicles = document.getElementById('viewAllVehicles');
            var deleteVehicle = document.getElementById('deleteVehicle');
            if (addNewVehicles.style.display == 'none') {
                addNewVehicles.style.display = 'inline';
                viewAllVehicles.style.display = 'none';
                deleteVehicle.style.display = 'none';
            } else {
                addNewVehicles.style.display = 'none';
            }
        }

        function toggleViewAllVehicles() {
            var addNewVehicles = document.getElementById('addNewVehicles');
            var viewAllVehicles = document.getElementById('viewAllVehicles');
            var deleteVehicle = document.getElementById('deleteVehicle');
            if (viewAllVehicles.style.display == 'none') {
                addNewVehicles.style.display = 'none';
                viewAllVehicles.style.display = 'inline';
                deleteVehicle.style.display = 'none';
            } else {
                viewAllVehicles.style.display = 'none';
            }
        }

        function toggleDeleteVehicles() {
            var addNewVehicles = document.getElementById('addNewVehicles');
            var viewAllVehicles = document.getElementById('viewAllVehicles');
            var deleteVehicle = document.getElementById('deleteVehicle');
            if (deleteVehicle.style.display == 'none') {
                addNewVehicles.style.display = 'none';
                viewAllVehicles.style.display = 'none';
                deleteVehicle.style.display = 'inline';
            } else {
                deleteVehicle.style.display = 'none';
            }
        }

        



    </script>

</head>

<body class="sb-nav-fixed" onload="toggleAddNewVehicles()">
    <?php
    require_once 'header.php';
    ?>
    <div id="layoutSidenav_content">
        <?php
        require_once 'auto_ins_header.php';
        ?>

        <center>
            <h4 style="text-decoration: underline;"><b>Vehicles</b></h4>
        </center>

        <!-- For ERROR HANDLING -->

        <input type="hidden" name="emailField" id="userEmail" value="<?php echo $_SESSION['email']; ?>">

        <div id="error" style="display:<?php echo isset($_SESSION['display']) ? $_SESSION['display'] : 'none;';
                                        unset($_SESSION['display']); ?> ">
            <div class="<?php echo isset($_SESSION['alert_class']) ? $_SESSION['alert_class'] : 'none;';
                        unset($_SESSION['alert_class']); ?>">
                <?php echo isset($_SESSION['errorMsg']) ? $_SESSION['errorMsg'] : 'none;';
                unset($_SESSION['errorMsg']);  ?></div>
        </div>

        <!-- END OF ERROR HANDLING DIV -->

        <div class="main_content">

            <center>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary" onclick="toggleAddNewVehicles()"><b>Add New Vehicle</b></button>
                    <button type="button" class="btn btn-info" onclick="toggleViewAllVehicles()"><b>View All Vehicles</b></button>
                    <button type="button" class="btn btn-danger" onclick="toggleDeleteVehicles()"><b>Delete a Vehicle</b></button>
                </div>
            </center>



            <!-- ADD NEW VehicleS -->
            <br>
            <div class="addNewVehicles card-mb-12" id="addNewVehicles" style="display:none;">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>Add new Vehicle
                </div>
                <div class="card-body">
                    <form method="POST" name="add_vehicle" id="add_vehicle">
                        <!--Vehicle identification number-->
                        <div class="row">
                            <div class="col-md-4 text-right" style="margin-top: 5px;">
                                <label for="vin">
                                    <b>Vehicle VIN:</b>
                                </label>
                            </div>
                            <input id="vin" class="form-control col-md-4 text-left" type="text" placeholder="Enter VIN" name="vin" required  title="">
                        </div>
                        <br>
                        <!--Vehicle details-->
                        <div class="row">
                            <div class="col-md-4 text-right" style="margin-top: 5px;">
                                <label for="vmake">
                                    <b>Vehicle Make:</b>
                                </label>
                            </div>
                            <input id="vmake" class="form-control col-md-4 text-left" type="text" placeholder="Eg: Toyota" name="vmake" required  title="">
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-md-4 text-right" style="margin-top: 5px;">
                                <label for="vmodel">
                                    <b>Vehicle Model:</b>
                                </label>
                            </div>
                            <input id="vmodel" class="form-control col-md-4 text-left" type="text" placeholder="Eg: Supra" name="vmodel" required  title="">
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-4 text-right" style="margin-top: 5px;">
                                <label for="vyear">
                                    <b>Vehicle Year:</b>
                                </label>
                            </div>
                            <input id="vyear" class="form-control col-md-4 text-left" type="number" min="1950" max="2020" placeholder="Enter vyear" name="vyear" required title="">
                        </div>
                        <br>
                        
                        <!--Enter vehicle type-->
                        <div class="row text-left">
                            <legend class="col-form-label col-md-4 text-right"><b>Vehicle Type:</b></legend>
                            <div class="col-sm-5 text-left">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vtype" id="car" value="Car" checked>
                                    <label class="form-check-label" for="car">
                                        Car
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vtype" id="truck" value="Truck">
                                    <label class="form-check-label" for="truck">
                                        Truck
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vtype" id="bike" value="Bike">
                                    <label class="form-check-label" for="bike">
                                        Bike
                                    </label>
                                </div>

                            </div>
                        </div>
                        <br>

                        <!--Enter vehicle status-->
                        <div class="row text-left">
                            <legend class="col-form-label col-md-4 text-right"><b>Vehicle Status:</b></legend>
                            <div class="col-sm-5 text-left">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vstatus" id="leased" value="L" >
                                    <label class="form-check-label" for="leased">
                                        Leased
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vstatus" id="financed" value="F">
                                    <label class="form-check-label" for="financed">
                                        Financed
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vstatus" id="owned" value="O" checked>
                                    <label class="form-check-label" for="owned">
                                        Owned
                                    </label>
                                </div>

                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-4"></div>
                            <button class="btn btn-primary col-md-4" id="addVehicle" class="form-control" type="submit" name="addVehicle">
                                <b>Add this vehicle</b>
                            </button>
                        </div>
                    </form>
                </div>
            </div>


            <!-- END OF ADD NEW VehicleS -->
            <!-- VIEW ALL VehicleS -->

            <div class="viewAllVehicles" id="viewAllVehicles" style="display:none;">
                View All Vehicles
            </div>


            <!-- END OF VIEW ALL VehicleS -->
            <!-- DELETE Vehicle -->


            <div class="deleteVehicle" id="deleteVehicle" style="display:none;">
                Delete Vehicles
            </div>


            <!-- END OF DELETE Vehicle -->


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

    if(isset($_POST['addVehicle'])){
        $vin = $_POST['vin'];
        $vmake = $_POST['vmake'];
        $vmodel = $_POST['vmodel'];
        $vyear = $_POST['vyear'];
        $vstatus = $_POST['vstatus'];
        $vtype = $_POST['vtype'];
        $email = $_SESSION['email'];

        $res = addVehicle($vin, $vtype ,$vmake, $vmodel, $vyear, $vstatus, $email);

        if($res==-1){
            $_SESSION['display'] = "inline";
            $_SESSION['errorMsg'] = "Error: Vehicle with VIN already exist! <br> Please try with different VIN";
            $_SESSION['alert_class'] = "alert alert-danger";
            echo "<script>window.location.replace('vehicles.php');</script>";
        }
        else if($res == 0){
            $_SESSION['display'] = "inline";
            $_SESSION['errorMsg'] = "Error: Vehicle with VIN already exist! <br> Please try with different VIN";
            $_SESSION['alert_class'] = "alert alert-danger";
            echo "<script>window.location.replace('vehicles.php');</script>";
        }
        else if($res == 1){
            $_SESSION['display'] = "inline";
            $_SESSION['errorMsg'] = "Successfully added the vehicle";
            $_SESSION['alert_class'] = "alert alert-success";
            echo "<script>window.location.replace('vehicles.php');</script>";
        }
        else{
            $_SESSION['display'] = "inline";
            $_SESSION['errorMsg'] = "Error in adding the vehicle <br> Please try again after some time";
            $_SESSION['alert_class'] = "alert alert-danger";
            echo "<script>window.location.replace('vehicles.php');</script>";
        }

    }

?>