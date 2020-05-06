<!-- This page shows driver details -->
<?php
if (session_status() != PHP_SESSION_ACTIVE) session_start();
require_once 'functions.php';
?>
<!DOCTYPE html>
 <html>
 <head>
     <title>Auto Insurance</title>
     
     <script>
         function toggleAddNewDrivers(){
            var addNewDrivers = document.getElementById('addNewDrivers');
            var viewAllDrivers = document.getElementById('viewAllDrivers');
            var deleteDriver = document.getElementById('deleteDriver');
            if(addNewDrivers.style.display=='none'){
                addNewDrivers.style.display='inline';
                viewAllDrivers.style.display='none';
                deleteDriver.style.display='none';
            }
            else{
                addNewDrivers.style.display='none';
            }
         }
         function toggleViewAllDrivers(){
            var addNewDrivers = document.getElementById('addNewDrivers');
            var viewAllDrivers = document.getElementById('viewAllDrivers');
            var deleteDriver = document.getElementById('deleteDriver');
            if(viewAllDrivers.style.display=='none'){
                addNewDrivers.style.display='none';
                viewAllDrivers.style.display='inline';
                deleteDriver.style.display='none';
            }
            else{
                viewAllDrivers.style.display='none';
            }
         }
         function toggleDeleteDrivers(){
            var addNewDrivers = document.getElementById('addNewDrivers');
            var viewAllDrivers = document.getElementById('viewAllDrivers');
            var deleteDriver = document.getElementById('deleteDriver');
            if(deleteDriver.style.display=='none'){
                addNewDrivers.style.display='none';
                viewAllDrivers.style.display='none';
                deleteDriver.style.display='inline';
            }
            else{
                deleteDriver.style.display='none';
            }
         }
     </script>

 </head>
 <body class="sb-nav-fixed">
 	<?php 
		require_once 'header.php';
	 ?>
 	<div id="layoutSidenav_content">
                <?php 
                	require_once 'auto_ins_header.php';
                 ?>

    <center><h4 style="text-decoration: underline;"><b>DRIVERS</b></h4></center>
    
    <div class="main_content">
       
         <center>
         <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary" onclick="toggleAddNewDrivers()"><b>Add New Driver</b></button>
            <button type="button" class="btn btn-info" onclick="toggleViewAllDrivers()"><b>View All Drivers</b></button>
            <button type="button" class="btn btn-danger" onclick="toggleDeleteDrivers()"><b>Delete a driver</b></button>
         </div>
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

        <!-- ADD NEW DRIVERS -->

        <div class="addNewDrivers" id="addNewDrivers" style="display:none;">
            
        </div>


        <!-- END OF ADD NEW DRIVERS -->
        <!-- VIEW ALL DRIVERS -->

        <div class="viewAllDrivers" id="viewAllDrivers" style="display:none;">
            View All drivers
         </div>
         

        <!-- END OF VIEW ALL DRIVERS -->
        <!-- DELETE DRIVER -->


        <div class="deleteDriver" id="deleteDriver" style="display:none;">
            Delete Drivers
         </div>


        <!-- END OF DELETE DRIVER -->


    </div>



    </main>

    <!-- After main footer should come. -->
    <?php 
        require_once 'footer.php';
    ?>
    </div>
    </div>      <!-- This is the ending of the header -->
</body>
</html>