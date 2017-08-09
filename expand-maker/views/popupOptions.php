<?php
$popupOptions = PopupTypeReadMore::params();
?>
<div class="panel panel-default">
	<div class="panel-heading">Popup options</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-5">
				<label class="control-label" for="textinput"><?php _e('Popup theme', YRM_LANG);?>:</label>
			</div>
			<div class="col-xs-4">
				<?php echo ReadMoreFunctions::createRadioButtons($popupOptions['themes'], $dataObj->getOptionValue('yrm-popup-theme'), array('class' => 'yrm-popup-theme','name' => 'yrm-popup-theme')); ?><br>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-5">
				<label class="control-label" for="textinput"><?php _e('Width', YRM_LANG);?>:</label>
			</div>
			<div class="col-xs-4">
				<input type="text" class="form-control yrm-popup-width" name="yrm-popup-width" value="<?php echo esc_attr($dataObj->getOptionValue('yrm-popup-width'))?>"><br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-5">
				<label class="control-label" for="textinput"><?php _e('Height', YRM_LANG);?>:</label>
			</div>
			<div class="col-xs-4">
				<input type="text" class="form-control yrm-popup-height" name="yrm-popup-height" value="<?php echo esc_attr($dataObj->getOptionValue('yrm-popup-height'))?>"><br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-5">
				<label class="control-label" for="textinput"><?php _e('Max width', YRM_LANG);?>:</label>
			</div>
			<div class="col-xs-4">
				<input type="text" class="form-control yrm-popup-max-width" name="yrm-popup-max-width" value="<?php echo esc_attr($dataObj->getOptionValue('yrm-popup-max-width'))?>"><br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-5">
				<label class="control-label" for="textinput"><?php _e('Max height', YRM_LANG);?>:</label>
			</div>
			<div class="col-xs-4">
				<input type="text" class="form-control yrm-popup-max-height" name="yrm-popup-max-height" value="<?php echo esc_attr($dataObj->getOptionValue('yrm-popup-max-height'))?>"><br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-5">
				<label class="control-label" for="textinput"><?php _e('Initial width', YRM_LANG);?>:</label>
			</div>
			<div class="col-xs-4">
				<input type="text" class="form-control yrm-popup-initial-width" name="yrm-popup-initial-width" value="<?php echo esc_attr($dataObj->getOptionValue('yrm-popup-initial-width'))?>"><br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-5">
				<label class="control-label" for="textinput"><?php _e('Initial hight', YRM_LANG);?>:</label>
			</div>
			<div class="col-xs-4">
				<input type="text" class="form-control yrm-popup-initial-height" name="yrm-popup-initial-height" value="<?php echo esc_attr($dataObj->getOptionValue('yrm-popup-initial-height'))?>"><br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-5">
				<label class="control-label" for="textinput"><?php _e('Dismiss on "esc" key', YRM_LANG);?>:</label>
			</div>
			<div class="col-xs-4">
				<input type="checkbox" class="yrm-popup-esc-key" name="yrm-popup-esc-key" <?php echo esc_attr($dataObj->getOptionValue('yrm-popup-esc-key', true))?>><br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-5">
				<label class="control-label" for="textinput"><?php _e('Show "close" button', YRM_LANG);?>:</label>
			</div>
			<div class="col-xs-4">
				<input type="checkbox" class="yrm-popup-close-button" name="yrm-popup-close-button" <?php echo esc_attr($dataObj->getOptionValue('yrm-popup-close-button', true))?>><br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-5">
				<label class="control-label" for="textinput"><?php _e('Dismiss on overlay click', YRM_LANG);?>:</label>
			</div>
			<div class="col-xs-4">
				<input type="checkbox" class="yrm-popup-overlay-click" name="yrm-popup-overlay-click" <?php echo esc_attr($dataObj->getOptionValue('yrm-popup-overlay-click', true))?>><br>
			</div>
		</div>
	</div>
</div>