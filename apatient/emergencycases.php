<?php include 'head.php'; 
        
include 'aside.php'; ?>

    
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
                            $u=$_SESSION['username'];
                            $sq=mysqli_query($con,"SELECT * FROM wastecollect WHERE collector='$u'");
                             
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
                                            <tr>
                                            <th>&nbsp;</th>
                                            <th>Collector</th>
                                            <th>Client</th>
                                            <th>Waste Tpye</th>
                                            <th>Pay Type</th>
                                            <th>Amount</th> 
                                            <th>Balance</th> 
                                            <th>Date</th> 
                                        </tr>
                                          
                                        </tr>
                                       
                                </thead>


                                <?php $k=1;  
                                    while($hk=mysqli_fetch_array($sq))
                                    {  
                                ?>
                                <tbody>
                                        <tr>
                                             <td><?php echo $k;?></td>
                                            <td><?php echo $hk['collector'];?></td>
                                            <td><?php echo $hk['clientname'];?></td>
                                            <td><?php echo $hk['typeofwaste'];?></td>
                                            <td><?php echo $hk['paytype'];?></td>
                                            <td><?php echo $hk['amountpaid'];?></td>
                                            <td><?php echo $hk['balance'];?></td>
                                            <td><?php echo $hk['date'];?></td>
                                            
                                            <!-- <td><a href="patie2.php?id=<?php echo $hk['id']; ?>"> Edit </a></td>
                                            <td><a href="dpatie2.php?id=<?php echo $hk['id']; ?>"> Delete </a></td> -->
                                            </tr> 
                                        <?php  $k++; } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>








                
                    
                </div>
                
            <?php include 'footer.php'; ?>