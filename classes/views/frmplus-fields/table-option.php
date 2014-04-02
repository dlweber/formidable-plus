<div class="frm_single_option_sortable" id="frm_field-<?php echo $field['id']; ?>-<?php echo $opt_key; ?>">
<span id="frm_delete_field_<?php echo $field['id']; ?>-<?php echo $opt_key; ?>_container" class="frm_single_option">
	<?php if ( defined( 'FRM_IMAGES_URL' ) ) : // older version of Formidable.  Do it the old way ?>
		<a href="javascript:frm_delete_field_option(<?php echo $field['id']?>, '<?php echo $opt_key ?>',ajaxurl);" class="frm_single_visible_hover alignleft" ><img src="<?php echo FRM_IMAGES_URL ?>/trash.png" alt="Delete"></a>
	    <a href="javascript:void(0);" class="frm_single_visible_hover alignleft frm_sortable_handle" ><img src="<?php echo FRM_IMAGES_URL ?>/move.png" alt="Reorder"></a>
    <?php else : // newer version, do it the new way ?>
		<a href="javascript:void(0)" class="frm_single_visible_hover frm_icon_font frm_delete_icon" style="visibility: hidden;"> </a>
	    <a href="javascript:void(0);" class="frm_single_visible_hover alignleft frm_sortable_handle frm_icon_font frm_move_field" > </a>
	<?php endif; ?>
    <span class="frm_ipe_field_option" id="field_<?php echo $field['id']?>-<?php echo $opt_key ?>"><?php echo $opt ?></span>
</span>
<div class="clear"></div>
</div> <!-- frm_single_option_sortable -->