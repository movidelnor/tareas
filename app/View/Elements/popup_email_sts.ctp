<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="min-height: 150px;">
        <div class="modal-header">
            <button type="button" class="close close-icon" data-dismiss="modal" onclick="closePopup();"><i class="material-icons">&#xE14C;</i></button>
            <h4  class="ellipsis-view" style="max-width: 380px;"><?php echo __('Email Status');?></h4>
        </div>
        <div class="loader_dv_eml" style="position:absolute;left:44%;top:47%;">
            <center><img src="<?php echo HTTP_IMAGES; ?>images/case_loader2.gif" alt="Loading..." title="Loading..." /></center>
        </div>
        <div id="inner_eml_sts" class="mils_ipad"></div>
    </div>
</div>