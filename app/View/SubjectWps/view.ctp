<div class="subjectWps view">
<h2><?php echo __('Subject Wp'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subjectWp['Job']['id'], array('controller' => 'jobs', 'action' => 'view', $subjectWp['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subjectWp['User']['id'], array('controller' => 'users', 'action' => 'view', $subjectWp['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Specification'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['material_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sampleid'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['sampleid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welding Position'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['welding_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welding Process'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['welding_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welding Config'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['welding_config']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pipe Diameter'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['pipe_diameter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plate Thickness'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['plate_thickness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pipe Schedule'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['pipe_schedule']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heat No Pipe Plate'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['heat_no_pipe_plate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pipe Thickness'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['pipe_thickness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stud Size'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['stud_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Electrode Size'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['electrode_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wps No'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['wps_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Electrode Brand'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['electrode_brand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pqr No'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['pqr_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One Name'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['welder_one_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One Icno'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['welder_one_icno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One  Tagno'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['welder_one__tagno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One Process'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['welder_one_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Name'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['welder_two_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Icno'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['welder_two_icno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Tagno'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['welder_two_tagno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Process'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['welder_two_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Test Code'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['test_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Radiography Gamma Ray'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['radiography_gamma_ray']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Radiography Xray'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['radiography_xray']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dye Penetrant Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['dye_penetrant_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fluorescent Dye Penetrant Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['fluorescent_dye_penetrant_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Magnetic Particle Inspection'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['magnetic_particle_inspection']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultrasonic Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['ultrasonic_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('All Weld Tensile Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['all_weld_tensile_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transverse Tensile Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['transverse_tensile_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hot Tensile Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['hot_tensile_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hardness Survey'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['hardness_survey']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Macro Examination'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['macro_examination']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nick Break Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['nick_break_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fracture Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['fracture_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peel Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['peel_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diffusible Hydrogen Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['diffusible_hydrogen_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pull Out Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['pull_out_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corrosion Test Astm G28'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['corrosion_test_astm_g28']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corrosion Test Astm G48'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['corrosion_test_astm_g48']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corrosion Test Astm Ae'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['corrosion_test_astm_ae']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ferrite Count Astm E562'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['ferrite_count_astm_e562']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ferrite Count Feritescope'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['ferrite_count_feritescope']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ferrite Count Schaeffer Diagram'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['ferrite_count_schaeffer_diagram']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ferrite Count Delong Diagram'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['ferrite_count_delong_diagram']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salt Spray Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['salt_spray_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hydrogen Induced Cracking'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['hydrogen_induced_cracking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sulphide Stress Cracking'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['sulphide_stress_cracking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Positive Material Identification Spark'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['positive_material_identification_spark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Positive Material Identification Arc'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['positive_material_identification_arc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desktop Chemical Analysis Spark'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['desktop_chemical_analysis_spark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wet Analysis'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['wet_analysis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Element Required Add'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['element_required_add']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Lessthan 38 Temp'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_temp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Lessthan 38 Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Lessthan 38 Fusion Line'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_fusion_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Lessthan 38 Fusion Line 1mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_fusion_line_1mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Lessthan 38 Fusion Line 2mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_fusion_line_2mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Lessthan 38 Fusion Line 3mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_fusion_line_3mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Lessthan 38 Fusion Line 5mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_fusion_line_5mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Lessthan 38 Haz'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_haz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Lessthan 38 Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_lessthan_38_base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Temp'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_temp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Top Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Top Fusion Line'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_fusion_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Top Fusion Line 1mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_fusion_line_1mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Top Fusion Line 2mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_fusion_line_2mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Top Fusion Line 3mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_fusion_line_3mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Top Fusion Line 5mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_fusion_line_5mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Top Haz'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_haz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Top Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_top_base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Bottom Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Bottom Fusion Line'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_fusion_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Bottom Fusion Line 1mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_fusion_line_1mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Bottom Fusion Line 2mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_fusion_line_2mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Bottom Fusion Line 3mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_fusion_line_3mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Bottom Fusion Line 5mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_fusion_line_5mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Bottom Haz'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_haz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Material Greaterthan 38 Bottom Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['similar_material_greaterthan_38_bottom_base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Temp'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_temp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Top Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_top_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Top Fusion Line'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Top Fusion Line 1mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_1mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Top Fusion Line 2mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_2mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Top Fusion Line 3mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_3mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Top Fusion Line 5mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_5mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Top Fusion Line Haz'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_haz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Top Fusion Line Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_top_fusion_line_base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Bottom Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_bottom_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Bottom Fusion Line'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Bottom Fusion Line 1mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_1mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Bottom Fusion Line 2mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_2mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Bottom Fusion Line 3mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_3mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Bottom Fusion Line 5mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_5mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Bottom Fusion Line Haz'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_haz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saw Bottom Fusion Line Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['saw_bottom_fusion_line_base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dissimilar Materials Temp'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['dissimilar_materials_temp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal1 Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal1_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal1 Fusion Line'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal1_fusion_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal1 Fusion Line 1mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_1mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal1 Fusion Line 2mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_2mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal1 Fusion Line 3mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_3mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal1 Fusion Line 5mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_5mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal1 Fusion Line Haz'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_haz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal1 Fusion Line Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal1_fusion_line_base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal2 Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal2_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal2 Fusion Line'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal2_fusion_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal2 Fusion Line 1mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_1mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal2 Fusion Line 2mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_2mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal2 Fusion Line 3mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_3mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal2 Fusion Line 5mm'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_5mm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal2 Fusion Line Haz'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_haz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metal2 Fusion Line Base Metal'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['metal2_fusion_line_base_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temp Below Norestriction Heating Rate'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['temp_below_norestriction_heating_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Soaking Temp Controlled Heating Rate'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['soaking_temp_controlled_heating_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Soaking Temp'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['soaking_temp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Soaking Time'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['soaking_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Soaking Temp Controlled Cooling Rate'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['soaking_temp_controlled_cooling_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temp Below Cooling Rate Unrestricted'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['temp_below_cooling_rate_unrestricted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Test'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['other_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Remarks'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['special_remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Declaration Name'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['declaration_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Declaration Designation'); ?></dt>
		<dd>
			<?php echo h($subjectWp['SubjectWp']['declaration_designation']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject Wp'), array('action' => 'edit', $subjectWp['SubjectWp']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subject Wp'), array('action' => 'delete', $subjectWp['SubjectWp']['id']), array(), __('Are you sure you want to delete # %s?', $subjectWp['SubjectWp']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Wps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Wp'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
