<div class="subjectWqts form">
<?php echo $this->Form->create('SubjectWqt'); ?>
	<fieldset>
		<legend><?php echo __('Add Subject Wqt'); ?></legend>
	<?php
		echo $this->Form->input('job_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('material_specification');
		echo $this->Form->input('welding_config');
		echo $this->Form->input('welding_position');
		echo $this->Form->input('welding_process');
		echo $this->Form->input('pipe_diameter');
		echo $this->Form->input('pipe_schedule');
		echo $this->Form->input('pipe_thickness');
		echo $this->Form->input('electrode_size');
		echo $this->Form->input('electrode_brand');
		echo $this->Form->input('sampleid');
		echo $this->Form->input('plate_thickness');
		echo $this->Form->input('heat_no_pipe_plate');
		echo $this->Form->input('stud_size');
		echo $this->Form->input('wps_no');
		echo $this->Form->input('pqr_no');
		echo $this->Form->input('welder_one_name');
		echo $this->Form->input('welder_one_icno');
		echo $this->Form->input('welder_one__tagno');
		echo $this->Form->input('welder_one_process');
		echo $this->Form->input('welder_two_name');
		echo $this->Form->input('welder_two_icno');
		echo $this->Form->input('welder_two_tagno');
		echo $this->Form->input('welder_two_process');
		echo $this->Form->input('welder_three_name');
		echo $this->Form->input('welder_three_icno');
		echo $this->Form->input('welder_three_tagno');
		echo $this->Form->input('welder_three_process');
		echo $this->Form->input('test_code');
		echo $this->Form->input('radiography_gamma_ray');
		echo $this->Form->input('radiography_x_ray');
		echo $this->Form->input('dye_penetrant_test');
		echo $this->Form->input('magnetic_particle_inspection');
		echo $this->Form->input('transverse_tensile_test_welding');
		echo $this->Form->input('transverse_root_bend_test');
		echo $this->Form->input('transverse_side_bend_test');
		echo $this->Form->input('transverse_face_bend_test');
		echo $this->Form->input('fracture_test_fillet_weld');
		echo $this->Form->input('nick_break_api1104');
		echo $this->Form->input('macro_examination');
		echo $this->Form->input('special_remarks');
		echo $this->Form->input('declaration_name');
		echo $this->Form->input('declaration_designation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subject Wqts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
