<?php
use ycd\AdminHelper;
$defaultData = AdminHelper::defaultData();
$type = $this->getCurrentTypeFromOptions();
?>
<div class="ycd-bootstrap-wrapper">
	<div class="row form-group">
		<div class="col-md-6">
			<label class="ycd-label-of-input"><?php _e('Time zone', YCD_TEXT_DOMAIN); ?></label>
		</div>
		<div class="col-md-5">
			<?php echo AdminHelper::selectBox($defaultData['clock-time-zone'], esc_attr($this->getOptionValue('ycd-clock1-time-zone')), array('name' => 'ycd-clock1-time-zone','data-target-index' => '1','class' => 'js-ycd-select js-circle-time-zone')); ?>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-6">
			<label for="ycd-clock1-width" class="ycd-label-of-input"><?php _e('Dimension', YCD_TEXT_DOMAIN); ?></label>
		</div>
		<div class="col-md-5">
			<input type="number" name="ycd-clock1-width" data-target-index="1" class="form-control ycd-clock-width" id="ycd-clock1-width" value="<?php echo esc_attr($this->getOptionValue('ycd-clock1-width')); ?>">
		</div>
		<div class="col-md-1 ycd-label-of-input">
			<?php _e('px', YCD_TEXT_DOMAIN); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label class="ycd-label-of-input"><?php _e('Alignment', YCD_TEXT_DOMAIN); ?></label>
		</div>
		<div class="col-md-5">
			<?php echo AdminHelper::selectBox($defaultData['horizontal-alignment'], esc_attr($this->getOptionValue('ycd-clock1-alignment')), array('name' => 'ycd-clock1-alignment', 'class' => 'js-ycd-select  ycd-clock1-alignment ycd-clock-alignment')); ?>
		</div>
	</div>
</div>
<?php
	require_once YCD_VIEWS_PATH.'preview.php';
?>
<input type="hidden" name="ycd-type" value="<?php echo esc_attr($type); ?>"> 