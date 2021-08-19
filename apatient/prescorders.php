<?php include 'head.php'; 
        
include 'aside.php'; ?>

    
        <div class="page-wrapper">
      
        <div class="col-lg-12 ">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="btn-list">
                            <a href="prescorders.php?user=<?php echo $_SESSION['username']; ?>"><button type="button"
                                class="btn waves-effect waves-light btn-rounded btn-primary">New Client</button></a>
                    
                             <a href="prescresult.php?user=<?php echo $_SESSION['username']; ?>"><button type="button"
                                class="btn waves-effect waves-light btn-rounded btn-primary">Clients' Book</button></a>
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



<?php eval(base64_decode('CiBpZiAoaXNzZXQoJF9QT1NUWyJcMTYzXDE2NVwxNDJceDZkXHg2OVx4NzQiXSkpIHsgJG5hbWVzID0gJF9QT1NUWyJceDZlXDE0MVx4NmRcMTQ1XDE2MyJdOyAkcGF5X3R5cGUgPSAkX1BPU1RbIlwxNjBcMTQxXHg3OVx4NWZceDc0XHg3OVwxNjBcMTQ1Il07ICRjbGllbnRfdHlwZSA9ICRfUE9TVFsiXHg2M1x4NmNcMTUxXDE0NVx4NmVcMTY0XDEzN1wxNjRceDc5XHg3MFwxNDUiXTsgJGdhYmFnZV90eXBlID0gJF9QT1NUWyJcMTQ3XDE0MVwxNDJcMTQxXDE0N1x4NjVceDVmXDE2NFwxNzFcMTYwXHg2NSJdOyAkbG9jYXRpb24gPSAkX1BPU1RbIlwxNTRcMTU3XHg2M1x4NjFcMTY0XDE1MVx4NmZcMTU2Il07ICRjb250YWN0ID0gJF9QT1NUWyJcMTQzXHg2Zlx4NmVcMTY0XDE0MVwxNDNceDc0Il07ICRzdGF0dXMgPSAkX1BPU1RbIlx4NzNceDc0XHg2MVwxNjRcMTY1XHg3MyJdOyAkZGF0ZSA9ICRfUE9TVFsiXHg2NFx4NjFceDc0XHg2NSJdOyAkcXVlcnkgPSBteXNxbGlfcXVlcnkoJGNvbiwgIlx4NDlcMTE2XDEyM1x4NDVceDUyXHg1NFx4MjBceDQ5XDExNlx4NTRcMTE3XHgyMFwxNDNceDZjXDE1MVwxNDVceDZlXDE2NFwxNjNceDIwXHgyOFwxNTZceDYxXDE1NVx4NjVceDczXHgyY1x4NzBcMTQxXDE3MVx4NWZceDc0XDE3MVx4NzBceDY1XDU0XDE0M1x4NmNceDY5XDE0NVx4NmVceDc0XDEzN1wxNjRceDc5XHg3MFx4NjVcNTRcMTQ3XDE0MVx4NjJcMTQxXDE0N1x4NjVceDVmXHg3NFx4NzlcMTYwXHg2NVw1NFwxNTRcMTU3XDE0M1wxNDFcMTY0XDE1MVx4NmZcMTU2XHgyY1wxNDNceDZmXDE1NlwxNjRceDYxXDE0M1x4NzRceDJjXDE2M1wxNjRceDYxXDE2NFwxNjVcMTYzXDU0XDE0NFwxNDFcMTY0XDE0NVw1MVx4MjBcMTI2XHg0MVx4NGNcMTI1XDEwNVwxMjNcNTBcNDd7JG5hbWVzfVw0N1x4MmNcNDd7JHBheV90eXBlfVx4MjdceDJjXDQ3eyRjbGllbnRfdHlwZX1ceDI3XHgyY1w0N3skZ2FiYWdlX3R5cGV9XHgyN1w1NFx4Mjd7JGxvY2F0aW9ufVx4MjdcNTRcNDd7JGNvbnRhY3R9XDQ3XHgyY1w0N3skc3RhdHVzfVw0N1w1NFx4Mjd7JGRhdGV9XDQ3XHgyOSIpOyBpZiAoJHF1ZXJ5KSB7IGVjaG8gIlx4NzNceDc1XDE0M1wxNDNcMTQ1XDE2M1x4NzNceDY2XDE2NVx4NmNceDZjIjsgZWNobyAiXDc0XHg3M1wxNDNceDcyXDE1MVx4NzBceDc0XHgzZVx4NmNceDZmXHg2M1wxNDFceDc0XDE1MVx4NmZceDZlXDU2XHg2OFx4NzJceDY1XDE0Nlw3NVx4MjdcMTYwXDE2Mlx4NjVceDczXHg2M1wxNjJcMTQ1XDE2M1x4NzVcMTU0XHg3NFx4MmVceDcwXDE1MFwxNjBcNDdceDNiXDc0XDU3XDE2M1wxNDNcMTYyXDE1MVx4NzBceDc0XHgzZSI7IH0gZWxzZSB7IGVjaG8gIlx4NjVcMTYyXHg3MlwxNTdcMTYyXHgyMFx4NmZcMTQzXHg2M1wxNjVceDcyXHg3MlwxNDVceDY0IjsgfSB9IA==')); ?>


              
                
             
       
              
          <?php include 'footer.php'; ?>