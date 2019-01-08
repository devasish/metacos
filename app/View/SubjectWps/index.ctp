<div class="subjectWps index">
	<h2><?php echo __('Subject Wps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('sampleid'); ?></th>
			<th><?php echo $this->Paginator->sort('welding_position'); ?></th>
			<th><?php echo $this->Paginator->sort('welding_process'); ?></th>
			<th><?php echo $this->Paginator->sort('welding_config'); ?></th>
			<th><?php echo $this->Paginator->sort('pipe_diameter'); ?></th>
			<th><?php echo $this->Paginator->sort('plate_thickness'); ?></th>
			<th><?php echo $this->Paginator->sort('pipe_schedule'); ?></th>
			<th><?php echo $this->Paginator->sort('heat_no_pipe_plate'); ?></th>
			<th><?php echo $this->Paginator->sort('pipe_thickness'); ?></th>
			<th><?php echo $this->Paginator->sort('stud_size'); ?></th>
			<th><?php echo $this->Paginator->sort('electrode_size'); ?></th>
			<th><?php echo $this->Paginator->sort('wps_no'); ?></th>
			<th><?php echo $this->Paginator->sort('electrode_brand'); ?></th>
			<th><?php echo $this->Paginator->sort('pqr_no'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one_name'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one_icno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one__tagno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one_process'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_name'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_icno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_tagno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_process'); ?></th>
			<th><?php echo $this->Paginator->sort('test_code'); ?></th>
			<th><?php echo $this->Paginator->sort('radiography_gamma_ray'); ?></th>
			<th><?php echo $this->Paginator->sort('radiography_xray'); ?></th>
			<th><?php echo $this->Paginator->sort('dye_penetrant_test'); ?></th>
			<th><?php echo $this->Paginator->sort('fluorescent_dye_penetrant_test'); ?></th>
			<th><?php echo $this->Paginator->sort('magnetic_particle_inspection'); ?></th>
			<th><?php echo $this->Paginator->sort('ultrasonic_test'); ?></th>
			<th><?php echo $this->Paginator->sort('all_weld_tensile_test'); ?></th>
			<th><?php echo $this->Paginator->sort('transverse_tensile_test'); ?></th>
			<th><?php echo $this->Paginator->sort('hot_tensile_test'); ?></th>
			<th><?php echo $this->Paginator->sort('hardness_survey'); ?></th>
			<th><?php echo $this->Paginator->sort('macro_examination'); ?></th>
			<th><?php echo $this->Paginator->sort('nick_break_test'); ?></th>
			<th><?php echo $this->Paginator->sort('fracture_test'); ?></th>
			<th><?php echo $this->Paginator->sort('peel_test'); ?></th>
			<th><?php echo $this->Paginator->sort('diffusible_hydrogen_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('pull_out_test'); ?></th>
			<th><?php echo $this->Paginator->sort('corrosion_test_astm_g28'); ?></th>
			<th><?php echo $this->Paginator->sort('corrosion_test_astm_g48'); ?></th>
			<th><?php echo $this->Paginator->sort('corrosion_test_astm_ae'); ?></th>
			<th><?php echo $this->Paginator->sort('ferrite_count_astm_e562'); ?></th>
			<th><?php echo $this->Paginator->sort('ferrite_count_feritescope'); ?></th>
			<th><?php echo $this->Paginator->sort('ferrite_count_schaeffer_diagram'); ?></th>
			<th><?php echo $this->Paginator->sort('ferrite_count_delong_diagram'); ?></th>
			<th><?php echo $this->Paginator->sort('salt_spray_test'); ?></th>
			<th><?php echo $this->Paginator->sort('hydrogen_induced_cracking'); ?></th>
			<th><?php echo $this->Paginator->sort('sulphide_stress_cracking'); ?></th>
			<th><?php echo $this->Paginator->sort('positive_material_identification_spark'); ?></th>
			<th><?php echo $this->Paginator->sort('positive_material_identification_arc'); ?></th>
			<th><?php echo $this->Paginator->sort('desktop_chemical_analysis_spark'); ?></th>
			<th><?php echo $this->Paginator->sort('wet_analysis'); ?></th>
			<th><?php echo $this->Paginator->sort('base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('element_required_add'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_lessthan_38_temp'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_lessthan_38_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_lessthan_38_fusion_line'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_lessthan_38_fusion_line_1mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_lessthan_38_fusion_line_2mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_lessthan_38_fusion_line_3mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_lessthan_38_fusion_line_5mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_lessthan_38_haz'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_lessthan_38_base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_temp'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_top_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_top_fusion_line'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_top_fusion_line_1mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_top_fusion_line_2mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_top_fusion_line_3mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_top_fusion_line_5mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_top_haz'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_top_base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_bottom_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_bottom_fusion_line'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_bottom_fusion_line_1mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_bottom_fusion_line_2mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_bottom_fusion_line_3mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_bottom_fusion_line_5mm'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_bottom_haz'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_greaterthan_38_bottom_base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_temp'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_top_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_top_fusion_line'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_top_fusion_line_1mm'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_top_fusion_line_2mm'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_top_fusion_line_3mm'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_top_fusion_line_5mm'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_top_fusion_line_haz'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_top_fusion_line_base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_bottom_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_bottom_fusion_line'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_bottom_fusion_line_1mm'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_bottom_fusion_line_2mm'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_bottom_fusion_line_3mm'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_bottom_fusion_line_5mm'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_bottom_fusion_line_haz'); ?></th>
			<th><?php echo $this->Paginator->sort('saw_bottom_fusion_line_base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('dissimilar_materials_temp'); ?></th>
			<th><?php echo $this->Paginator->sort('metal1_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('metal1_fusion_line'); ?></th>
			<th><?php echo $this->Paginator->sort('metal1_fusion_line_1mm'); ?></th>
			<th><?php echo $this->Paginator->sort('metal1_fusion_line_2mm'); ?></th>
			<th><?php echo $this->Paginator->sort('metal1_fusion_line_3mm'); ?></th>
			<th><?php echo $this->Paginator->sort('metal1_fusion_line_5mm'); ?></th>
			<th><?php echo $this->Paginator->sort('metal1_fusion_line_haz'); ?></th>
			<th><?php echo $this->Paginator->sort('metal1_fusion_line_base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('metal2_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('metal2_fusion_line'); ?></th>
			<th><?php echo $this->Paginator->sort('metal2_fusion_line_1mm'); ?></th>
			<th><?php echo $this->Paginator->sort('metal2_fusion_line_2mm'); ?></th>
			<th><?php echo $this->Paginator->sort('metal2_fusion_line_3mm'); ?></th>
			<th><?php echo $this->Paginator->sort('metal2_fusion_line_5mm'); ?></th>
			<th><?php echo $this->Paginator->sort('metal2_fusion_line_haz'); ?></th>
			<th><?php echo $this->Paginator->sort('metal2_fusion_line_base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('temp_below_norestriction_heating_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('soaking_temp_controlled_heating_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('soaking_temp'); ?></th>
			<th><?php echo $this->Paginator->sort('soaking_time'); ?></th>
			<th><?php echo $this->Paginator->sort('soaking_temp_controlled_cooling_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('temp_below_cooling_rate_unrestricted'); ?></th>
			<th><?php echo $this->Paginator->sort('other_test'); ?></th>
			<th><?php echo $this->Paginator->sort('special_remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('declaration_name'); ?></th>
			<th><?php echo $this->Paginator->sort('declaration_designation'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subjectWps as $subjectWp): ?>
	<tr>
		<td><?php echo h($subjectWp['SubjectWp']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subjectWp['Job']['id'], array('controller' => 'jobs', 'action' => 'view', $subjectWp['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subjectWp['User']['id'], array('controller' => 'users', 'action' => 'view', $subjectWp['User']['id'])); ?>
		</td>
		<td><?php echo h($subjectWp['SubjectWp']['material_specification']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['sampleid']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['welding_position']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['welding_process']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['welding_config']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['pipe_diameter']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['plate_thickness']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['pipe_schedule']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['heat_no_pipe_plate']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['pipe_thickness']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['stud_size']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['electrode_size']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['wps_no']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['electrode_brand']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['pqr_no']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['welder_one_name']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['welder_one_icno']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['welder_one__tagno']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['welder_one_process']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['welder_two_name']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['welder_two_icno']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['welder_two_tagno']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['welder_two_process']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['test_code']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['radiography_gamma_ray']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['radiography_xray']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['dye_penetrant_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['fluorescent_dye_penetrant_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['magnetic_particle_inspection']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['ultrasonic_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['all_weld_tensile_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['transverse_tensile_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['hot_tensile_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['hardness_survey']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['macro_examination']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['nick_break_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['fracture_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['peel_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['diffusible_hydrogen_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['pull_out_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['corrosion_test_astm_g28']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['corrosion_test_astm_g48']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['corrosion_test_astm_ae']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['ferrite_count_astm_e562']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['ferrite_count_feritescope']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['ferrite_count_schaeffer_diagram']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['ferrite_count_delong_diagram']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['salt_spray_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['hydrogen_induced_cracking']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['sulphide_stress_cracking']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['positive_material_identification_spark']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['positive_material_identification_arc']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['desktop_chemical_analysis_spark']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['wet_analysis']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['element_required_add']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_temp']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_fusion_line']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_fusion_line_1mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_fusion_line_2mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_fusion_line_3mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_fusion_line_5mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_haz']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_temp']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_fusion_line']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_fusion_line_1mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_fusion_line_2mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_fusion_line_3mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_fusion_line_5mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_haz']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_fusion_line']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_fusion_line_1mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_fusion_line_2mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_fusion_line_3mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_fusion_line_5mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_haz']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_temp']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_top_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_1mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_2mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_3mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_5mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_haz']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_bottom_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_1mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_2mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_3mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_5mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_haz']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['dissimilar_materials_temp']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal1_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal1_fusion_line']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_1mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_2mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_3mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_5mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_haz']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal2_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal2_fusion_line']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_1mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_2mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_3mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_5mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_haz']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['temp_below_norestriction_heating_rate']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['soaking_temp_controlled_heating_rate']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['soaking_temp']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['soaking_time']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['soaking_temp_controlled_cooling_rate']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['temp_below_cooling_rate_unrestricted']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['other_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['special_remarks']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['declaration_name']); ?>&nbsp;</td>
		<td><?php echo h($subjectWp['SubjectWp']['declaration_designation']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subjectWp['SubjectWp']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subjectWp['SubjectWp']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subjectWp['SubjectWp']['id']), array(), __('Are you sure you want to delete # %s?', $subjectWp['SubjectWp']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subject Wp'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
