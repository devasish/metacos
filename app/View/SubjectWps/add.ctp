<div class="subjectWps form">
<?php echo $this->Form->create('SubjectWp'); ?>
	<fieldset>
		<legend><?php echo __('Add Subject Wp'); ?></legend>
	<?php
		echo $this->Form->input('job_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('material_specification');
		echo $this->Form->input('sampleid');
		echo $this->Form->input('welding_position');
		echo $this->Form->input('welding_process');
		echo $this->Form->input('welding_config');
		echo $this->Form->input('pipe_diameter');
		echo $this->Form->input('plate_thickness');
		echo $this->Form->input('pipe_schedule');
		echo $this->Form->input('heat_no_pipe_plate');
		echo $this->Form->input('pipe_thickness');
		echo $this->Form->input('stud_size');
		echo $this->Form->input('electrode_size');
		echo $this->Form->input('wps_no');
		echo $this->Form->input('electrode_brand');
		echo $this->Form->input('pqr_no');
		echo $this->Form->input('welder_one_name');
		echo $this->Form->input('welder_one_icno');
		echo $this->Form->input('welder_one__tagno');
		echo $this->Form->input('welder_one_process');
		echo $this->Form->input('welder_two_name');
		echo $this->Form->input('welder_two_icno');
		echo $this->Form->input('welder_two_tagno');
		echo $this->Form->input('welder_two_process');
		echo $this->Form->input('test_code');
		echo $this->Form->input('radiography_gamma_ray');
		echo $this->Form->input('radiography_xray');
		echo $this->Form->input('dye_penetrant_test');
		echo $this->Form->input('fluorescent_dye_penetrant_test');
		echo $this->Form->input('magnetic_particle_inspection');
		echo $this->Form->input('ultrasonic_test');
		echo $this->Form->input('all_weld_tensile_test');
		echo $this->Form->input('transverse_tensile_test');
		echo $this->Form->input('hot_tensile_test');
		echo $this->Form->input('hardness_survey');
		echo $this->Form->input('macro_examination');
		echo $this->Form->input('nick_break_test');
		echo $this->Form->input('fracture_test');
		echo $this->Form->input('peel_test');
		echo $this->Form->input('diffusible_hydrogen_weld_metal');
		echo $this->Form->input('pull_out_test');
		echo $this->Form->input('corrosion_test_astm_g28');
		echo $this->Form->input('corrosion_test_astm_g48');
		echo $this->Form->input('corrosion_test_astm_ae');
		echo $this->Form->input('ferrite_count_astm_e562');
		echo $this->Form->input('ferrite_count_feritescope');
		echo $this->Form->input('ferrite_count_schaeffer_diagram');
		echo $this->Form->input('ferrite_count_delong_diagram');
		echo $this->Form->input('salt_spray_test');
		echo $this->Form->input('hydrogen_induced_cracking');
		echo $this->Form->input('sulphide_stress_cracking');
		echo $this->Form->input('positive_material_identification_spark');
		echo $this->Form->input('positive_material_identification_arc');
		echo $this->Form->input('desktop_chemical_analysis_spark');
		echo $this->Form->input('wet_analysis');
		echo $this->Form->input('base_metal');
		echo $this->Form->input('weld_metal');
		echo $this->Form->input('element_required_add');
		echo $this->Form->input('similar_material_lessthan_38_temp');
		echo $this->Form->input('similar_material_lessthan_38_weld_metal');
		echo $this->Form->input('similar_material_lessthan_38_fusion_line');
		echo $this->Form->input('similar_material_lessthan_38_fusion_line_1mm');
		echo $this->Form->input('similar_material_lessthan_38_fusion_line_2mm');
		echo $this->Form->input('similar_material_lessthan_38_fusion_line_3mm');
		echo $this->Form->input('similar_material_lessthan_38_fusion_line_5mm');
		echo $this->Form->input('similar_material_lessthan_38_haz');
		echo $this->Form->input('similar_material_lessthan_38_base_metal');
		echo $this->Form->input('similar_material_greaterthan_38_temp');
		echo $this->Form->input('similar_material_greaterthan_38_top_weld_metal');
		echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line');
		echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_1mm');
		echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_2mm');
		echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_3mm');
		echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_5mm');
		echo $this->Form->input('similar_material_greaterthan_38_top_haz');
		echo $this->Form->input('similar_material_greaterthan_38_top_base_metal');
		echo $this->Form->input('similar_material_greaterthan_38_bottom_weld_metal');
		echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line');
		echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_1mm');
		echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_2mm');
		echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_3mm');
		echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_5mm');
		echo $this->Form->input('similar_material_greaterthan_38_bottom_haz');
		echo $this->Form->input('similar_material_greaterthan_38_bottom_base_metal');
		echo $this->Form->input('saw_temp');
		echo $this->Form->input('saw_top_weld_metal');
		echo $this->Form->input('saw_top_fusion_line');
		echo $this->Form->input('saw_top_fusion_line_1mm');
		echo $this->Form->input('saw_top_fusion_line_2mm');
		echo $this->Form->input('saw_top_fusion_line_3mm');
		echo $this->Form->input('saw_top_fusion_line_5mm');
		echo $this->Form->input('saw_top_fusion_line_haz');
		echo $this->Form->input('saw_top_fusion_line_base_metal');
		echo $this->Form->input('saw_bottom_weld_metal');
		echo $this->Form->input('saw_bottom_fusion_line');
		echo $this->Form->input('saw_bottom_fusion_line_1mm');
		echo $this->Form->input('saw_bottom_fusion_line_2mm');
		echo $this->Form->input('saw_bottom_fusion_line_3mm');
		echo $this->Form->input('saw_bottom_fusion_line_5mm');
		echo $this->Form->input('saw_bottom_fusion_line_haz');
		echo $this->Form->input('saw_bottom_fusion_line_base_metal');
		echo $this->Form->input('dissimilar_materials_temp');
		echo $this->Form->input('metal1_weld_metal');
		echo $this->Form->input('metal1_fusion_line');
		echo $this->Form->input('metal1_fusion_line_1mm');
		echo $this->Form->input('metal1_fusion_line_2mm');
		echo $this->Form->input('metal1_fusion_line_3mm');
		echo $this->Form->input('metal1_fusion_line_5mm');
		echo $this->Form->input('metal1_fusion_line_haz');
		echo $this->Form->input('metal1_fusion_line_base_metal');
		echo $this->Form->input('metal2_weld_metal');
		echo $this->Form->input('metal2_fusion_line');
		echo $this->Form->input('metal2_fusion_line_1mm');
		echo $this->Form->input('metal2_fusion_line_2mm');
		echo $this->Form->input('metal2_fusion_line_3mm');
		echo $this->Form->input('metal2_fusion_line_5mm');
		echo $this->Form->input('metal2_fusion_line_haz');
		echo $this->Form->input('metal2_fusion_line_base_metal');
		echo $this->Form->input('temp_below_norestriction_heating_rate');
		echo $this->Form->input('soaking_temp_controlled_heating_rate');
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

		<li><?php echo $this->Html->link(__('List Subject Wps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
