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

   <?php 
							$sq=mysqli_query($con,"SELECT * FROM clients");
							?>


                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                            </div>
                           <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                    <tr>
                                            <th>&nbsp;</th>
                                            <th>Full Names</th>
                                            <th>Payment Type</th>
                                            <th>Client Type</th>
                                            <th>Waste Type</th>
                                            <th>Contacts</th>
                                            <th>Address</th>

                                            <th>Date</th>
                                            <th>Account Status</th>                       

                                            <th>Update User Account </th> 
                                      <th>Delete Account </th> 
                                          
                                        </tr>
                                       
                                </thead>


                                <?php $k=1;
									while($hk=mysqli_fetch_array($sq))
									{ ?>
                                <tbody>
                                    <tr>
                                  
                                        <tr>
                                            <td><?php echo $k;?></td>
                                            <td><?php echo ucfirst($hk['names']);?></td>
                                            <td><?php echo $hk['pay_type'];?></td>
                                            <td><?php echo $hk['client_type'];?></td>
                                            <td><?php echo $hk['gabage_type'];?></td>
                                 <td><?php echo $hk['contact'];?></td>
                                 
                                             <td><?php echo $hk['location'];?></td>
                                            <td><?php echo $hk['date'];?></td>
                                            <td><?php echo $hk['status'];?></td>


                                            <td><a href="update_client.php?id=<?php echo $hk['id']; ?>"> Update User Account </a></td>
                                            <td><a href="deleteuser.php?id=<?php echo $hk['id']; ?>"> Delete </a></td>
                                           
                                           
                                            </tr> 
                                        <?php  $k++; } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>








                
                    
                </div>
                
            <?php include 'footer.php'; ?>