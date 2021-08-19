<?php include 'head.php'; 
        
include 'aaside.php'; ?>

    
        <div class="page-wrapper">
      
       
             <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="btn-list">
                                  <a href="emergencycases1.php?user=<?php echo $_SESSION['username']; ?>"><button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-primary">New Collection</button></a>
                          
                              <a href="emergencycases.php?user=<?php echo $_SESSION['username']; ?>"><button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-primary">View Collection</button></a>
                                                        
                            
                                                        
                              
                            
                                       
                                </div>
                            </div>
                        </div>
                    </div>                   



       
       
            <div class="container-fluid">
               
                <div class="row">

   <?php 
							$sq=mysqli_query($con,"SELECT * FROM admin");
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
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>User Category</th>
                                            <th>Contacts</th>
                                            <th>Address</th>

                                            <th>Date</th>
                                            <th>Account Status</th>                       <th>Passport/ID</th>

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
                                            <td><?php echo ucfirst($hk['fullname']);?></td>
                                            <td><?php echo $hk['username'];?></td>
                                            <td><?php echo $hk['password'];?></td>
                                            <td><?php echo $hk['ucat'];?></td>
                                             <td><?php echo $hk['address'];?></td>
                                            <td><?php echo $hk['contact'];?></td>
                                            <td><?php echo $hk['date'];?></td>
                                            <td><?php echo $hk['acstatus'];?></td>
<td><image src="contract/<?php echo $hk['image'];?>" style="border-radius:10px; width:100px; height:70px;">
</td>

                                            <td><a href="users2.php?id=<?php echo $hk['id']; ?>"> Update User Account </a></td>
                                            <td><a href="deleteuser.php?id=<?php echo $hk['id']; ?>"> Delete </a></td>
                                           
                                           
                                            </tr> 
                                        <?php  $k++; } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>








                
                    
                </div>
                
            <?php include 'footer.php'; ?>