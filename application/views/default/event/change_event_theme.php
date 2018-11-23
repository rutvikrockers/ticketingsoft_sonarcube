<ul class="color-picker col-xs-12 col-sm-12 col-md-11 p0">

	<li class="col-sm-3 col-xs-4 width-xs2 colorpivker-box">
		<div class="col-sm-6 col-xs-6 p0 tac pos_relative">
			<span class="bg-color_xs" style="background:<?php echo $oneTheme['event_title']?>" id="event_theme_title_span" ></span>
			<input type='color' class="full CP_input" value="<?php echo $oneTheme['event_title']?>" onChange="set_preview_event(this,'event_theme_title');"  /> 
		</div>
		<div class="col-sm-6 col-xs-6 p0">
            <label class="m0">&nbsp;<?php echo Event_Title;?></label>
		</div>    
    	<input type="hidden" name="event_title" value="<?php echo SecureShowData($oneTheme['event_title']);?>" id="event_theme_title" />
    	<div class="clear"></div>
	</li>

    <li class="col-sm-3 col-xs-4 width-xs2 colorpivker-box">
    	<div class="col-sm-6 col-xs-6 p0 tac pos_relative">
    		<span class="bg-color_xs" style="background:<?php echo SecureShowData($oneTheme['background']);?>" id="event_theme_background_span" ></span>
    		<input type='color' class="full CP_input" value="<?php echo SecureShowData($oneTheme['background']);?>" onChange="set_preview_event(this,'event_theme_background');"  /> 
    	</div>
	    <div class="col-sm-6 col-xs-6 p0">
	    	<label class="m0">&nbsp;<?php echo Background;?></label>
	    </div>
    	<input type="hidden" name="background" value="<?php echo SecureShowData($oneTheme['background']);?>" id="event_theme_background" />
    	<div class="clear"></div>
    </li>
    
    <li class="col-sm-3 col-xs-4 width-xs2 colorpivker-box">
	    <div class="col-sm-6 col-xs-6 p0 tac pos_relative">
	    	<span class="bg-color_xs" style="background:<?php echo SecureShowData($oneTheme['header_text']);?>" id="event_theme_header_text_span" ></span>
	    	<input type='color' class="full CP_input" value="<?php echo SecureShowData($oneTheme['header_text']);?>" onChange="set_preview_event(this,'event_theme_header_text');"  /> 
	    </div>
	    <div class="col-sm-6 col-xs-6 p0">
	    	<label class="m0">&nbsp;<?php echo Header_Text;?></label>
	    </div>
    	<input type="hidden" name="header_text" value="<?php echo SecureShowData($oneTheme['header_text']);?>" id="event_theme_header_text" />
    	<div class="clear"></div>
    </li>
    
    <li class="col-sm-3 col-xs-4 width-xs2 colorpivker-box">
	    <div class="col-sm-6 col-xs-6 p0 tac pos_relative">
	    	<span class="bg-color_xs" style="background:<?php echo SecureShowData($oneTheme['box_background']);?>" id="event_theme_box_background_span" ></span>
	    	<input type='color' class="full CP_input" value="<?php echo SecureShowData($oneTheme['box_background']);?>" onChange="set_preview_event(this,'event_theme_box_background');"  /> 
	    </div>
	    <div class="col-sm-6 col-xs-6 p0">
	    	<label class="m0">&nbsp;<?php echo Box_Background;?></label>
	    </div>
    	<input type="hidden" name="box_background" value="<?php echo SecureShowData($oneTheme['box_background']);?>" id="event_theme_box_background" />
    	<div class="clear"></div>
    </li>
    
    <li class="col-sm-3 col-xs-4 width-xs2 colorpivker-box">
	    <div class="col-sm-6 col-xs-6 p0 tac pos_relative">
	    	<span class="bg-color_xs" style="background:<?php echo SecureShowData($oneTheme['body_text']);?>" id="event_theme_body_text_span" ></span>
	    	<input type='color' class="full CP_input" value="<?php echo SecureShowData($oneTheme['body_text']);?>" onChange="set_preview_event(this,'event_theme_body_text');"  /> 
	    </div>
	    <div class="col-sm-6 col-xs-6 p0">
	    	<label class="m0">&nbsp;<?php echo Body_Text;?></label>
	    </div>
    	<input type="hidden" name="body_text" value="<?php echo SecureShowData($oneTheme['body_text']);?>" id="event_theme_body_text" />
    	<div class="clear"></div>
    </li>
    
    <li class="col-sm-3 col-xs-4 width-xs2 colorpivker-box">
	    <div class="col-sm-6 col-xs-6 p0 tac pos_relative">
	    	<span class="bg-color_xs" style="background:<?php echo SecureShowData($oneTheme['box_border']);?>" id="event_theme_box_border_span" ></span>
	    	<input type='color' class="full CP_input" value="<?php echo SecureShowData($oneTheme['box_border']);?>" onChange="set_preview_event(this,'event_theme_box_border');"  /> 
	    </div>
	    <div class="col-sm-6 col-xs-6 p0">
	    	<label class="m0">&nbsp;<?php echo Box_Border;?></label>
	    </div>
    	<input type="hidden" name="box_border" value="<?php echo SecureShowData($oneTheme['box_border']);?>" id="event_theme_box_border" />
    	<div class="clear"></div>
    </li>
    
    <li class="col-sm-3 col-xs-4 width-xs2 colorpivker-box">
	    <div class="col-sm-6 col-xs-6 p0 tac pos_relative">
	    	<span class="bg-color_xs" style="background:<?php echo SecureShowData($oneTheme['links']);?>" id="event_theme_links_span" ></span>
	    	<input type='color' class="full CP_input" value="<?php echo SecureShowData($oneTheme['links']);?>" onChange="set_preview_event(this,'event_theme_links');"  /> 
	    </div>
	    <div class="col-sm-6 col-xs-6 p0">
	    	<label class="m0">&nbsp;<?php echo Links;?></label>
	    </div>
    	<input type="hidden" name="links" value="<?php echo SecureShowData($oneTheme['links']);?>" id="event_theme_links" />
    	<div class="clear"></div>
    </li>
    
    <li class="col-sm-3 col-xs-4 width-xs2 colorpivker-box">
	    <div class="col-sm-6 col-xs-6 p0 tac pos_relative">
	    	<span class="bg-color_xs" style="background:<?php echo SecureShowData($oneTheme['box_header']);?>" id="event_theme_box_header_span" ></span>
	    	<input type='color' class="full CP_input" value="<?php echo SecureShowData($oneTheme['box_header']);?>" onChange="set_preview_event(this,'event_theme_box_header');"  /> 
	    </div>
	    <div class="col-sm-6 col-xs-6 p0">
	    	<label class="m0">&nbsp;<?php echo Box_Header;?></label>
	    </div>
    	<input type="hidden" name="box_header" value="<?php echo SecureShowData($oneTheme['box_header']);?>" id="event_theme_box_header" />
    	<div class="clear"></div>
    </li>
    
</ul>