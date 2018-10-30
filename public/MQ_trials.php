 <form method="post">
                            <!--SELECT `idgaragerequest`, `idcarowner`, `details`, `dateofrequest`, `dateofservice`, `location`, `carmodel` FROM `garagerequest` WHERE 1-->
                            <!--SELECT `idspQuotation`, `idspDealer`, `idsparepart`, `idcarowner`, `mechanicid`, `garageid`, `priceperpiece`, `totalprice`, `deliverystatus`, `manufacturer` FROM `spQuotation` WHERE 1-->
                            <!--SELECT `idserviceMQ`, `mechanicid`, `idmechanicrequest`, `idcarowner`, `servicecost`, `servicedate`, `details`, `dateofrequest`, `dateofservice`, `location`, `carmodel` FROM `serviceMQ` WHERE 1-->

                                  <div class="form-group">
                                        <!-- Date input -->
                                        <label class="control-label" for="date">Reason for the Request</label>
                                        <textarea placeholder="Enter Appointment Details...." name="details" class="form-control"> </textarea>
                                    </div>
                              <input class="form-control" name="idcarowner" value =<?php echo $_SESSION[' $phonenumber;'] ?> type="text" aria-describedby="nameHelp" placeholder="Enter Sparepart name" readonly hidden>

                                  
                                    <div class="form-group">
                                       <label class="control-label" for="date">Request Date</label>
                                        <div class="form-group input-group date" data-date-format="dd-mm-yyyy">        
                                          <input type="text" class="form-control" name="dateofrequest" placeholder="dd-mm-yyyy">
                                            <div class="input-group-addon">
                                              <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                       <label class="control-label" for="date">Service Date</label>
                                        <div class="form-group input-group date" data-date-format="dd-mm-yyyy">        
                                          <input type="text" class="form-control" name="dateofservice" placeholder="dd-mm-yyyy">
                                            <div class="input-group-addon">
                                              <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>

                                 <div class="form-group">
                                    <label for="exampleInputName">Location </label>
                                    <input class="form-control" name="location" type="text" aria-describedby="nameHelp" placeholder="Enter your location">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputName"> Car Model </label>
                                    <input class="form-control" name="carmodel" type="text" aria-describedby="nameHelp" placeholder="Enter your car model">
                                </div>                                  
                                    <div class="form-group">
                                        <!-- Add Request -->
                                   <input type="submit" class="form-control btn btn-success" name="request_garage" value="MAKE REQUEST">
                                    </div>
                                    <?php  request_garage(); ?>
                            </form>




                             <tr>
                                           
                                            <td>{$details}</td>
                                            <td>{$dateofrequest}</td>
                                            <td>{$dateofservice}</td>
                                            <td>{$location}</td>
                                            <td>{$carmodel}</td>
                                              
                                           <td>  <input class='form-control' style='width:100px;' name='servicecost' type='text' aria-describedby='nameHelp' placeholder='Ksh'> </td>
                                           <td>   <div class='form-group input-group date'  style='width:130px;' data-date-format='dd-mm-yyyy'>
                                        <input type='text' class='form-control' name='servicedate' placeholder='dd-mm-yyyy'> </div>
                                    </td>
                                           <td> <input class='form-control' style='width:100px;' name='spmanufacturer' type='text' aria-describedby='nameHelp' placeholder='Time'></td>

                                           <td>  <input type='submit' name='edit_MQ' value='Save Details'class='form-control btn btn-primary'/><td>
                                        </tr>