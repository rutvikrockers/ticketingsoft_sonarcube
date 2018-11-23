<div id="page-wrapper">
  <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 clearfix">
                    <h1><?php echo MYERNE; ?> - <?php echo SecureShowData($site_setting['site_name']);?> <?php echo ADMIN_PANEL; ?></h1>
                </div>
                <div class="page-header border"></div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
		 	   
            <div class="row">
            	<div class="col-lg-12 clearfix">
              <ul class="nav nav-tabs ">
                      
                          <li <?php if($type==0){?>class="active"<?php } ?>><a href="<?php echo site_url('admin/admin_user/earning/0/'.$user_id)?>">Event Earn</a></li>
                          <li <?php if($type==1){?>class="active"<?php } ?>><a href="<?php echo site_url('admin/admin_user/earning/1/'.$user_id)?>">Referral Earn</a></li>
                        
                          <li <?php if($type==2){?>class="active"<?php } ?>><a href="<?php echo site_url('admin/admin_user/earning/2/'.$user_id)?>" >Affiliate Earn</a></li>
                          
                    </ul>
                	<div class="panel panel-default">
                        
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            <div class="table-responsive">
                            
                                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	
                                     <!--  <th>&nbsp;</th> -->
                                      <th>Event Name</th>
                                      <th>Amount</th>
                                      <th>Paid</th>
                                      <th>Due</th>
                                      <th>Date</th>
                                   <!--  <th>Status</th>
                                    <th>Action</th> -->
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
										if($result)
										{
                                         // echo "<pre>";
                                         // print_r($result);die;
											foreach($result as $earn)
												{
												
                         $id = $earn['id'];
                         $event_title = $earn['event_title'];
//                         $credit = $earn['credit'];
                         $credit = $earn['wcredit'];
                         $event_id = $earn['event_id'];                                            
                          //$debit = $earn['debit'];
                          $debit = $earn['wdebit'];
                          if($credit>0){
                             $amount = set_event_currency($credit,$event_id).' cr';
                             //$amount = set_currency($credit).' cr';
                          }else{
                             //$amount = set_currency($debit).' dr'; 
                              $amount = set_event_currency($debit,$event_id).' cr';//
                          }
                        $paid = $earn['paid'];
                        $due = $earn['due'];
                        $created_at = $earn['created_at'];
                        $status = $earn['status'];
											
											
									?>
                                        <tr class="odd gradeX">
                                 <!-- <td><?php if($status==1){?><input type="checkbox" class="checkbox1" name="chk[]"  value="<?php echo $id;?>" > <?php }?></td> --> 
                                    <td><?php echo SecureShowData($event_title); ?></td>
                                    <td><?php echo $amount; ?></td> 
                                    <td><?php echo set_event_currency($paid,$event_id); ?></td>
                                    <td><?php echo set_event_currency($due,$event_id); ?></td>
                                    <td><?php echo $created_at; ?></td>
                                   <!--  <td>
                                      <?php
                                        if($status==1)
                      {?>
                        <a href="<?php echo site_url('account/withdraw_form/'.$event_id);?>" style="color: red;"><?php echo "withdraw Request";?></a>
                      <?php }
                      if($status==0){
                        echo 'Pending';
                      }
                      if($status==2){
                        echo "Due";
                      }
                      if($status==3){
                        echo "Paid";
                      }
                                       ?>
                                      
                                    </td>
                                    <td>
                                    <a href="<?php echo site_url('account/view_earning/0/');?>/<?php echo $event_id;?>" data-toggle="tooltip" data-placement="bottom" title="View Detail" class="fancybox fancybox.iframe edit">View</a>
                                    </td> -->
                                </tr>
                                            
                                        </tr>
                                        <?php 
												}
										}		
										
										?>
                                        
                                    </tbody>
                                </table>
                            
                             </div>   
                                </div>
                         </div>
                   	</div>
                 </div>
                </div><!-- col-lg-8  -->
            	
                
            </div>
            <!-- /.row -->
            </form>
            </div>
        </div>
        <!-- /#page-wrapper -->
</body>
<script>

	$(document).ready(function(){
		$('#dataTables-example').dataTable();
	});
</script>

</html>
