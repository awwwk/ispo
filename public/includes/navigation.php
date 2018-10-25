<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><center>CAR CLINIC</center></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                  
                  <a class=" badge badge-success" style="padding:10px; border-radius:20px; margin-top:0px; margin-left:10px;  height:32px; width:100px; text-color:#00000 text-size:10px;"  href="about.php">THE TEAM</a> 
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <a class=" badge badge-success" style="padding:10px; border-radius:20px; margin-top:0px; margin-left:10px;  height:32px; width:100px; text-color:#00000 text-size:10px;"   href="services.php">ABOUT US</a> 
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <a class=" badge badge-success" style="padding:10px; border-radius:20px; margin-top:0px; margin-left:10px;  height:32px; width:100px; text-color:#00000 text-size:10px;"   href="contact.php">CONTACT</a> 
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  
                <?php                 
                if(!isset($_SESSION['admin']) && !isset($_SESSION['CLIENT']) && !isset($_SESSION['GARAGE']) && !isset($_SESSION['MECHANIC']) && !isset($_SESSION['SPD']))
                {
                  ?>
                   <a class=" badge badge-success" style="padding:10px; border-radius:20px; margin-top:0px; margin-left:10px;  height:32px; 
                   width:100px; text-color:#00000;  white text-size:10px;"  href="admin/login_main.php">LOGIN</a> 
                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <?php    } ?> 
            <!--nav-item dropdown-->
                <li class="nav-item dropdown" >                
               
                <?php 
                   if(isset($_SESSION['admin']))
                        {
                            echo "<a class='nav-link dropdown-toggle'style='' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='fa fa-fw fa-user'></i>{$_SESSION['admin']}</a>"; } 

                            else if(isset($_SESSION['CLIENT'])) { echo "<a class='nav-link dropdown-toggle'  id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' ><i class='fa fa-fw fa-user'></i> {$_SESSION['CLIENT']}</a>"; 
                              }                                                 
                               ?>
                              

                        <div class="dropdown-menu dropdown-menu-right" style="border-radius:30px; margin-left:0px; margin-right:0px; background:#18392b;" aria-labelledby="navbarDropdownPortfolio" >

                            <a class="dropdown-item" style="color:green;" href="tasks.php"><i class="fa fa-user"></i> SERVICES</a>
                            <a class="dropdown-item" style="color:green;"href="edit_CLIENT.php"><i class="fa fa-user"></i> MY PROFILE</a>
                            <a class="dropdown-item" style="color:green;"href="delete.php"> <i class="fa fa-align-right"></i> DELETE ACCOUNT</a>
                            <a class="dropdown-item"  style="color:green;"href="admin/logout.php"><i class="fa fa-sign-out"></i>LOG OUT</a>                         
                        </div>  
                        

                </li>
            


             <li class="nav-item dropdown">                
               

                <?php 
                   if(isset($_SESSION['admin']))
                        {
                            echo "<a class='nav-link dropdown-toggle' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='fa fa-fw fa-user'></i>{$_SESSION['admin']}</a>"; } 

 
                            
                            else if(isset($_SESSION['SPD'])) { echo "<a class='nav-link dropdown-toggle'  id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' ><i class='fa fa-fw fa-user'></i> {$_SESSION['SPD']}</a>"; 
                              }    
                               
                                                      
                               ?>

                        <div class="dropdown-menu dropdown-menu-right" style="border-radius:30px; margin-left:10px; background:#18392b;" aria-labelledby="navbarDropdownPortfolio" >
                            <a class="dropdown-item" style="color:blue;" href="SPD_tasks.php">     <i class="fa fa-user"></i> ACCESS SERVICES</a>
                            <a class="dropdown-item"  style="color:blue;"href="edit_SPD.php">   <i class="fa fa-user"></i> SPD PROFILE</a>
                            <a class="dropdown-item"  style="color:blue;"href="delete.php">  <i class="fa fa-align-right"></i> DELETE ACCOUNT</a>
                            <a class="dropdown-item"  style="color:blue;"href="admin/logout.php"><i class="fa fa-sign-out"></i>LOG OUT</a>                         
                        </div>  
                </li>

                 <li class="nav-item dropdown">                
               

                <?php 
                   if(isset($_SESSION['admin']))
                        {
                            echo "<a class='nav-link dropdown-toggle' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='fa fa-fw fa-user'></i>{$_SESSION['admin']}</a>"; } 

 
                            
                            else if(isset($_SESSION['MECHANIC'])) { echo "<a class='nav-link dropdown-toggle'  id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' ><i class='fa fa-fw fa-user'></i> {$_SESSION['MECHANIC']}</a>"; 
                              }    
                               
                                                      
                               ?>

                        <div class="dropdown-menu dropdown-menu-right" style="border-radius:30px; margin-left:10px; background:#18392b;" aria-labelledby="navbarDropdownPortfolio" >
                            <a class="dropdown-item" style="color:blue;" href="MECHANIC_tasks.php"><i class="fa fa-user"></i> ACCESS SERVICES </a>
                            <a class="dropdown-item"  style="color:blue;"href="edit_MECHANIC.php">   <i class="fa fa-user"></i> MECHANIC PROFILE</a>
                            <a class="dropdown-item"  style="color:blue;"href="delete.php">   <i class="fa fa-align-right"></i> DELETE ACCOUNT</a>
                            <a class="dropdown-item"  style="color:blue;"href="admin/logout.php"><i class="fa fa-sign-out"></i>LOG OUT</a>                         
                        </div>  
                </li>

                 <li class="nav-item dropdown">                
               

                <?php 
                   if(isset($_SESSION['admin']))
                        {
                            echo "<a class='nav-link dropdown-toggle' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='fa fa-fw fa-user'></i>{$_SESSION['admin']}</a>"; } 

 
                            
                            else if(isset($_SESSION['GARAGE'])) { echo "<a class='nav-link dropdown-toggle'  id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' ><i class='fa fa-fw fa-user'></i> {$_SESSION['GARAGE']}</a>"; 
                              }    
                               
                                                      
                               ?>

                        <div class="dropdown-menu dropdown-menu-right" style="border-radius:30px; margin-left:10px; background:#18392b;" aria-labelledby="navbarDropdownPortfolio" >
                            <a class="dropdown-item" style="color:blue;" href="GARAGE_tasks.php">     <i class="fa fa-user"></i> SERVICES GARAGE</a>
                            <a class="dropdown-item"  style="color:blue;"href="edit_GARAGE.php">   <i class="fa fa-user"></i> MY GARAGE PROFILE</a>
                            <a class="dropdown-item"  style="color:blue;"href="delete.php">   <i class="fa fa-align-right"></i> DELETE ACCOUNT</a>
                            <a class="dropdown-item"  style="color:blue;"href="admin/logout.php"><i class="fa fa-sign-out"></i>LOG OUT</a>                         
                        </div>  
                </li>
            </ul>
        </div>
    </div>
</nav>
