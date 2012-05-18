<div class="wrap">
  <div id="icon-navegg" class="icon32"><br>
  </div>

  <h2>Navegg</h2>

  <div id="dashboard-widgets-wrap">
    <div id="dashboard-widgets" class="metabox-holder">
      <div class="postbox-container" style="width:49%;">
        <div id="normal-sortables" class="meta-box-sortables ui-sortable">
          <div id="dashboard_right_now" class="postbox ">

            <h3><span><?php echo getTextNvg('nvgMsgAdmInitAbout_1'); ?></span></h3>

            <div class="inside">

            	<h4><strong><?php echo getTextNvg('nvgMsgAdmInitAbout_2'); ?></strong></h4>
		<br />
               	<p><?php echo getTextNvg('nvgMsgAdmInitAbout_3'); ?></p>
            	<p>
		   <strong><?php echo getTextNvg('nvgMsgAdmInitAbout_4'); ?></strong>
	 	   <?php echo getTextNvg('nvgMsgAdmInitAbout_5'); ?>
		</p>
            	<p>
		   <strong><?php echo getTextNvg('nvgMsgAdmInitAbout_6'); ?></strong> 
		   <?php echo getTextNvg('nvgMsgAdmInitAbout_7'); ?>
		</p>
              <?php if(getTextNvg('nvgMsgAdmInitAbout_8') != '!empy'){ ?>
	      <p>
	          <strong><?php echo getTextNvg('nvgMsgAdmInitAbout_8'); ?></strong>
		  <?php echo getTextNvg('nvgMsgAdmInitAbout_9'); ?>
	       </p>
              <?php } ?>
	      <ul class="nvg_lst">
              
	      <li class="tlt"><?php echo getTextNvg('nvgMsgAdmInitAbout_10'); ?></li>
              
	      <li class="d">
	       	  <a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_11_link'); ?>" target="_blank">
 	             <?php echo getTextNvg('nvgMsgAdmInitAbout_11'); ?>
	          </a>
	       </li>
              
	      <li class="s">
	           <a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_12_link'); ?>" target="_blank">
		      <?php echo getTextNvg('nvgMsgAdmInitAbout_12'); ?>
		   </a>
	       </li>
              
	      <?php if(getTextNvg('nvgMsgAdmInitAbout_13') != '!empy'){ ?>
	      <li class="b">
	          <a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_13_link'); ?>" target="_blank">
		     <?php echo getTextNvg('nvgMsgAdmInitAbout_13'); ?>
		  </a>
		</li>
	       <?php } ?>

		<li class="f">
		   <a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_14_link'); ?>" target="_blank">
		      <?php echo getTextNvg('nvgMsgAdmInitAbout_14'); ?>
		   </a>
		</li>

               <li class="p">
	          <a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_15_link'); ?>" target="_blank">
	             <?php echo getTextNvg('nvgMsgAdmInitAbout_15'); ?>
	           </a>
	       </li>
              
	      <li class="c">
	          <a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_16_link'); ?>" target="_blank">
		     <?php echo getTextNvg('nvgMsgAdmInitAbout_16'); ?>
		  </a>
	      </li>
              </ul>
               <div class="clearme"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="postbox-container" style="width:49%;">
        <div class="meta-box-sortables ui-sortable">
          <div class="postbox id_nvg">
           <h3>
	   	<span><?php echo getTextNvg('nvgMsgAdmInitYourId'); ?></span>	   
	   	<div class="<?php  echo NvgWp::getIdNvg() != ''?'on':'off'; ?>">
	   	   <span></span>
		   <?php  echo NvgWp::getIdNvg() != '' ? getTextNvg('nvgMsgAdmInitYourId_1') : getTextNvg('nvgMsgAdmInitYourId_2') ; ?>
	        </div>
	   </h3>
           
	   <div class="inside">
		
		<p><?php echo getTextNvg('nvgMsgAdmInitYourId_3'); ?> <strong>ID</strong> <?php echo getTextNvg('nvgMsgAdmInitYourId_4'); ?> </p>

               <form method="post" action="" onSubmit ="return validaForm()" > 

                  <input type="text" name="idNvg" id="idNvg" value="<?php
		      if( isset( $_POST['idNvg']) )
  			 echo str_replace(" ","",$_POST['idNvg']);
		      else
		         echo NvgWp::getIdNvg() != ''? NvgWp::getIdNvg(): getTextNvg('nvgMsgAdmInitYourId_5'); ?>"
			 onblur="if (this.value == '') {this.value = '<?php echo getTextNvg('nvgMsgAdmInitYourId_5');?>'}"
onfocus="if (this.value == '<?php echo getTextNvg('nvgMsgAdmInitYourId_5');?>') {this.value = '';}"/>
                
			  <button class="button" title="<?php echo getTextNvg('nvgMsgAdmInitYourId_7'); ?>" >
			     <?php echo getTextNvg('nvgMsgAdmInitYourId_6'); ?>
			  </button>

                   <?php if( isset( $_POST['idNvg']) ){ ?>
		         <p class="<?php echo $msgPost['class']; ?>"><?php echo $msgPost['msg'];?></p>
		   <?php } ?>
		   
		</form>   



                <div class="clearme"></div>

                <ul class="nvg_lst">
                	<li class="h">
			   <a href="<?php echo getTextNvg('nvgMsgAdmInitYourId_8_link'); ?>"  target="_blank">
			     <?php echo getTextNvg('nvgMsgAdmInitYourId_8'); ?>
			   </a>
		        </li>
                       <li class="r">
			   <a href="<?php echo getTextNvg('nvgMsgAdmInitYourId_9_10_link'); ?>"  target="_blank">
			     <?php echo getTextNvg('nvgMsgAdmInitYourId_9'); ?> 
			     <span><?php echo getTextNvg('nvgMsgAdmInitYourId_10'); ?></span>
			   </a>
		       </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="rep_nvg">
      	<div>
        <p>
	  <a href="<?php echo getTextNvg('nvgMsgAdmInitPainel_1_link'); ?>" target="_blank">
 	    <?php echo getTextNvg('nvgMsgAdmInitPainel_1'); ?>
	  </a> <?php echo getTextNvg('nvgMsgAdmInitPainel_2'); ?></p>
        </div>
      </div>
   <div class="clear"></div>
  </div>
  <!-- dashboard-widgets-wrap --> 
  
</div>
<script type="text/javascript">

function validaForm(){

  if(document.getElementById('idNvg').value == '' ||  document.getElementById('idNvg').value == '<?php echo getTextNvg('nvgMsgAdmInitYourId_5');?>'){
	alert("<?php echo getTextNvg('nvgMsgAdmInitYourIdAlert_1'); ?>");
	return false;
  }
   return true;
}

var color = "#2d94d0";

function BlinkIt () {
    if (document.getElementById('idNvg').value == '<?php echo getTextNvg('nvgMsgAdmInitYourId_5');?>'){
      var blink = document.getElementById ('idNvg');
      color = (color == "#FBF7DF")? "#2d94d0" : "#FBF7DF";
      blink.style.color = color;
    }else{ document.getElementById('idNvg').style.color = "#2d94d0";}
}

window.setInterval(BlinkIt, 700);

</script>

