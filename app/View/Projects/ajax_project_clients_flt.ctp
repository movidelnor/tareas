<input type="text" name="search_user" id="" placeholder="Search" class="searchType" onkeyup="searchFilterItems(this);" autocomplete="off" />
<input type="hidden" id="project_client_by_all">
<?php
$m = 0;
if (isset($diy_list) && !empty($diy_list)) {
    $m = 0;
    $h = 0;
    $newArr = array();
    foreach ($diy_list as $drbKey=>$drbVal) {
        $m++;
        $drbId = $drbKey;
        $drbTitle = $drbVal;
        array_push($newArr,$drbId);
        if(!empty($drbTitle)) { ?>
        <li>
            <a href="javascript:void(0);">
                <div class="slide_menu_div1">
                    <input type="checkbox" id="dclients_<?php echo $drbId; ?>" onClick="checkboxProjectClients('dclients_<?php echo $drbId; ?>', 'check','<?php echo $drbId; ?>','<?php echo $this->Format->formatText($drbTitle); ?>');"/>
                    <font onClick="checkboxProjectClients('dclients_<?php echo $drbId; ?>', 'check','<?php echo $drbId; ?>','<?php echo $this->Format->formatText($drbTitle); ?>');"   title='<?php echo $this->Format->formatText($drbTitle); ?>'>
                    &nbsp;<?php echo $this->Format->formatText($drbTitle); ?></font>
                    <div style="margin:0;color:#999999;line-height:16px;padding-left:20px;font-size:11px;">
                    </div>
                    <input type="hidden" name="tcktsubmtd_<?php echo $drbId; ?>" id="Dcidrb_<?php echo $drbId; ?>" value="<?php echo $drbId; ?>" readonly="true">
                </div>
            </a>
        </li>
        <?php }
    }
    $str = json_encode($newArr);
    if ($h != 0) {
        ?>
        <?php }
    ?>
<?php } else { ?>
    <li><a href="javascript:void(0);">
            <div class="slide_menu_div1">
                <font title='<?php echo __("Sorry, No Clients");?>'>
                &nbsp;<?php echo __('No Clients'); ?> </font>
                <div style="margin:0;color:#999999;line-height:16px;padding-left:20px;font-size:11px;">
                </div>
            </div>
        </a></li>
<?php } ?>
<input type="hidden" id="totprojclntsId" value="<?php echo $str; ?>" readonly="true"/>
