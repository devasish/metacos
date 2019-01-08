<div class="subjectMaterialTests form">
<?php echo $this->Form->create('SubjectMaterialTest'); ?>
	<fieldset>
		<legend><?php echo __('Add Subject Material Test'); ?></legend>
	<?php
		echo $this->Form->input('job_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('material_specification');
		echo $this->Form->input('certificate_no');
		echo $this->Form->input('pipe_diameter');
		echo $this->Form->input('pipe_schedule');
		echo $this->Form->input('pipe_thickness');
		echo $this->Form->input('simple_dimension');
		echo $this->Form->input('sampleid');
		echo $this->Form->input('manufacturer');
		echo $this->Form->input('plate_thickness');
		echo $this->Form->input('heat_no_pipe_plate');
		echo $this->Form->input('diameter_bar_stud');
		echo $this->Form->input('test_code');
		echo $this->Form->input('dye_penetrant_test');
		echo $this->Form->input('ultrasonic_test');
		echo $this->Form->input('thickness_ganging_measurment');
		echo $this->Form->input('magnetic_particle_inspection');
		echo $this->Form->input('fluorescent_dye_penetrant_test');
		echo $this->Form->input('coating_thickness_measurement');
		echo $this->Form->input('full_tensile_longitudinal_direction');
		echo $this->Form->input('full_tensile_transverse_direction');
		echo $this->Form->input('hot_tensile_test_base_metal');
		echo $this->Form->input('through_thickness_z_direction');
		echo $this->Form->input('pull_test');
		echo $this->Form->input('tensile_test_deformed_bar_grade');
		echo $this->Form->input('tensile_test_full_size_bolt_nut');
		echo $this->Form->input('shear_test_bolt');
		echo $this->Form->input('proof_load_test_nut');
		echo $this->Form->input('wadge_test');
		echo $this->Form->input('slip_factor_test');
		echo $this->Form->input('longitudinal_root_bend_test');
		echo $this->Form->input('longitudinal_face_bend_test');
		echo $this->Form->input('bending_rebend_test_deform_bar');
		echo $this->Form->input('longitudinal_side_bend_test');
		echo $this->Form->input('hardness_survey_hvn');
		echo $this->Form->input('hardness_survey_rockwell');
		echo $this->Form->input('hardness_survey_brinell');
		echo $this->Form->input('fracture_test');
		echo $this->Form->input('flattening_test_pipe_tube');
		echo $this->Form->input('flaring_test');
		echo $this->Form->input('corrosion_test_astm_g28');
		echo $this->Form->input('corrosion_test_astm_g48');
		echo $this->Form->input('corrosion_test_astm_ae');
		echo $this->Form->input('salt_spary_test');
		echo $this->Form->input('hydrogen_induced_cracking');
		echo $this->Form->input('sulphide_stress_cracking');
		echo $this->Form->input('ferrite_count_astm_e562');
		echo $this->Form->input('ferrite_count_feritescope');
		echo $this->Form->input('ferrite_count_schaeffer_diagram');
		echo $this->Form->input('ferrite_count_delong_diagram');
		echo $this->Form->input('metallography');
		echo $this->Form->input('infinite_focus_imaging');
		echo $this->Form->input('sme_edxs');
		echo $this->Form->input('in_situ_metallography');
		echo $this->Form->input('pmi_spark');
		echo $this->Form->input('pmi_arc');
		echo $this->Form->input('desktop_chemical_analysis_spark');
		echo $this->Form->input('wet_analysis');
		echo $this->Form->input('base_metal');
		echo $this->Form->input('weld_metal');
		echo $this->Form->input('element_required_list');
		echo $this->Form->input('similar_material_lessthan_38_temp');
		echo $this->Form->input('similar_material_graterthan_38_temp');
		echo $this->Form->input('Charpy_weld_metal');
		echo $this->Form->input('fusion_line');
		echo $this->Form->input('fusion_line_1mm');
		echo $this->Form->input('fusion_line_2mm');
		echo $this->Form->input('fusion_line_3mm');
		echo $this->Form->input('fusion_line_5mm');
		echo $this->Form->input('haz');
		echo $this->Form->input('Charpy_base_metal');
		echo $this->Form->input('top_weld_metal');
		echo $this->Form->input('top_fusion_line');
		echo $this->Form->input('top_fusion_line_1mm');
		echo $this->Form->input('top_fusion_line_2mm');
		echo $this->Form->input('top_fusion_line_3mm');
		echo $this->Form->input('top_fusion_line_5mm');
		echo $this->Form->input('top_haz');
		echo $this->Form->input('top_base_metal');
		echo $this->Form->input('bottom_weld_metal');
		echo $this->Form->input('bottom_fusion_line');
		echo $this->Form->input('bottom_fusion_line_1mm');
		echo $this->Form->input('bottom_fusion_line_2mm');
		echo $this->Form->input('bottom_fusion_line_3mm');
		echo $this->Form->input('bottom_fusion_line_5mm');
		echo $this->Form->input('bottom_haz');
		echo $this->Form->input('bottom_base_metal');
		echo $this->Form->input('temp_below_no_restriction_heating_rate');
		echo $this->Form->input('soking_temp_controlled_heating_rate');
		echo $this->Form->input('soaking_temp');
		echo $this->Form->input('soaking_time');
		echo $this->Form->input('soaking_temp_controlled_cooling_rate');
		echo $this->Form->input('temp_below_cooling_rate_unrestricted');
		echo $this->Form->input('other_test');
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

		<li><?php echo $this->Html->link(__('List Subject Material Tests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
