<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>Admin Page</title>
        
    </head>
    <body class="sb-nav-fixed">
         <?php 
             require_once 'header.php';
         ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Product details and update</li>
                        </ol>
                        <div class="home_ins_content">
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Product details</div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Details of home insurance-->
                                    <div class="col-md-12 row">
                                        <div class="card mb-12 col-md-12">
                                            <!-- To display data about home insurance products -->
                                            <div class="card-header"><i class="fas fa-home mr-1"></i>Home Products</div>
                                            <div class="card-body">
                                                <table width="100%" border="1" id="vehicle">
                                                    <thead align="center">
                                                        <th>Product Name</th>
                                                        <th>Product Description</th>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Bronze</td>
                                                        <td>Our bronze package is a affordable financial safeguard against natural disasters like earthquake, tornado, rains, lightning, hailstorm etc. It only covers the immovable structure (like walls, roof etc.) of the house</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Silver</td>
                                                        <td>Silver package details</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gold</td>
                                                        <td>Gold package details</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Platinum</td>
                                                        <td>Platinum</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>        
                                        </div>
                                    </div>

                                    <div class="col-md-12 row">
                                        <div class="card mb-12 col-md-12">
                                            <!-- To display data about auto insurance products -->
                                            <div class="card-header"><i class="fas fa-car mr-1"></i>Auto Products</div>
                                            <div class="card-body">
                                                <table width="100%" border="1" id="vehicle">
                                                    <thead align="center">
                                                        <th>Product Name</th>
                                                        <th>Product Description</th>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Bronze</td>
                                                        <td>Our bronze package is a affordable auto insurance covering liabilities to other people arrising due to an accident</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Silver</td>
                                                        <td>Silver package details</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gold</td>
                                                        <td>Gold package details</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Platinum</td>
                                                        <td>Platinum</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- Update home product details -->
                                    <div class="col-md-12 text-center row">
                                        <!-- To add home insurance products -->
                                        <div class="card mb-6 col-md-6">
                                            <div class="card-header"><i class="fas fa-home mr-1"></i>Update home insurance product</div>
                                            <br>
                                            <div class="card-body">
                                                <!--addition of home product-->
                                                <form method="POST" name="add_home_ins" id="add_home_ins">
                                                    <!--Product name-->
                                                    <div class="row">
                                                    <div>
                                                      <label for="home_n_button">
                                                        1. Add Products - <br><br>
                                                         Product Name:
                                                      </label>
                                                      <br>
                                                    </div>
                                                    <input id="home_p_name" class="form-control" type="text" placeholder="Enter Product name" name="home_p_name"></div>
                                                    <br>
                                                    <!--Product description-->
                                                    <div class="row">
                                                    <div>
                                                      <label for="home_name_button">
                                                         Product Description:
                                                      </label>
                                                      <br>
                                                    </div>
                                                    
                                                    <input id="home_p_dec" class="form-control" type="text" placeholder="Enter product details" name="home_p_dec">
                                                    </div>
                                                    <br>                                                    
                                                    <div>
                                                          <input class="btn btn-primary col-md-12" id="addHomeProduct" class="form-control" type="submit" name="addHomeProduct">
                                                    </div>
                                                </form>

                                                <br>
                                                <br>
                                                <!--Delete product-->
                                                <br>

                                                <form method="POST" name="add_home_ins" id="add_home_ins">
                                                    <!--Product name-->
                                                    <div class="row">
                                                    <div>
                                                      <label for="home_n_button">
                                                         2. Remove products -
                                                      </label>
                                                      <br>
                                                    </div>
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Remove Product
                                                        </button>
                                                        &nbsp
                                                    <div class="dropdown-menu" name="home_pack_remove">
                                                        <a class="dropdown-item">Bronze</a>
                                                        <a class="dropdown-item">Silver</a>
                                                        <a class="dropdown-item">Gold</a>
                                                        <a class="dropdown-item">Platinum</a>
                                                    </div>

                                                    <div>
                                                          <input class="btn btn-primary col-md-12" id="addHomeProduct" class="form-control" type="submit" name="addHomeProduct">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        </div>

                                        <!--Add new driver-->
                                        <div class="card mb-6 col-md-6">
                                            <div class="card-header"><i class="fas fa-car mr-1"></i>Update Auto insurance product</div>
                                            <br>
                                            <div class="card-body">
                                                <!--addition of car product-->
                                                <form method="POST" name="add_auto_ins" id="add_auto_ins">
                                                    <!--Product name-->
                                                    <div class="row">
                                                    <div>
                                                      <label for="auto_add_button">
                                                        1. Add Products - <br><br>
                                                         Product Name:
                                                      </label>
                                                      <br>
                                                    </div>
                                                    <input id="auto_p_name" class="form-control" type="text" placeholder="Enter Product name" name="auto_p_name"></div>
                                                    <br>
                                                    <!--Product description-->
                                                    <div class="row">
                                                    <div>
                                                      <label for="auto_name_button">
                                                         Product Description:
                                                      </label>
                                                      <br>
                                                    </div>
                                                    
                                                    <input id="auto_p_dec" class="form-control" type="text" placeholder="Enter product details" name="auto_p_dec">
                                                    </div>
                                                    <br>                                                    
                                                    <div>
                                                          <input class="btn btn-primary col-md-12" id="addAutoProduct" class="form-control" type="submit" name="addAutoProduct">
                                                    </div>
                                                </form>

                                                <br>
                                                <br>
                                                <!--Delete product-->
                                                <br>
                                                
                                                <form method="POST" name="rem_auto_ins" id="rem_auto_ins">
                                                    <!--Product name-->
                                                    <div class="row">
                                                    <div>
                                                      <label for="aut_n_button">
                                                         2. Remove products -
                                                      </label>
                                                      <br>
                                                    </div>
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Remove Product
                                                        </button>
                                                        &nbsp
                                                    <div class="dropdown-menu" name="auto_pack_remove">
                                                        <a class="dropdown-item">Bronze</a>
                                                        <a class="dropdown-item">Silver</a>
                                                        <a class="dropdown-item">Gold</a>
                                                        <a class="dropdown-item">Platinum</a>
                                                    </div>

                                                    <div>
                                                          <input class="btn btn-primary col-md-12" id="removeAutoProduct" class="form-control" type="submit" name="removeAutoProduct">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
         </div>      <!-- This is the ending of the header --> 
    </body>
</html>
