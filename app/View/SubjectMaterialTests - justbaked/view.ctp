<div class="subjectMaterialTests view">
<h2><?php echo __('Subject Material Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subjectMaterialTest['Job']['id'], array('controller' => 'jobs', 'action' => 'view', $subjectMaterialTest['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subjectMaterialTest['User']['id'], array('controller' => 'users', 'action' => 'view', $subjectMaterialTest['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Specification'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['material_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Certificate No'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['certificate_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pipe Diameter'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['pipe_diameter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pipe Schedule'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['pipe_schedule']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pipe Thickness'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['pipe_thickness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Simple Dimension'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['simple_dimension']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sampleid'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['sampleid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manufacturer'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['manufacturer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plate Thickness'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['plate_thickness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heat No Pipe Plate'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['heat_no_pipe_plate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diameter Bar Stud'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['diameter_bar_stud']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Test Code'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['test_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dye Penetrant Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['dye_penetrant_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultrasonic Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['ultrasonic_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thickness Ganging Measurment'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['thickness_ganging_measurment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Magnetic Particle Inspection'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['magnetic_particle_inspection']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fluorescent Dye Penetrant Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['fluorescent_dye_penetrant_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coating Thickness Measurement'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['coating_thickness_measurement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Tensile Longitudinal Direction'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['full_tensile_longitudinal_direction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Tensile Transverse Direction'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['full_tensile_transverse_direction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hot Tensile Test Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['hot_tensile_test_base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Through Thickness Z Direction'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['through_thickness_z_direction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pull Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['pull_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensile Test Deformed Bar Grade'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['tensile_test_deformed_bar_grade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensile Test Full Size Bolt Nut'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['tensile_test_full_size_bolt_nut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shear Test Bolt'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['shear_test_bolt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proof Load Test Nut'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['proof_load_test_nut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wadge Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['wadge_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slip Factor Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['slip_factor_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitudinal Root Bend Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['longitudinal_root_bend_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitudinal Face Bend Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['longitudinal_face_bend_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bending Rebend Test Deform Bar'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['bending_rebend_test_deform_bar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitudinal Side Bend Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['longitudinal_side_bend_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hardness Survey Hvn'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['hardness_survey_hvn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hardness Survey Rockwell'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['hardness_survey_rockwell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hardness Survey Brinell'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['hardness_survey_brinell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fracture Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['fracture_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flattening Test Pipe Tube'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['flattening_test_pipe_tube']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flaring Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['flaring_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corrosion Test Astm G28'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['corrosion_test_astm_g28']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corrosion Test Astm G48'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['corrosion_test_astm_g48']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corrosion Test Astm Ae'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['corrosion_test_astm_ae']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salt Spary Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['salt_spary_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hydrogen Induced Cracking'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['hydrogen_induced_cracking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sulphide Stress Cracking'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['sulphide_stress_cracking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ferrite Count Astm E562'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['ferrite_count_astm_e562']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ferrite Count Feritescope'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['ferrite_count_feritescope']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ferrite Count Schaeffer Diagram'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['ferrite_count_schaeffer_diagram']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ferrite Count Delong Diagram'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['ferrite_count_delong_diagram']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metallography'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['metallography']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Infinite Focus Imaging'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['infinite_focus_imaging']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sme Edxs'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['sme_edxs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Situ Metallography'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['in_situ_metallography']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pmi Spark'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['pmi_spark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pmi Arc'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['pmi_arc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desktop Chemical Analysis Spark'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['desktop_chemical_analysis_spark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wet Analysis'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['wet_analysis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Element Required List'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['element_required_list']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Lessthan 38 Temp'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['similar_material_lessthan_38_temp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Graterthan 38 Temp'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['similar_material_graterthan_38_temp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charpy Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['Charpy_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fusion Line'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['fusion_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fusion Line 1mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['fusion_line_1mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fusion Line 2mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['fusion_line_2mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fusion Line 3mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['fusion_line_3mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fusion Line 5mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['fusion_line_5mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Haz'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['haz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charpy Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['Charpy_base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Top Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Top Fusion Line'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_fusion_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Top Fusion Line 1mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_fusion_line_1mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Top Fusion Line 2mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_fusion_line_2mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Top Fusion Line 3mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_fusion_line_3mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Top Fusion Line 5mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_fusion_line_5mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Top Haz'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_haz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Top Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Fusion Line'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_fusion_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Fusion Line 1mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_fusion_line_1mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Fusion Line 2mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_fusion_line_2mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Fusion Line 3mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_fusion_line_3mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Fusion Line 5mm'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_fusion_line_5mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Haz'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_haz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temp Below No Restriction Heating Rate'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['temp_below_no_restriction_heating_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Soking Temp Controlled Heating Rate'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['soking_temp_controlled_heating_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Soaking Temp'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['soaking_temp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Soaking Time'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['soaking_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Soaking Temp Controlled Cooling Rate'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['soaking_temp_controlled_cooling_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temp Below Cooling Rate Unrestricted'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['temp_below_cooling_rate_unrestricted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Test'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['other_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Remarks'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['special_remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Declaration Name'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['declaration_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Declaration Designation'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['declaration_designation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Control No'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['control_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ccjs Submission Date'); ?></dt>
		<dd>
			<?php echo h($subjectMaterialTest['SubjectMaterialTest']['ccjs_submission_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject Material Test'), array('action' => 'edit', $subjectMaterialTest['SubjectMaterialTest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subject Material Test'), array('action' => 'delete', $subjectMaterialTest['SubjectMaterialTest']['id']), array(), __('Are you sure you want to delete # %s?', $subjectMaterialTest['SubjectMaterialTest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Material Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Material Test'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
