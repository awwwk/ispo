<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">CAR CLINIC</a>
   
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Garage Services </span>
          </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">                   
                    <li>
                        <a href="AVG.php">View Registered Garages</a>
                        <a href="Admin_GRV.php">View Garage Request</a>
                        <a href="Admin_GRQ.php">View Garage Quotations</a>
                    </li>
                </ul>
            </li>    
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents5" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Mechanic Services </span>
          </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents5">                   
                    <li>
                        <a href="AVG.php">Registered Mechanics</a>
                        <a href="Admin_MRV.php">View Mechanic Request</a>
                        <a href="Admin_MRQ.php">View Mechanic Quotations</a>
                    </li>
                </ul>
            </li>          
            
             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4" data-parent="#exampleAccordion2">
            <i class="fa fa-fw fa-grav"></i>
            <span class="nav-link-text">Spare Part Dealers</span>
          </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents4">
                    <li>
                        <a href="AVSPD.php">View Part Dealers</a>  
                          <a href="Admin_SPOV.php">View Part Orders</a>                  
                        <a href="services.php">View Specialised Dealers</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion2">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Clients</span>
          </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents3">
                    <li>
                        <a href="AVC.php">View Clients</a>
                    </li>
                    <li>
                        <a href="employees.php">View Active Clients</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="reports.php">
            <i class="fa fa-fw fa-calendar-minus-o"></i>
            <span class="nav-link-text">Reports</span>
          </a>
            </li>




        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
                        
               <li class="nav-item dropdown" style="right:200px;">
                       
                  
                    <a href="#" class="nav-link dropdown-toggle" style="right:40px;" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span> 
                        <?php
                        if(isset($_SESSION['admin']))
                        {
                            echo "<strong>{$_SESSION['admin']}</strong>";
                        }
                        else if(isset($_SESSION['user']))
                        {
                           echo "<strong>{$_SESSION['user']}</strong>";
                        }
                        
                        ?>
                        
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="messagesDropdown" >
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                     <div class="col-lg-12">
                                    <?php
                                     if(isset($_SESSION['admin']))
                            {
                            $query = query("SELECT * FROM users WHERE userName = '{$_SESSION['admin']}'");
                            confirm($query);
                            while($row=fetch_array($query))
                                {
                                    $user_first_name=$row['userFirstName'];
                                    $user_last_name =$row['userLastName'];
                                    $user_email     =$row['userEmail'];
                                    
                                    echo "<p class='text-left'><strong>{$user_first_name} {$user_last_name}</strong></p>
                                        <p class='text-left small'>{$user_email}</p>";
                                }
                                         
                                         
                            }
                            else if(isset($_SESSION['user']))
                            {
                            $query = query("SELECT * FROM users WHERE userName = '{$_SESSION['user']} ");
                            confirm($query);
                            while($row=fetch_array($query))
                                {
                                    $user_first_name=$row['userFirstName'];
                                    $user_last_name =$row['userLastName'];
                                    $user_email     =$row['userEmail'];
                                
                                echo "<p class='text-left'><strong>{$user_first_name} {$user_last_name}</strong></p>
                                        <p class='text-left small'>{$user_email}</p>";
                    
                                }
                            
                        }    
                                    
                                    
                                    
                                    ?>
                                   
                                
                                        <p class="text-left">
                                            <a href="profile.php" class="btn btn-primary btn-block btn-sm">Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="logout.php" class="btn btn-danger btn-block">Log out</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
               
               
                
            
        
        </ul>
    </div>
</nav>
