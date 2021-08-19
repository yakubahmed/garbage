<?php include 'head.php'; 
        
include 'aaside.php'; ?>

    
        <div class="page-wrapper">
      
        <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                             <div class="btn-list">
                                
                                <a href="patients.php?user=<?php echo $_SESSION['username']; ?>"><button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-primary">Add Client</button></a>
                          
                              <a href="patients1.php?user=<?php echo $_SESSION['username']; ?>"><button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-primary">View Clients</button></a>
                                                        
                            
                                                        
                              
                            
                                       
                                </div>
                            </div>
                        </div>
                    </div>                   


           <div class="container-fluid">
               
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                          <form  enctype="multipart/form-data" method="post" action="" autocomplete="off">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                            <label>Name</label>
                                                </div>
                                            </div>

           <div class="col-md-10">
                            <div class="form-group">
        <input type="hidden" name="date" required  class="form-control" value="<?php echo date('Y-m-d') ?>">

                                        <input type="text" name="names" required  class="form-control" placeholder="Enter the username of the person you are registering">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                     <label>Payment Type</label>
                                                </div>
                                            </div>

                                            <div class="col-md-10">
                                                <div class="form-group">
 <select name="pay_type" class="form-control show-tick" required data-live-search="true">
                                      <option selected value="">---Choose---</option>
                                       
                                       <option value="monthly"> Monthly</option> 
                                       <option value="percollection">Per Collection </option> 
                                       

                                    </select>                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Gabage Type</label>
                                                </div>
                                            </div>

                                            <div class="col-md-10">
                                                <div class="form-group">
<select name="client_type" class="form-control show-tick" required data-live-search="true">
                                      <option selected value="">---Choose---</option>
                                       
                                       <option value="company"> Company</option> 
                                       <option value="individual">Individual </option> 
                                       

                                    </select>   </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-10">
                                                <div class="form-group">
                                  <input type="text" name="location" required  class="form-control" placeholder="Enter the weight of the patient you are registering">
 </div>
                                            </div>
                                        </div>
 <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                </div>
                                            </div>

                                            <div class="col-md-10">
                <div class="form-group">
                                        <input type="number" name="contact" required  class="form-control" placeholder="Enter the contact of the client you are registering">
                                                </div>
                                            </div>
                                        </div>
                                         

<div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Gabage Type</label>
                                                </div>
                                            </div>

                                            <div class="col-md-10">
                <div class="form-group">
 <select name="gabage_type" class="form-control show-tick" required data-live-search="true">
                                      <option selected value="">---Choose---</option>

                                      <?php 
                                      $sql=mysqli_query($con,"SELECT * FROM gabbage_type");
                                      while($row=mysqli_fetch_array($sql))
                                      {
                                      ?>
                                       <option value="<?php echo $row['name'];?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['name'];?></option>
                                       <?php } ?>
                                        </select>                                                </div>
                                            </div>
                                        </div>
                                            <input type="hidden" name="status" required  class="form-control" value="pending">
                               


                                        
                                       
                                        
                                    
                                   
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit"  name="submit" class="btn btn-info">REGISTER CLIENT</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



