<?php 	
	$pmaThemes = array(
		0=>"default",	
		1=>"alizarin",	
		2=>"asphalt",
		3=>"black_n_white",	
		4=>"oceanic",	
		5=>"purple_white",	
		6=>"retro",	
		7=>"warm_fox",	
		8=>"gradient_beauty",	
		9=>"gradient_fresh",	
		10=>"gradient_glamour"
	);
?>
<input type="checkbox" id="wpcf7pma-active" name="wpcf7pma_active" value="1"<?php echo ( isset($cf7_pma) && $cf7_pma==1 ) ? ' checked="checked"' : ''; ?> />
<label for="wpcf7pma-active">Use Popup Message Addons</label>
<br /><br />
<label for="wpcf7pma-theme">Please Select Theme</label>
<br /><br />
<?php foreach($pmaThemes as $key => $values) { ?>
	<input type="radio" name="wpcf7pma_theme" value="<?php echo $values ?>" id="wpcf7pma_theme<?php echo $key ?>" class="pma-radio-opts" <?php echo ( isset($cf7_pma_theme) && $cf7_pma_theme==$values ) ? ' checked="checked"' : ''; ?> />
    <label class="PmaattribsRadioButton" for="wpcf7pma_theme<?php echo $key ?>">
    <img src="<?php echo plugins_url('sweetalert/themes/'.$values.'/thumb.png', __FILE__); ?>" alt="" width="200" height="200" />
</label>
<?php } ?>