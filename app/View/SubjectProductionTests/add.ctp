<div class="subjectProductionTests form">
<?php echo $this->Form->create('SubjectProductionTest'); ?>
	<fieldset>
		<legend><?php echo __('Add Subject Production Test'); ?></legend>
	<?php
		echo $this->Form->input('job_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('material_specification');
		echo $this->Form->input('sampleid');
		echo $this->Form->input('welding_position');
		echo $this->Form->input('heat_no');
		echo $this->Form->input('job_no');
		echo $this->Form->input('plate_thickness');
		echo $this->Form->input('welding_config');
		echo $this->Form->input('welding_process');
		echo $this->Form->input('serial_no');
		echo $this->Form->input('welder_one_name');
		echo $this->Form->input('welder_one_icno');
		echo $this->Form->input('welder_one_tagno');
		echo $this->Form->input('welder_one_process');
		echo $this->Form->input('welder_two_name');
		echo $this->Form->input('welder_two_icno');
		echo $this->Form->input('welder_two_tagno');
		echo $this->Form->input('welder_two_process');
		echo $this->Form->input('test_code_one');
		echo $this->Form->input('test_code_two');
		echo $this->Form->input('transverse_tensile_test_welding');
		echo $this->Form->input('hot_tensile_test_weld_metal');
		echo $this->Form->input('transverse_side_bend_test');
		echo $this->Form->input('charpy_impact_test_weld_metal');
		echo $this->Form->input('macro_examination');
		echo $this->Form->input('weld_tensile_test');
		echo $this->Form->input('hardness_survey');
		echo $this->Form->input('temp_below_which_no_restriction_on_heating_rate');
		echo $this->Form->input('soaking_temp_controlled_heating_rate');
		echo $this->Form->input('soaking_temp');
		echo $this->Form->input('soaking_time');
		echo $this->Form->input('temp_below_which_cooling_rate_is_unrestricted');
		echo $this->Form->input('controlled_cooling_rate');
		echo $this->Form->input('declaration_name');
		echo $this->Form->input('declaration_designation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subject Production Tests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