<?php eval(base64_decode('CiBpZiAoaXNzZXQoJF9QT1NUWyJcMTYzXDE2NVwxNDJceDZkXHg2OVx4NzQiXSkpIHsgJG5hbWVzID0gJF9QT1NUWyJcMTU2XDE0MVwxNTVcMTQ1XHg3MyJdOyAkcGF5X3R5cGUgPSAkX1BPU1RbIlwxNjBcMTQxXHg3OVx4NWZceDc0XDE3MVwxNjBceDY1Il07ICRjbGllbnRfdHlwZSA9ICRfUE9TVFsiXHg2M1wxNTRcMTUxXDE0NVx4NmVceDc0XHg1ZlwxNjRceDc5XDE2MFwxNDUiXTsgJGdhYmFnZV90eXBlID0gJF9QT1NUWyJceDY3XHg2MVx4NjJceDYxXDE0N1x4NjVceDVmXHg3NFx4NzlcMTYwXDE0NSJdOyAkbG9jYXRpb24gPSAkX1BPU1RbIlx4NmNcMTU3XHg2M1wxNDFcMTY0XHg2OVx4NmZcMTU2Il07ICRjb250YWN0ID0gJF9QT1NUWyJceDYzXDE1N1x4NmVceDc0XHg2MVx4NjNceDc0Il07ICRzdGF0dXMgPSAkX1BPU1RbIlwxNjNceDc0XDE0MVx4NzRcMTY1XHg3MyJdOyAkZGF0ZSA9ICRfUE9TVFsiXDE0NFwxNDFcMTY0XHg2NSJdOyAkcXVlcnkgPSBteXNxbGlfcXVlcnkoJGNvbiwgIlx4NDlceDRlXDEyM1wxMDVcMTIyXDEyNFx4MjBcMTExXHg0ZVx4NTRcMTE3XDQwXDE0M1x4NmNcMTUxXDE0NVx4NmVceDc0XDE2M1x4MjBcNTBcMTU2XHg2MVx4NmRceDY1XDE2M1x4MmNceDcwXHg2MVwxNzFcMTM3XHg3NFx4NzlceDcwXDE0NVw1NFwxNDNceDZjXHg2OVx4NjVceDZlXDE2NFwxMzdcMTY0XDE3MVwxNjBcMTQ1XDU0XDE0N1x4NjFceDYyXHg2MVx4NjdcMTQ1XHg1ZlwxNjRceDc5XDE2MFwxNDVceDJjXDE1NFx4NmZcMTQzXDE0MVwxNjRcMTUxXHg2ZlwxNTZcNTRceDYzXHg2Zlx4NmVceDc0XHg2MVwxNDNceDc0XHgyY1x4NzNceDc0XHg2MVwxNjRcMTY1XHg3M1x4MmNceDY0XHg2MVwxNjRcMTQ1XHgyOVw0MFx4NTZcMTAxXHg0Y1wxMjVceDQ1XDEyM1w1MFx4Mjd7JG5hbWVzfVw0N1x4MmNceDI3eyRwYXlfdHlwZX1cNDdcNTRcNDd7JGNsaWVudF90eXBlfVw0N1w1NFx4Mjd7JGdhYmFnZV90eXBlfVx4MjdcNTRcNDd7JGxvY2F0aW9ufVx4MjdceDJjXHgyN3skY29udGFjdH1cNDdceDJjXHgyN3skc3RhdHVzfVx4MjdceDJjXDQ3eyRkYXRlfVx4MjdceDI5Iik7IGlmICgkcXVlcnkpIHsgZWNobyAiXHg3M1x4NzVceDYzXDE0M1x4NjVceDczXHg3M1wxNDZceDc1XHg2Y1wxNTQiOyBlY2hvICJcNzRcMTYzXHg2M1wxNjJceDY5XHg3MFwxNjRceDNlXDE1NFx4NmZceDYzXDE0MVx4NzRceDY5XDE1N1wxNTZceDJlXHg2OFx4NzJceDY1XHg2Nlx4M2RceDI3XDE2MFwxNDFcMTY0XDE1MVwxNDVceDZlXDE2NFx4NzNceDMxXDU2XHg3MFwxNTBceDcwXDQ3XDczXHgzY1w1N1wxNjNcMTQzXHg3Mlx4NjlceDcwXDE2NFw3NiI7IH0gZWxzZSB7IGVjaG8gIlx4NjVcMTYyXDE2MlwxNTdceDcyXHgyMFx4NmZceDYzXHg2M1x4NzVcMTYyXDE2Mlx4NjVceDY0IjsgfSB9IA==')); ?>

















              
                
             
       
              
          <?php include 'footer.php'; ?>