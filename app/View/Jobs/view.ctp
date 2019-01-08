<div class="jobs view">
<h2><?php echo __('Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode'); ?></dt>
		<dd>
			<?php echo h($job['Job']['barcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($job['User']['id'], array('controller' => 'users', 'action' => 'view', $job['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo h($job['Job']['client']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($job['Job']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Person'); ?></dt>
		<dd>
			<?php echo h($job['Job']['contact_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($job['Job']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($job['Job']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($job['Job']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report Client'); ?></dt>
		<dd>
			<?php echo h($job['Job']['report_client']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report Address'); ?></dt>
		<dd>
			<?php echo h($job['Job']['report_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report Att To'); ?></dt>
		<dd>
			<?php echo h($job['Job']['report_att_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report Phone'); ?></dt>
		<dd>
			<?php echo h($job['Job']['report_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report Position'); ?></dt>
		<dd>
			<?php echo h($job['Job']['report_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report Fax'); ?></dt>
		<dd>
			<?php echo h($job['Job']['report_fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report Email'); ?></dt>
		<dd>
			<?php echo h($job['Job']['report_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report Sample Arrived Date'); ?></dt>
		<dd>
			<?php echo h($job['Job']['report_sample_arrived_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Client'); ?></dt>
		<dd>
			<?php echo h($job['Job']['invoice_client']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Address'); ?></dt>
		<dd>
			<?php echo h($job['Job']['invoice_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Contact Person'); ?></dt>
		<dd>
			<?php echo h($job['Job']['invoice_contact_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Phone'); ?></dt>
		<dd>
			<?php echo h($job['Job']['invoice_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Email'); ?></dt>
		<dd>
			<?php echo h($job['Job']['invoice_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Fax'); ?></dt>
		<dd>
			<?php echo h($job['Job']['invoice_fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Has Subject Material Test'); ?></dt>
		<dd>
			<?php echo h($job['Job']['has_subject_material_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Has Subject Production Test'); ?></dt>
		<dd>
			<?php echo h($job['Job']['has_subject_production_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Has Subject Wps'); ?></dt>
		<dd>
			<?php echo h($job['Job']['has_subject_wps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Has Subject Wqt'); ?></dt>
		<dd>
			<?php echo h($job['Job']['has_subject_wqt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($job['Job']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($job['Job']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($job['Job']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job'), array('action' => 'edit', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job'), array('action' => 'delete', $job['Job']['id']), array(), __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Material Tests'), array('controller' => 'subject_material_tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Material Test'), array('controller' => 'subject_material_tests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Production Tests'), array('controller' => 'subject_production_tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Production Test'), array('controller' => 'subject_production_tests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Wps'), array('controller' => 'subject_wps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Wp'), array('controller' => 'subject_wps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Wqts'), array('controller' => 'subject_wqts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Wqt'), array('controller' => 'subject_wqts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Subject Material Tests'); ?></h3>
	<?php if (!empty($job['SubjectMaterialTest'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Material Specification'); ?></th>
		<th><?php echo __('Certificate No'); ?></th>
		<th><?php echo __('Pipe Diameter'); ?></th>
		<th><?php echo __('Pipe Schedule'); ?></th>
		<th><?php echo __('Pipe Thickness'); ?></th>
		<th><?php echo __('Simple Dimension'); ?></th>
		<th><?php echo __('Sampleid'); ?></th>
		<th><?php echo __('Manufacturer'); ?></th>
		<th><?php echo __('Plate Thickness'); ?></th>
		<th><?php echo __('Heat No Pipe Plate'); ?></th>
		<th><?php echo __('Diameter Bar Stud'); ?></th>
		<th><?php echo __('Test Code'); ?></th>
		<th><?php echo __('Dye Penetrant Test'); ?></th>
		<th><?php echo __('Ultrasonic Test'); ?></th>
		<th><?php echo __('Thickness Ganging Measurment'); ?></th>
		<th><?php echo __('Magnetic Particle Inspection'); ?></th>
		<th><?php echo __('Fluorescent Dye Penetrant Test'); ?></th>
		<th><?php echo __('Coating Thickness Measurement'); ?></th>
		<th><?php echo __('Full Tensile Longitudinal Direction'); ?></th>
		<th><?php echo __('Full Tensile Transverse Direction'); ?></th>
		<th><?php echo __('Hot Tensile Test Base Metal'); ?></th>
		<th><?php echo __('Through Thickness Z Direction'); ?></th>
		<th><?php echo __('Pull Test'); ?></th>
		<th><?php echo __('Tensile Test Deformed Bar Grade'); ?></th>
		<th><?php echo __('Tensile Test Full Size Bolt Nut'); ?></th>
		<th><?php echo __('Shear Test Bolt'); ?></th>
		<th><?php echo __('Proof Load Test Nut'); ?></th>
		<th><?php echo __('Wadge Test'); ?></th>
		<th><?php echo __('Slip Factor Test'); ?></th>
		<th><?php echo __('Longitudinal Root Bend Test'); ?></th>
		<th><?php echo __('Longitudinal Face Bend Test'); ?></th>
		<th><?php echo __('Bending Rebend Test Deform Bar'); ?></th>
		<th><?php echo __('Longitudinal Side Bend Test'); ?></th>
		<th><?php echo __('Hardness Survey Hvn'); ?></th>
		<th><?php echo __('Hardness Survey Rockwell'); ?></th>
		<th><?php echo __('Hardness Survey Brinell'); ?></th>
		<th><?php echo __('Fracture Test'); ?></th>
		<th><?php echo __('Flattening Test Pipe Tube'); ?></th>
		<th><?php echo __('Flaring Test'); ?></th>
		<th><?php echo __('Corrosion Test Astm G28'); ?></th>
		<th><?php echo __('Corrosion Test Astm G48'); ?></th>
		<th><?php echo __('Corrosion Test Astm Ae'); ?></th>
		<th><?php echo __('Salt Spary Test'); ?></th>
		<th><?php echo __('Hydrogen Induced Cracking'); ?></th>
		<th><?php echo __('Sulphide Stress Cracking'); ?></th>
		<th><?php echo __('Ferrite Count Astm E562'); ?></th>
		<th><?php echo __('Ferrite Count Feritescope'); ?></th>
		<th><?php echo __('Ferrite Count Schaeffer Diagram'); ?></th>
		<th><?php echo __('Ferrite Count Delong Diagram'); ?></th>
		<th><?php echo __('Metallography'); ?></th>
		<th><?php echo __('Infinite Focus Imaging'); ?></th>
		<th><?php echo __('Sme Edxs'); ?></th>
		<th><?php echo __('In Situ Metallography'); ?></th>
		<th><?php echo __('Pmi Spark'); ?></th>
		<th><?php echo __('Pmi Arc'); ?></th>
		<th><?php echo __('Desktop Chemical Analysis Spark'); ?></th>
		<th><?php echo __('Wet Analysis'); ?></th>
		<th><?php echo __('Base Metal'); ?></th>
		<th><?php echo __('Weld Metal'); ?></th>
		<th><?php echo __('Element Required List'); ?></th>
		<th><?php echo __('Similar Material Lessthan 38 Temp'); ?></th>
		<th><?php echo __('Similar Material Graterthan 38 Temp'); ?></th>
		<th><?php echo __('Charpy Weld Metal'); ?></th>
		<th><?php echo __('Fusion Line'); ?></th>
		<th><?php echo __('Fusion Line 1mm'); ?></th>
		<th><?php echo __('Fusion Line 2mm'); ?></th>
		<th><?php echo __('Fusion Line 3mm'); ?></th>
		<th><?php echo __('Fusion Line 5mm'); ?></th>
		<th><?php echo __('Haz'); ?></th>
		<th><?php echo __('Charpy Base Metal'); ?></th>
		<th><?php echo __('Top Weld Metal'); ?></th>
		<th><?php echo __('Top Fusion Line'); ?></th>
		<th><?php echo __('Top Fusion Line 1mm'); ?></th>
		<th><?php echo __('Top Fusion Line 2mm'); ?></th>
		<th><?php echo __('Top Fusion Line 3mm'); ?></th>
		<th><?php echo __('Top Fusion Line 5mm'); ?></th>
		<th><?php echo __('Top Haz'); ?></th>
		<th><?php echo __('Top Base Metal'); ?></th>
		<th><?php echo __('Bottom Weld Metal'); ?></th>
		<th><?php echo __('Bottom Fusion Line'); ?></th>
		<th><?php echo __('Bottom Fusion Line 1mm'); ?></th>
		<th><?php echo __('Bottom Fusion Line 2mm'); ?></th>
		<th><?php echo __('Bottom Fusion Line 3mm'); ?></th>
		<th><?php echo __('Bottom Fusion Line 5mm'); ?></th>
		<th><?php echo __('Bottom Haz'); ?></th>
		<th><?php echo __('Bottom Base Metal'); ?></th>
		<th><?php echo __('Temp Below No Restriction Heating Rate'); ?></th>
		<th><?php echo __('Soking Temp Controlled Heating Rate'); ?></th>
		<th><?php echo __('Soaking Temp'); ?></th>
		<th><?php echo __('Soaking Time'); ?></th>
		<th><?php echo __('Soaking Temp Controlled Cooling Rate'); ?></th>
		<th><?php echo __('Temp Below Cooling Rate Unrestricted'); ?></th>
		<th><?php echo __('Other Test'); ?></th>
		<th><?php echo __('Special Remarks'); ?></th>
		<th><?php echo __('Declaration Name'); ?></th>
		<th><?php echo __('Declaration Designation'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['SubjectMaterialTest'] as $subjectMaterialTest): ?>
		<tr>
			<td><?php echo $subjectMaterialTest['id']; ?></td>
			<td><?php echo $subjectMaterialTest['job_id']; ?></td>
			<td><?php echo $subjectMaterialTest['user_id']; ?></td>
			<td><?php echo $subjectMaterialTest['material_specification']; ?></td>
			<td><?php echo $subjectMaterialTest['certificate_no']; ?></td>
			<td><?php echo $subjectMaterialTest['pipe_diameter']; ?></td>
			<td><?php echo $subjectMaterialTest['pipe_schedule']; ?></td>
			<td><?php echo $subjectMaterialTest['pipe_thickness']; ?></td>
			<td><?php echo $subjectMaterialTest['simple_dimension']; ?></td>
			<td><?php echo $subjectMaterialTest['sampleid']; ?></td>
			<td><?php echo $subjectMaterialTest['manufacturer']; ?></td>
			<td><?php echo $subjectMaterialTest['plate_thickness']; ?></td>
			<td><?php echo $subjectMaterialTest['heat_no_pipe_plate']; ?></td>
			<td><?php echo $subjectMaterialTest['diameter_bar_stud']; ?></td>
			<td><?php echo $subjectMaterialTest['test_code']; ?></td>
			<td><?php echo $subjectMaterialTest['dye_penetrant_test']; ?></td>
			<td><?php echo $subjectMaterialTest['ultrasonic_test']; ?></td>
			<td><?php echo $subjectMaterialTest['thickness_ganging_measurment']; ?></td>
			<td><?php echo $subjectMaterialTest['magnetic_particle_inspection']; ?></td>
			<td><?php echo $subjectMaterialTest['fluorescent_dye_penetrant_test']; ?></td>
			<td><?php echo $subjectMaterialTest['coating_thickness_measurement']; ?></td>
			<td><?php echo $subjectMaterialTest['full_tensile_longitudinal_direction']; ?></td>
			<td><?php echo $subjectMaterialTest['full_tensile_transverse_direction']; ?></td>
			<td><?php echo $subjectMaterialTest['hot_tensile_test_base_metal']; ?></td>
			<td><?php echo $subjectMaterialTest['through_thickness_z_direction']; ?></td>
			<td><?php echo $subjectMaterialTest['pull_test']; ?></td>
			<td><?php echo $subjectMaterialTest['tensile_test_deformed_bar_grade']; ?></td>
			<td><?php echo $subjectMaterialTest['tensile_test_full_size_bolt_nut']; ?></td>
			<td><?php echo $subjectMaterialTest['shear_test_bolt']; ?></td>
			<td><?php echo $subjectMaterialTest['proof_load_test_nut']; ?></td>
			<td><?php echo $subjectMaterialTest['wadge_test']; ?></td>
			<td><?php echo $subjectMaterialTest['slip_factor_test']; ?></td>
			<td><?php echo $subjectMaterialTest['longitudinal_root_bend_test']; ?></td>
			<td><?php echo $subjectMaterialTest['longitudinal_face_bend_test']; ?></td>
			<td><?php echo $subjectMaterialTest['bending_rebend_test_deform_bar']; ?></td>
			<td><?php echo $subjectMaterialTest['longitudinal_side_bend_test']; ?></td>
			<td><?php echo $subjectMaterialTest['hardness_survey_hvn']; ?></td>
			<td><?php echo $subjectMaterialTest['hardness_survey_rockwell']; ?></td>
			<td><?php echo $subjectMaterialTest['hardness_survey_brinell']; ?></td>
			<td><?php echo $subjectMaterialTest['fracture_test']; ?></td>
			<td><?php echo $subjectMaterialTest['flattening_test_pipe_tube']; ?></td>
			<td><?php echo $subjectMaterialTest['flaring_test']; ?></td>
			<td><?php echo $subjectMaterialTest['corrosion_test_astm_g28']; ?></td>
			<td><?php echo $subjectMaterialTest['corrosion_test_astm_g48']; ?></td>
			<td><?php echo $subjectMaterialTest['corrosion_test_astm_ae']; ?></td>
			<td><?php echo $subjectMaterialTest['salt_spary_test']; ?></td>
			<td><?php echo $subjectMaterialTest['hydrogen_induced_cracking']; ?></td>
			<td><?php echo $subjectMaterialTest['sulphide_stress_cracking']; ?></td>
			<td><?php echo $subjectMaterialTest['ferrite_count_astm_e562']; ?></td>
			<td><?php echo $subjectMaterialTest['ferrite_count_feritescope']; ?></td>
			<td><?php echo $subjectMaterialTest['ferrite_count_schaeffer_diagram']; ?></td>
			<td><?php echo $subjectMaterialTest['ferrite_count_delong_diagram']; ?></td>
			<td><?php echo $subjectMaterialTest['metallography']; ?></td>
			<td><?php echo $subjectMaterialTest['infinite_focus_imaging']; ?></td>
			<td><?php echo $subjectMaterialTest['sme_edxs']; ?></td>
			<td><?php echo $subjectMaterialTest['in_situ_metallography']; ?></td>
			<td><?php echo $subjectMaterialTest['pmi_spark']; ?></td>
			<td><?php echo $subjectMaterialTest['pmi_arc']; ?></td>
			<td><?php echo $subjectMaterialTest['desktop_chemical_analysis_spark']; ?></td>
			<td><?php echo $subjectMaterialTest['wet_analysis']; ?></td>
			<td><?php echo $subjectMaterialTest['base_metal']; ?></td>
			<td><?php echo $subjectMaterialTest['weld_metal']; ?></td>
			<td><?php echo $subjectMaterialTest['element_required_list']; ?></td>
			<td><?php echo $subjectMaterialTest['similar_material_lessthan_38_temp']; ?></td>
			<td><?php echo $subjectMaterialTest['similar_material_graterthan_38_temp']; ?></td>
			<td><?php echo $subjectMaterialTest['Charpy_weld_metal']; ?></td>
			<td><?php echo $subjectMaterialTest['fusion_line']; ?></td>
			<td><?php echo $subjectMaterialTest['fusion_line_1mm']; ?></td>
			<td><?php echo $subjectMaterialTest['fusion_line_2mm']; ?></td>
			<td><?php echo $subjectMaterialTest['fusion_line_3mm']; ?></td>
			<td><?php echo $subjectMaterialTest['fusion_line_5mm']; ?></td>
			<td><?php echo $subjectMaterialTest['haz']; ?></td>
			<td><?php echo $subjectMaterialTest['Charpy_base_metal']; ?></td>
			<td><?php echo $subjectMaterialTest['top_weld_metal']; ?></td>
			<td><?php echo $subjectMaterialTest['top_fusion_line']; ?></td>
			<td><?php echo $subjectMaterialTest['top_fusion_line_1mm']; ?></td>
			<td><?php echo $subjectMaterialTest['top_fusion_line_2mm']; ?></td>
			<td><?php echo $subjectMaterialTest['top_fusion_line_3mm']; ?></td>
			<td><?php echo $subjectMaterialTest['top_fusion_line_5mm']; ?></td>
			<td><?php echo $subjectMaterialTest['top_haz']; ?></td>
			<td><?php echo $subjectMaterialTest['top_base_metal']; ?></td>
			<td><?php echo $subjectMaterialTest['bottom_weld_metal']; ?></td>
			<td><?php echo $subjectMaterialTest['bottom_fusion_line']; ?></td>
			<td><?php echo $subjectMaterialTest['bottom_fusion_line_1mm']; ?></td>
			<td><?php echo $subjectMaterialTest['bottom_fusion_line_2mm']; ?></td>
			<td><?php echo $subjectMaterialTest['bottom_fusion_line_3mm']; ?></td>
			<td><?php echo $subjectMaterialTest['bottom_fusion_line_5mm']; ?></td>
			<td><?php echo $subjectMaterialTest['bottom_haz']; ?></td>
			<td><?php echo $subjectMaterialTest['bottom_base_metal']; ?></td>
			<td><?php echo $subjectMaterialTest['temp_below_no_restriction_heating_rate']; ?></td>
			<td><?php echo $subjectMaterialTest['soking_temp_controlled_heating_rate']; ?></td>
			<td><?php echo $subjectMaterialTest['soaking_temp']; ?></td>
			<td><?php echo $subjectMaterialTest['soaking_time']; ?></td>
			<td><?php echo $subjectMaterialTest['soaking_temp_controlled_cooling_rate']; ?></td>
			<td><?php echo $subjectMaterialTest['temp_below_cooling_rate_unrestricted']; ?></td>
			<td><?php echo $subjectMaterialTest['other_test']; ?></td>
			<td><?php echo $subjectMaterialTest['special_remarks']; ?></td>
			<td><?php echo $subjectMaterialTest['declaration_name']; ?></td>
			<td><?php echo $subjectMaterialTest['declaration_designation']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subject_material_tests', 'action' => 'view', $subjectMaterialTest['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subject_material_tests', 'action' => 'edit', $subjectMaterialTest['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subject_material_tests', 'action' => 'delete', $subjectMaterialTest['id']), array(), __('Are you sure you want to delete # %s?', $subjectMaterialTest['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject Material Test'), array('controller' => 'subject_material_tests', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subject Production Tests'); ?></h3>
	<?php if (!empty($job['SubjectProductionTest'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Material Specification'); ?></th>
		<th><?php echo __('Sampleid'); ?></th>
		<th><?php echo __('Welding Position'); ?></th>
		<th><?php echo __('Heat No'); ?></th>
		<th><?php echo __('Job No'); ?></th>
		<th><?php echo __('Plate Thickness'); ?></th>
		<th><?php echo __('Welding Config'); ?></th>
		<th><?php echo __('Welding Process'); ?></th>
		<th><?php echo __('Serial No'); ?></th>
		<th><?php echo __('Welder One Name'); ?></th>
		<th><?php echo __('Welder One Icno'); ?></th>
		<th><?php echo __('Welder One Tagno'); ?></th>
		<th><?php echo __('Welder One Process'); ?></th>
		<th><?php echo __('Welder Two Name'); ?></th>
		<th><?php echo __('Welder Two Icno'); ?></th>
		<th><?php echo __('Welder Two Tagno'); ?></th>
		<th><?php echo __('Welder Two Process'); ?></th>
		<th><?php echo __('Test Code One'); ?></th>
		<th><?php echo __('Test Code Two'); ?></th>
		<th><?php echo __('Transverse Tensile Test Welding'); ?></th>
		<th><?php echo __('Hot Tensile Test Weld Metal'); ?></th>
		<th><?php echo __('Transverse Side Bend Test'); ?></th>
		<th><?php echo __('Charpy Impact Test Weld Metal'); ?></th>
		<th><?php echo __('Macro Examination'); ?></th>
		<th><?php echo __('Weld Tensile Test'); ?></th>
		<th><?php echo __('Hardness Survey'); ?></th>
		<th><?php echo __('Temp Below Which No Restriction On Heating Rate'); ?></th>
		<th><?php echo __('Soaking Temp Controlled Heating Rate'); ?></th>
		<th><?php echo __('Soaking Temp'); ?></th>
		<th><?php echo __('Soaking Time'); ?></th>
		<th><?php echo __('Temp Below Which Cooling Rate Is Unrestricted'); ?></th>
		<th><?php echo __('Controlled Cooling Rate'); ?></th>
		<th><?php echo __('Declaration Name'); ?></th>
		<th><?php echo __('Declaration Designation'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['SubjectProductionTest'] as $subjectProductionTest): ?>
		<tr>
			<td><?php echo $subjectProductionTest['id']; ?></td>
			<td><?php echo $subjectProductionTest['job_id']; ?></td>
			<td><?php echo $subjectProductionTest['user_id']; ?></td>
			<td><?php echo $subjectProductionTest['material_specification']; ?></td>
			<td><?php echo $subjectProductionTest['sampleid']; ?></td>
			<td><?php echo $subjectProductionTest['welding_position']; ?></td>
			<td><?php echo $subjectProductionTest['heat_no']; ?></td>
			<td><?php echo $subjectProductionTest['job_no']; ?></td>
			<td><?php echo $subjectProductionTest['plate_thickness']; ?></td>
			<td><?php echo $subjectProductionTest['welding_config']; ?></td>
			<td><?php echo $subjectProductionTest['welding_process']; ?></td>
			<td><?php echo $subjectProductionTest['serial_no']; ?></td>
			<td><?php echo $subjectProductionTest['welder_one_name']; ?></td>
			<td><?php echo $subjectProductionTest['welder_one_icno']; ?></td>
			<td><?php echo $subjectProductionTest['welder_one_tagno']; ?></td>
			<td><?php echo $subjectProductionTest['welder_one_process']; ?></td>
			<td><?php echo $subjectProductionTest['welder_two_name']; ?></td>
			<td><?php echo $subjectProductionTest['welder_two_icno']; ?></td>
			<td><?php echo $subjectProductionTest['welder_two_tagno']; ?></td>
			<td><?php echo $subjectProductionTest['welder_two_process']; ?></td>
			<td><?php echo $subjectProductionTest['test_code_one']; ?></td>
			<td><?php echo $subjectProductionTest['test_code_two']; ?></td>
			<td><?php echo $subjectProductionTest['transverse_tensile_test_welding']; ?></td>
			<td><?php echo $subjectProductionTest['hot_tensile_test_weld_metal']; ?></td>
			<td><?php echo $subjectProductionTest['transverse_side_bend_test']; ?></td>
			<td><?php echo $subjectProductionTest['charpy_impact_test_weld_metal']; ?></td>
			<td><?php echo $subjectProductionTest['macro_examination']; ?></td>
			<td><?php echo $subjectProductionTest['weld_tensile_test']; ?></td>
			<td><?php echo $subjectProductionTest['hardness_survey']; ?></td>
			<td><?php echo $subjectProductionTest['temp_below_which_no_restriction_on_heating_rate']; ?></td>
			<td><?php echo $subjectProductionTest['soaking_temp_controlled_heating_rate']; ?></td>
			<td><?php echo $subjectProductionTest['soaking_temp']; ?></td>
			<td><?php echo $subjectProductionTest['soaking_time']; ?></td>
			<td><?php echo $subjectProductionTest['temp_below_which_cooling_rate_is_unrestricted']; ?></td>
			<td><?php echo $subjectProductionTest['controlled_cooling_rate']; ?></td>
			<td><?php echo $subjectProductionTest['declaration_name']; ?></td>
			<td><?php echo $subjectProductionTest['declaration_designation']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subject_production_tests', 'action' => 'view', $subjectProductionTest['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subject_production_tests', 'action' => 'edit', $subjectProductionTest['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subject_production_tests', 'action' => 'delete', $subjectProductionTest['id']), array(), __('Are you sure you want to delete # %s?', $subjectProductionTest['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject Production Test'), array('controller' => 'subject_production_tests', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subject Wps'); ?></h3>
	<?php if (!empty($job['SubjectWp'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Material Specification'); ?></th>
		<th><?php echo __('Sampleid'); ?></th>
		<th><?php echo __('Welding Position'); ?></th>
		<th><?php echo __('Welding Process'); ?></th>
		<th><?php echo __('Welding Config'); ?></th>
		<th><?php echo __('Pipe Diameter'); ?></th>
		<th><?php echo __('Plate Thickness'); ?></th>
		<th><?php echo __('Pipe Schedule'); ?></th>
		<th><?php echo __('Heat No Pipe Plate'); ?></th>
		<th><?php echo __('Pipe Thickness'); ?></th>
		<th><?php echo __('Stud Size'); ?></th>
		<th><?php echo __('Electrode Size'); ?></th>
		<th><?php echo __('Wps No'); ?></th>
		<th><?php echo __('Electrode Brand'); ?></th>
		<th><?php echo __('Pqr No'); ?></th>
		<th><?php echo __('Welder One Name'); ?></th>
		<th><?php echo __('Welder One Icno'); ?></th>
		<th><?php echo __('Welder One  Tagno'); ?></th>
		<th><?php echo __('Welder One Process'); ?></th>
		<th><?php echo __('Welder Two Name'); ?></th>
		<th><?php echo __('Welder Two Icno'); ?></th>
		<th><?php echo __('Welder Two Tagno'); ?></th>
		<th><?php echo __('Welder Two Process'); ?></th>
		<th><?php echo __('Test Code'); ?></th>
		<th><?php echo __('Radiography Gamma Ray'); ?></th>
		<th><?php echo __('Radiography Xray'); ?></th>
		<th><?php echo __('Dye Penetrant Test'); ?></th>
		<th><?php echo __('Fluorescent Dye Penetrant Test'); ?></th>
		<th><?php echo __('Magnetic Particle Inspection'); ?></th>
		<th><?php echo __('Ultrasonic Test'); ?></th>
		<th><?php echo __('All Weld Tensile Test'); ?></th>
		<th><?php echo __('Transverse Tensile Test'); ?></th>
		<th><?php echo __('Hot Tensile Test'); ?></th>
		<th><?php echo __('Hardness Survey'); ?></th>
		<th><?php echo __('Macro Examination'); ?></th>
		<th><?php echo __('Nick Break Test'); ?></th>
		<th><?php echo __('Fracture Test'); ?></th>
		<th><?php echo __('Peel Test'); ?></th>
		<th><?php echo __('Diffusible Hydrogen Weld Metal'); ?></th>
		<th><?php echo __('Pull Out Test'); ?></th>
		<th><?php echo __('Corrosion Test Astm G28'); ?></th>
		<th><?php echo __('Corrosion Test Astm G48'); ?></th>
		<th><?php echo __('Corrosion Test Astm Ae'); ?></th>
		<th><?php echo __('Ferrite Count Astm E562'); ?></th>
		<th><?php echo __('Ferrite Count Feritescope'); ?></th>
		<th><?php echo __('Ferrite Count Schaeffer Diagram'); ?></th>
		<th><?php echo __('Ferrite Count Delong Diagram'); ?></th>
		<th><?php echo __('Salt Spray Test'); ?></th>
		<th><?php echo __('Hydrogen Induced Cracking'); ?></th>
		<th><?php echo __('Sulphide Stress Cracking'); ?></th>
		<th><?php echo __('Positive Material Identification Spark'); ?></th>
		<th><?php echo __('Positive Material Identification Arc'); ?></th>
		<th><?php echo __('Desktop Chemical Analysis Spark'); ?></th>
		<th><?php echo __('Wet Analysis'); ?></th>
		<th><?php echo __('Base Metal'); ?></th>
		<th><?php echo __('Weld Metal'); ?></th>
		<th><?php echo __('Element Required Add'); ?></th>
		<th><?php echo __('Similar Material Lessthan 38 Temp'); ?></th>
		<th><?php echo __('Similar Material Lessthan 38 Weld Metal'); ?></th>
		<th><?php echo __('Similar Material Lessthan 38 Fusion Line'); ?></th>
		<th><?php echo __('Similar Material Lessthan 38 Fusion Line 1mm'); ?></th>
		<th><?php echo __('Similar Material Lessthan 38 Fusion Line 2mm'); ?></th>
		<th><?php echo __('Similar Material Lessthan 38 Fusion Line 3mm'); ?></th>
		<th><?php echo __('Similar Material Lessthan 38 Fusion Line 5mm'); ?></th>
		<th><?php echo __('Similar Material Lessthan 38 Haz'); ?></th>
		<th><?php echo __('Similar Material Lessthan 38 Base Metal'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Temp'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Top Weld Metal'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Top Fusion Line'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Top Fusion Line 1mm'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Top Fusion Line 2mm'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Top Fusion Line 3mm'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Top Fusion Line 5mm'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Top Haz'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Top Base Metal'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Bottom Weld Metal'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Bottom Fusion Line'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Bottom Fusion Line 1mm'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Bottom Fusion Line 2mm'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Bottom Fusion Line 3mm'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Bottom Fusion Line 5mm'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Bottom Haz'); ?></th>
		<th><?php echo __('Similar Material Greaterthan 38 Bottom Base Metal'); ?></th>
		<th><?php echo __('Saw Temp'); ?></th>
		<th><?php echo __('Saw Top Weld Metal'); ?></th>
		<th><?php echo __('Saw Top Fusion Line'); ?></th>
		<th><?php echo __('Saw Top Fusion Line 1mm'); ?></th>
		<th><?php echo __('Saw Top Fusion Line 2mm'); ?></th>
		<th><?php echo __('Saw Top Fusion Line 3mm'); ?></th>
		<th><?php echo __('Saw Top Fusion Line 5mm'); ?></th>
		<th><?php echo __('Saw Top Fusion Line Haz'); ?></th>
		<th><?php echo __('Saw Top Fusion Line Base Metal'); ?></th>
		<th><?php echo __('Saw Bottom Weld Metal'); ?></th>
		<th><?php echo __('Saw Bottom Fusion Line'); ?></th>
		<th><?php echo __('Saw Bottom Fusion Line 1mm'); ?></th>
		<th><?php echo __('Saw Bottom Fusion Line 2mm'); ?></th>
		<th><?php echo __('Saw Bottom Fusion Line 3mm'); ?></th>
		<th><?php echo __('Saw Bottom Fusion Line 5mm'); ?></th>
		<th><?php echo __('Saw Bottom Fusion Line Haz'); ?></th>
		<th><?php echo __('Saw Bottom Fusion Line Base Metal'); ?></th>
		<th><?php echo __('Dissimilar Materials Temp'); ?></th>
		<th><?php echo __('Metal1 Weld Metal'); ?></th>
		<th><?php echo __('Metal1 Fusion Line'); ?></th>
		<th><?php echo __('Metal1 Fusion Line 1mm'); ?></th>
		<th><?php echo __('Metal1 Fusion Line 2mm'); ?></th>
		<th><?php echo __('Metal1 Fusion Line 3mm'); ?></th>
		<th><?php echo __('Metal1 Fusion Line 5mm'); ?></th>
		<th><?php echo __('Metal1 Fusion Line Haz'); ?></th>
		<th><?php echo __('Metal1 Fusion Line Base Metal'); ?></th>
		<th><?php echo __('Metal2 Weld Metal'); ?></th>
		<th><?php echo __('Metal2 Fusion Line'); ?></th>
		<th><?php echo __('Metal2 Fusion Line 1mm'); ?></th>
		<th><?php echo __('Metal2 Fusion Line 2mm'); ?></th>
		<th><?php echo __('Metal2 Fusion Line 3mm'); ?></th>
		<th><?php echo __('Metal2 Fusion Line 5mm'); ?></th>
		<th><?php echo __('Metal2 Fusion Line Haz'); ?></th>
		<th><?php echo __('Metal2 Fusion Line Base Metal'); ?></th>
		<th><?php echo __('Temp Below Norestriction Heating Rate'); ?></th>
		<th><?php echo __('Soaking Temp Controlled Heating Rate'); ?></th>
		<th><?php echo __('Soaking Temp'); ?></th>
		<th><?php echo __('Soaking Time'); ?></th>
		<th><?php echo __('Soaking Temp Controlled Cooling Rate'); ?></th>
		<th><?php echo __('Temp Below Cooling Rate Unrestricted'); ?></th>
		<th><?php echo __('Other Test'); ?></th>
		<th><?php echo __('Special Remarks'); ?></th>
		<th><?php echo __('Declaration Name'); ?></th>
		<th><?php echo __('Declaration Designation'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['SubjectWp'] as $subjectWp): ?>
		<tr>
			<td><?php echo $subjectWp['id']; ?></td>
			<td><?php echo $subjectWp['job_id']; ?></td>
			<td><?php echo $subjectWp['user_id']; ?></td>
			<td><?php echo $subjectWp['material_specification']; ?></td>
			<td><?php echo $subjectWp['sampleid']; ?></td>
			<td><?php echo $subjectWp['welding_position']; ?></td>
			<td><?php echo $subjectWp['welding_process']; ?></td>
			<td><?php echo $subjectWp['welding_config']; ?></td>
			<td><?php echo $subjectWp['pipe_diameter']; ?></td>
			<td><?php echo $subjectWp['plate_thickness']; ?></td>
			<td><?php echo $subjectWp['pipe_schedule']; ?></td>
			<td><?php echo $subjectWp['heat_no_pipe_plate']; ?></td>
			<td><?php echo $subjectWp['pipe_thickness']; ?></td>
			<td><?php echo $subjectWp['stud_size']; ?></td>
			<td><?php echo $subjectWp['electrode_size']; ?></td>
			<td><?php echo $subjectWp['wps_no']; ?></td>
			<td><?php echo $subjectWp['electrode_brand']; ?></td>
			<td><?php echo $subjectWp['pqr_no']; ?></td>
			<td><?php echo $subjectWp['welder_one_name']; ?></td>
			<td><?php echo $subjectWp['welder_one_icno']; ?></td>
			<td><?php echo $subjectWp['welder_one__tagno']; ?></td>
			<td><?php echo $subjectWp['welder_one_process']; ?></td>
			<td><?php echo $subjectWp['welder_two_name']; ?></td>
			<td><?php echo $subjectWp['welder_two_icno']; ?></td>
			<td><?php echo $subjectWp['welder_two_tagno']; ?></td>
			<td><?php echo $subjectWp['welder_two_process']; ?></td>
			<td><?php echo $subjectWp['test_code']; ?></td>
			<td><?php echo $subjectWp['radiography_gamma_ray']; ?></td>
			<td><?php echo $subjectWp['radiography_xray']; ?></td>
			<td><?php echo $subjectWp['dye_penetrant_test']; ?></td>
			<td><?php echo $subjectWp['fluorescent_dye_penetrant_test']; ?></td>
			<td><?php echo $subjectWp['magnetic_particle_inspection']; ?></td>
			<td><?php echo $subjectWp['ultrasonic_test']; ?></td>
			<td><?php echo $subjectWp['all_weld_tensile_test']; ?></td>
			<td><?php echo $subjectWp['transverse_tensile_test']; ?></td>
			<td><?php echo $subjectWp['hot_tensile_test']; ?></td>
			<td><?php echo $subjectWp['hardness_survey']; ?></td>
			<td><?php echo $subjectWp['macro_examination']; ?></td>
			<td><?php echo $subjectWp['nick_break_test']; ?></td>
			<td><?php echo $subjectWp['fracture_test']; ?></td>
			<td><?php echo $subjectWp['peel_test']; ?></td>
			<td><?php echo $subjectWp['diffusible_hydrogen_weld_metal']; ?></td>
			<td><?php echo $subjectWp['pull_out_test']; ?></td>
			<td><?php echo $subjectWp['corrosion_test_astm_g28']; ?></td>
			<td><?php echo $subjectWp['corrosion_test_astm_g48']; ?></td>
			<td><?php echo $subjectWp['corrosion_test_astm_ae']; ?></td>
			<td><?php echo $subjectWp['ferrite_count_astm_e562']; ?></td>
			<td><?php echo $subjectWp['ferrite_count_feritescope']; ?></td>
			<td><?php echo $subjectWp['ferrite_count_schaeffer_diagram']; ?></td>
			<td><?php echo $subjectWp['ferrite_count_delong_diagram']; ?></td>
			<td><?php echo $subjectWp['salt_spray_test']; ?></td>
			<td><?php echo $subjectWp['hydrogen_induced_cracking']; ?></td>
			<td><?php echo $subjectWp['sulphide_stress_cracking']; ?></td>
			<td><?php echo $subjectWp['positive_material_identification_spark']; ?></td>
			<td><?php echo $subjectWp['positive_material_identification_arc']; ?></td>
			<td><?php echo $subjectWp['desktop_chemical_analysis_spark']; ?></td>
			<td><?php echo $subjectWp['wet_analysis']; ?></td>
			<td><?php echo $subjectWp['base_metal']; ?></td>
			<td><?php echo $subjectWp['weld_metal']; ?></td>
			<td><?php echo $subjectWp['element_required_add']; ?></td>
			<td><?php echo $subjectWp['similar_material_lessthan_38_temp']; ?></td>
			<td><?php echo $subjectWp['similar_material_lessthan_38_weld_metal']; ?></td>
			<td><?php echo $subjectWp['similar_material_lessthan_38_fusion_line']; ?></td>
			<td><?php echo $subjectWp['similar_material_lessthan_38_fusion_line_1mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_lessthan_38_fusion_line_2mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_lessthan_38_fusion_line_3mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_lessthan_38_fusion_line_5mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_lessthan_38_haz']; ?></td>
			<td><?php echo $subjectWp['similar_material_lessthan_38_base_metal']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_temp']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_top_weld_metal']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_top_fusion_line']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_top_fusion_line_1mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_top_fusion_line_2mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_top_fusion_line_3mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_top_fusion_line_5mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_top_haz']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_top_base_metal']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_bottom_weld_metal']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_bottom_fusion_line']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_bottom_fusion_line_1mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_bottom_fusion_line_2mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_bottom_fusion_line_3mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_bottom_fusion_line_5mm']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_bottom_haz']; ?></td>
			<td><?php echo $subjectWp['similar_material_greaterthan_38_bottom_base_metal']; ?></td>
			<td><?php echo $subjectWp['saw_temp']; ?></td>
			<td><?php echo $subjectWp['saw_top_weld_metal']; ?></td>
			<td><?php echo $subjectWp['saw_top_fusion_line']; ?></td>
			<td><?php echo $subjectWp['saw_top_fusion_line_1mm']; ?></td>
			<td><?php echo $subjectWp['saw_top_fusion_line_2mm']; ?></td>
			<td><?php echo $subjectWp['saw_top_fusion_line_3mm']; ?></td>
			<td><?php echo $subjectWp['saw_top_fusion_line_5mm']; ?></td>
			<td><?php echo $subjectWp['saw_top_fusion_line_haz']; ?></td>
			<td><?php echo $subjectWp['saw_top_fusion_line_base_metal']; ?></td>
			<td><?php echo $subjectWp['saw_bottom_weld_metal']; ?></td>
			<td><?php echo $subjectWp['saw_bottom_fusion_line']; ?></td>
			<td><?php echo $subjectWp['saw_bottom_fusion_line_1mm']; ?></td>
			<td><?php echo $subjectWp['saw_bottom_fusion_line_2mm']; ?></td>
			<td><?php echo $subjectWp['saw_bottom_fusion_line_3mm']; ?></td>
			<td><?php echo $subjectWp['saw_bottom_fusion_line_5mm']; ?></td>
			<td><?php echo $subjectWp['saw_bottom_fusion_line_haz']; ?></td>
			<td><?php echo $subjectWp['saw_bottom_fusion_line_base_metal']; ?></td>
			<td><?php echo $subjectWp['dissimilar_materials_temp']; ?></td>
			<td><?php echo $subjectWp['metal1_weld_metal']; ?></td>
			<td><?php echo $subjectWp['metal1_fusion_line']; ?></td>
			<td><?php echo $subjectWp['metal1_fusion_line_1mm']; ?></td>
			<td><?php echo $subjectWp['metal1_fusion_line_2mm']; ?></td>
			<td><?php echo $subjectWp['metal1_fusion_line_3mm']; ?></td>
			<td><?php echo $subjectWp['metal1_fusion_line_5mm']; ?></td>
			<td><?php echo $subjectWp['metal1_fusion_line_haz']; ?></td>
			<td><?php echo $subjectWp['metal1_fusion_line_base_metal']; ?></td>
			<td><?php echo $subjectWp['metal2_weld_metal']; ?></td>
			<td><?php echo $subjectWp['metal2_fusion_line']; ?></td>
			<td><?php echo $subjectWp['metal2_fusion_line_1mm']; ?></td>
			<td><?php echo $subjectWp['metal2_fusion_line_2mm']; ?></td>
			<td><?php echo $subjectWp['metal2_fusion_line_3mm']; ?></td>
			<td><?php echo $subjectWp['metal2_fusion_line_5mm']; ?></td>
			<td><?php echo $subjectWp['metal2_fusion_line_haz']; ?></td>
			<td><?php echo $subjectWp['metal2_fusion_line_base_metal']; ?></td>
			<td><?php echo $subjectWp['temp_below_norestriction_heating_rate']; ?></td>
			<td><?php echo $subjectWp['soaking_temp_controlled_heating_rate']; ?></td>
			<td><?php echo $subjectWp['soaking_temp']; ?></td>
			<td><?php echo $subjectWp['soaking_time']; ?></td>
			<td><?php echo $subjectWp['soaking_temp_controlled_cooling_rate']; ?></td>
			<td><?php echo $subjectWp['temp_below_cooling_rate_unrestricted']; ?></td>
			<td><?php echo $subjectWp['other_test']; ?></td>
			<td><?php echo $subjectWp['special_remarks']; ?></td>
			<td><?php echo $subjectWp['declaration_name']; ?></td>
			<td><?php echo $subjectWp['declaration_designation']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subject_wps', 'action' => 'view', $subjectWp['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subject_wps', 'action' => 'edit', $subjectWp['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subject_wps', 'action' => 'delete', $subjectWp['id']), array(), __('Are you sure you want to delete # %s?', $subjectWp['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject Wp'), array('controller' => 'subject_wps', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subject Wqts'); ?></h3>
	<?php if (!empty($job['SubjectWqt'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Material Specification'); ?></th>
		<th><?php echo __('Welding Config'); ?></th>
		<th><?php echo __('Welding Position'); ?></th>
		<th><?php echo __('Welding Process'); ?></th>
		<th><?php echo __('Pipe Diameter'); ?></th>
		<th><?php echo __('Pipe Schedule'); ?></th>
		<th><?php echo __('Pipe Thickness'); ?></th>
		<th><?php echo __('Electrode Size'); ?></th>
		<th><?php echo __('Electrode Brand'); ?></th>
		<th><?php echo __('Sampleid'); ?></th>
		<th><?php echo __('Plate Thickness'); ?></th>
		<th><?php echo __('Heat No Pipe Plate'); ?></th>
		<th><?php echo __('Stud Size'); ?></th>
		<th><?php echo __('Wps No'); ?></th>
		<th><?php echo __('Pqr No'); ?></th>
		<th><?php echo __('Welder One Name'); ?></th>
		<th><?php echo __('Welder One Icno'); ?></th>
		<th><?php echo __('Welder One  Tagno'); ?></th>
		<th><?php echo __('Welder One Process'); ?></th>
		<th><?php echo __('Welder Two Name'); ?></th>
		<th><?php echo __('Welder Two Icno'); ?></th>
		<th><?php echo __('Welder Two Tagno'); ?></th>
		<th><?php echo __('Welder Two Process'); ?></th>
		<th><?php echo __('Welder Three Name'); ?></th>
		<th><?php echo __('Welder Three Icno'); ?></th>
		<th><?php echo __('Welder Three Tagno'); ?></th>
		<th><?php echo __('Welder Three Process'); ?></th>
		<th><?php echo __('Test Code'); ?></th>
		<th><?php echo __('Radiography Gamma Ray'); ?></th>
		<th><?php echo __('Radiography X Ray'); ?></th>
		<th><?php echo __('Dye Penetrant Test'); ?></th>
		<th><?php echo __('Magnetic Particle Inspection'); ?></th>
		<th><?php echo __('Transverse Tensile Test Welding'); ?></th>
		<th><?php echo __('Transverse Root Bend Test'); ?></th>
		<th><?php echo __('Transverse Side Bend Test'); ?></th>
		<th><?php echo __('Transverse Face Bend Test'); ?></th>
		<th><?php echo __('Fracture Test Fillet Weld'); ?></th>
		<th><?php echo __('Nick Break Api1104'); ?></th>
		<th><?php echo __('Macro Examination'); ?></th>
		<th><?php echo __('Special Remarks'); ?></th>
		<th><?php echo __('Declaration Name'); ?></th>
		<th><?php echo __('Declaration Designation'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['SubjectWqt'] as $subjectWqt): ?>
		<tr>
			<td><?php echo $subjectWqt['id']; ?></td>
			<td><?php echo $subjectWqt['job_id']; ?></td>
			<td><?php echo $subjectWqt['user_id']; ?></td>
			<td><?php echo $subjectWqt['material_specification']; ?></td>
			<td><?php echo $subjectWqt['welding_config']; ?></td>
			<td><?php echo $subjectWqt['welding_position']; ?></td>
			<td><?php echo $subjectWqt['welding_process']; ?></td>
			<td><?php echo $subjectWqt['pipe_diameter']; ?></td>
			<td><?php echo $subjectWqt['pipe_schedule']; ?></td>
			<td><?php echo $subjectWqt['pipe_thickness']; ?></td>
			<td><?php echo $subjectWqt['electrode_size']; ?></td>
			<td><?php echo $subjectWqt['electrode_brand']; ?></td>
			<td><?php echo $subjectWqt['sampleid']; ?></td>
			<td><?php echo $subjectWqt['plate_thickness']; ?></td>
			<td><?php echo $subjectWqt['heat_no_pipe_plate']; ?></td>
			<td><?php echo $subjectWqt['stud_size']; ?></td>
			<td><?php echo $subjectWqt['wps_no']; ?></td>
			<td><?php echo $subjectWqt['pqr_no']; ?></td>
			<td><?php echo $subjectWqt['welder_one_name']; ?></td>
			<td><?php echo $subjectWqt['welder_one_icno']; ?></td>
			<td><?php echo $subjectWqt['welder_one__tagno']; ?></td>
			<td><?php echo $subjectWqt['welder_one_process']; ?></td>
			<td><?php echo $subjectWqt['welder_two_name']; ?></td>
			<td><?php echo $subjectWqt['welder_two_icno']; ?></td>
			<td><?php echo $subjectWqt['welder_two_tagno']; ?></td>
			<td><?php echo $subjectWqt['welder_two_process']; ?></td>
			<td><?php echo $subjectWqt['welder_three_name']; ?></td>
			<td><?php echo $subjectWqt['welder_three_icno']; ?></td>
			<td><?php echo $subjectWqt['welder_three_tagno']; ?></td>
			<td><?php echo $subjectWqt['welder_three_process']; ?></td>
			<td><?php echo $subjectWqt['test_code']; ?></td>
			<td><?php echo $subjectWqt['radiography_gamma_ray']; ?></td>
			<td><?php echo $subjectWqt['radiography_x_ray']; ?></td>
			<td><?php echo $subjectWqt['dye_penetrant_test']; ?></td>
			<td><?php echo $subjectWqt['magnetic_particle_inspection']; ?></td>
			<td><?php echo $subjectWqt['transverse_tensile_test_welding']; ?></td>
			<td><?php echo $subjectWqt['transverse_root_bend_test']; ?></td>
			<td><?php echo $subjectWqt['transverse_side_bend_test']; ?></td>
			<td><?php echo $subjectWqt['transverse_face_bend_test']; ?></td>
			<td><?php echo $subjectWqt['fracture_test_fillet_weld']; ?></td>
			<td><?php echo $subjectWqt['nick_break_api1104']; ?></td>
			<td><?php echo $subjectWqt['macro_examination']; ?></td>
			<td><?php echo $subjectWqt['special_remarks']; ?></td>
			<td><?php echo $subjectWqt['declaration_name']; ?></td>
			<td><?php echo $subjectWqt['declaration_designation']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subject_wqts', 'action' => 'view', $subjectWqt['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subject_wqts', 'action' => 'edit', $subjectWqt['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subject_wqts', 'action' => 'delete', $subjectWqt['id']), array(), __('Are you sure you want to delete # %s?', $subjectWqt['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject Wqt'), array('controller' => 'subject_wqts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
