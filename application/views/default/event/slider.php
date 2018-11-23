
<div class="white-popup-block popup-container popup-slider">
  <div class="flexslider1 flexslider">
              <ul class="slides">
            <!--     <li>
                   <?php 
                          $image = base_url().'upload/event_default/no_img.jpg';
                          $event_logo =  $event_details['event_logo'];
                          if($event_logo != '' && file_exists(base_path().'upload/event/orig/'.$event_logo)){ 
                              $image = base_url().'upload/event/orig/'.$event_logo;
                          }
                          elseif($event_logo != '' && file_exists(base_path().'upload/event/thumb/'.$event_logo)){ 
                              $image = base_url().'upload/event/thumb/'.$event_logo;
                          }
                      ?>
                <img src="<?php echo $image; ?>" alt=" " height="" class="img-responsive " > 
                </li> -->
                <?php  
                  

                  if($event_images){
                    foreach ($event_images as  $image_data) {
                    
                ?>
                <li>
                 <?php 
                          $image = base_url().'upload/event_default/no_img.jpg';
                          $image_slide =  $image_data['image_name'];
                          if($image_slide != '' && file_exists(base_path().'upload/event/orig/'.$image_slide)){ 
                              $image = base_url().'upload/event/orig/'.$image_slide;
                          }
                          elseif($image_slide != '' && file_exists(base_path().'upload/event/thumb/'.$image_slide)){ 
                              $image = base_url().'upload/event/thumb/'.$image_slide;
                          }
                      ?>
                <img src="<?php echo $image; ?>" alt=" " height="" class="img-responsive " > 
                </li>
                <?php 
                  
                    }
                  } ?>
                
              </ul>
            </div>
  
 
   </div>

<script>
   $(function () {
     $('.flexslider').flexslider({
        animation: "slide",
        smoothHeight: true,
        animateHeight: true      
        
       });
    });
</script>
