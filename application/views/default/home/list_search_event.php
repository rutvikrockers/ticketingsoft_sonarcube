
<div class="world-tour">
    <ul class="padL0"><!---by kalpesh patel-->
        <?php
        if ($events) {
            foreach ($events as $event) {
                 $event_title = $event['event_title'];
                  $event_url_link = $event['event_url_link'];
                  $event_end_date_time = datetimeformat($event['event_start_date_time']);
                  // $event_end_date_time = date('l, F d Y',strtotime($event['event_start_date_time']));
                  $event_logo = $event['event_logo'];
                  $org_name = $this->event_model->checkevent_owner($event['user_id']);
                  $org_name = $org_name['first_name'];
                  $event_location = $event['street_address'];
                  $location_result = getRecordById('venues', 'id', $event['venue_id']);
                  $venue_name=$location_result['name'];
                  $event_location = setAddress($event['id'], $location_result);
                  if($org_name ==''){
                    $org_result = getOrganizers($event['user_id']);
                    $org_name = $org_result[0]['name'];
                  }
                    $event_id=$event['id'];
                  if($event_logo!='' && file_exists('upload/event/thumb/'.$event_logo)){
                    $event_img = base_url().'upload/event/thumb/'.$event_logo;
                  }else{
                     $event_img = base_url().'upload/event_default/no_img.jpg';
                  }
                ?>
                              <li>
                                                <div class="josef">
                                                    <a href="<?php
                                                            echo site_url('event/view/' . $event_url_link); ?>">
                                                        <div class="imgLeft">
                                                     <div class="flexslider">
                                                        <ul class="slides">
                                                         
                                                          <?php  
                                                            $event_images=getAllRecordById('event_images','event_id',$event_id);

                                                            if($event_images){
                                                              foreach ($event_images as  $image_data) {
                                                              
                                                          ?>
                                                          <li>
                                                           <?php 
                                                                    $image = base_url().'upload/event_default/no_img.jpg';
                                                                    $image_slide =  $image_data['image_name'];
                                                                    if($image_slide != '' && file_exists(base_path().'upload/event/orig/'.$image_slide)){ 
                                                                        $image = base_url().'upload/event/thumb/'.$image_slide;
                                                                    }
                                                                    elseif($image_slide != '' && file_exists(base_path().'upload/event/thumb/'.$image_slide)){ 
                                                                        $image = base_url().'upload/event/thumb/'.$image_slide;
                                                                    }
                                                                ?>
                                                          <img src="<?php echo $image; ?>" alt=" "  height="120px" width="120px"  > 
                                                          </li>
                                                          <?php 
                                                            
                                                              }
                                                            } ?>
                                                          
                                                        </ul>
                                                      </div>

                                                        </div>
                                                        <div class="tour">
                                                            <p><?php echo $event_end_date_time; ?> | <?php echo timeFormat($event['event_start_date_time']); ?></p>
                                                            <h2 class="marB20"><?php echo SecureShowData($event_title); ?></h2>
                                                          <!--   <p class="orgName"><?php echo ORGANIZED_BY; ?>: <?php echo $org_name; ?></p> -->
                                                            <?php if(!$event['online_event_option']){?>
                                                            <p><b><?php echo SecureShowData($venue_name);?></b></p>
                                                            <p class="eventLocation"><?php echo $location_result['venue_city'].', '.SecureShowData($location_result['venue_state']); ?></p>
                                                            <?php }else{
                                                              echo '<p><b>'.online_event.'</b></p>';
                                                              } ?>
                                                            
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
        <?php
    }
}
?>	
        <div class="clear"></div>
    </ul>
</div>


<?php echo $page_link; ?>
<!--<div class="text-center">
<div class="col-sm-12 col-xs-12">
<b class="fr showing-result">Showing 1 - 10 of 34</b>
</div>

                <div class="pagination m0 pt pagination-centered">
         <ul class="p0 m0">
                <li><a href="#">←</a></li>
                <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="disabled"><a href="#">...</a></li>
            <li><a href="#">10</a></li>
                <li><a href="#">→</a></li>
         </ul>
        </div>
</div>-->
<script type="text/javascript">
   $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade",
    controlNav: false, 
    directionNav: false,
  });
});
</script>
          