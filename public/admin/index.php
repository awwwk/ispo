<?php 
include "../../resources/config.php";
include "includes/header.php";


?>
   

       <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"> My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-12 col-sm-12 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <?php
              //SELECT `idcarowner`, `firstname`, `lastname`, `phonenumber`, `location`, `password` FROM `CLIENT` WHERE 1
                 $query = query("SELECT * FROM CLIENT");

                confirm($query);
                $idcarowner=row_count($query);
                echo "
              <div class='mr-5'>{$idcarowner} CLIENTS</div>";
                ?>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="AVC.php">
              <span class="float-left">View Clients</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
         <div class="col-xl-12 col-sm-12 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <?php
              //SELECT `mechanicid`, `firstname`, `lastname`, `phonenumber`, `location`, `experience`, `specialization`, `garagelocated`, `password` FROM `MECHANIC` WHERE 1
                 $query = query("SELECT * FROM MECHANIC");

                confirm($query);
                $mechanicid=row_count($query);
                echo "
              <div class='mr-5'>{$mechanicid} MECHANICS</div>";
                ?>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="AVM.php">
              <span class="float-left">View Mechanics</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  
         <div class="col-xl-12 col-sm-12 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <?php
              //SELECT `garageid`, `garagename`, `phonenumber`, `location`, `specialization`, `password` FROM `GARAGE` WHERE 1
                 $query = query("SELECT * FROM GARAGE");

                confirm($query);
                $garageid=row_count($query);
                echo "
              <div class='mr-5'>{$garageid} GARAGE</div>";
                ?>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="AVG.php">
              <span class="float-left">View Garage</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
         <div class="col-xl-12 col-sm-12 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <?php
              //SELECT `idspDealer`, `firstname`, `lastname`, `phonenumber`, `location`, `specialty`, `password` FROM `SPD` WHERE 1
                 $query = query("SELECT * FROM SPD");

                confirm($query);
                $idspDealer=row_count($query);
                echo "
              <div class='mr-5'>{$idspDealer} Spare Part Dealers</div>";
                ?>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="AVSPD.php">
              <span class="float-left">View Spare Part Dealers</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

    


    
    </div>
  </div>
</div>

    <footer class="py-5 bg-dark" style="position:static; left: 0 ;  height: 0px; right: 0; bottom:0; text-align:center;">
     
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; car clinic 2018</p>
      </div>
    </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


  </body>

</html>