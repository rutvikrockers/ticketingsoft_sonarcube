<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php echo EDIT_WALLET_SETTING; ?></h1>
                </div>
                <div class="page-header border"></div>
                <!-- /.col-lg-12 -->
            </div>
            
            <?php 
				if($msg == 'update')
					{	?>
						
                        	<div class="alert alert-success" role="alert">
							<button class="close" data-dismiss="alert">x</button>
							<strong><?php echo SUCCESS; ?>!</strong> <?php echo RECORD_HAS_BEEN_SUCCESSFULLY_UPDATED;?>
                            </div>
			
			<?php } ?>
            <?php 
				if($error!= '')
				{ ?>
					
                    		<div class="alert alert-danger" role="alert">
							<button class="close" data-dismiss="alert">x</button>
							<strong><?php echo ERRORS; ?>!</strong> <?php echo $error;?>
                            </div> 
				<?php } ?>   
                <?php
								
							$attributes = array('name' => 'frm_listadmin', 'class' => 'site-setting' );	
							echo form_open('admin/site_setting/edit_wallet_setting/',$attributes);

				 ?>   
                 <input type="hidden" name="id"  value="<?php echo $id;?>"/>
            <!-- /.row -->
            <div class="row">
            	<div class="col-lg-12 clearfix">
                	<div class="panel panel-default">
                        <div class="panel-heading">
                          <?php echo WALLET_SETTING; ?>
                        </div>
                        <div class="panel-body">
                            <div class="form-group clearfix">
                                	<div class="col-sm-3">
                                    	<label><?php echo WALLET_ENABLE; ?></label>
                                    </div>
                                    <div class="col-sm-4">
                                    	<select class="form-control" name="wallet_enable">
                                                <option value="1" <?php if($wallet_enable == 1) { echo "selected";}?>><?php echo ACTIVE; ?></option>
                                                <option value="0" <?php if($wallet_enable == 0) { echo "selected";}?>><?php echo INACTIVE; ?></option>
                                         </select>
                                    </div>
                                </div>
                                
                            	<div class="form-group clearfix">
                                	<div class="col-sm-3">
                                    	<label><?php echo WALLET_DONATION_FEES; ?></label>
                                    </div>
                                    <div class="col-sm-9">
                                    	<input class="form-control" type="text" name="wallet_donation_fees" value="<?php echo $wallet_donation_fees; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group clearfix">
                                	<div class="col-sm-3">
                                    	<label><?php echo WALLET_MINIMUM_AMOUNT; ?></label>
                                    </div>
                                    <div class="col-sm-9">
                                    	<input class="form-control" type="text" name="wallet_minimum_amount" value="<?php echo $wallet_minimum_amount; ?>">
                                    </div>
                                </div>
                        </div>
                   	
                 </div>
                 	<div class="text-center">
                 		<button type="submit" class="btn btn-default btn-lg"><?php echo UPDATE_WALLET_SETTING; ?></button>
                    </div>
                </div><!-- col-lg-12  -->
           
            </div>
            <!-- /.row -->
</div>
</div>
        <!-- /#page-wrapper -->

    <!-- /#wrapper -->

</body>

</html>
