<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo h($user['User']['client']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Person'); ?></dt>
		<dd>
			<?php echo h($user['User']['contact_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($user['User']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
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
	<h3><?php echo __('Related Jobs'); ?></h3>
	<?php if (!empty($user['Job'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Client'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Contact Person'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Report Client'); ?></th>
		<th><?php echo __('Report Address'); ?></th>
		<th><?php echo __('Report Att To'); ?></th>
		<th><?php echo __('Report Phone'); ?></th>
		<th><?php echo __('Report Position'); ?></th>
		<th><?php echo __('Report Fax'); ?></th>
		<th><?php echo __('Report Email'); ?></th>
		<th><?php echo __('Report Sample Arrived Date'); ?></th>
		<th><?php echo __('Invoice Client'); ?></th>
		<th><?php echo __('Invoice Address'); ?></th>
		<th><?php echo __('Invoice Contact Person'); ?></th>
		<th><?php echo __('Invoice Phone'); ?></th>
		<th><?php echo __('Invoice Email'); ?></th>
		<th><?php echo __('Invoice Fax'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Job'] as $job): ?>
		<tr>
			<td><?php echo $job['id']; ?></td>
			<td><?php echo $job['barcode']; ?></td>
			<td><?php echo $job['user_id']; ?></td>
			<td><?php echo $job['client']; ?></td>
			<td><?php echo $job['address']; ?></td>
			<td><?php echo $job['contact_person']; ?></td>
			<td><?php echo $job['phone']; ?></td>
			<td><?php echo $job['email']; ?></td>
			<td><?php echo $job['fax']; ?></td>
			<td><?php echo $job['report_client']; ?></td>
			<td><?php echo $job['report_address']; ?></td>
			<td><?php echo $job['report_att_to']; ?></td>
			<td><?php echo $job['report_phone']; ?></td>
			<td><?php echo $job['report_position']; ?></td>
			<td><?php echo $job['report_fax']; ?></td>
			<td><?php echo $job['report_email']; ?></td>
			<td><?php echo $job['report_sample_arrived_date']; ?></td>
			<td><?php echo $job['invoice_client']; ?></td>
			<td><?php echo $job['invoice_address']; ?></td>
			<td><?php echo $job['invoice_contact_person']; ?></td>
			<td><?php echo $job['invoice_phone']; ?></td>
			<td><?php echo $job['invoice_email']; ?></td>
			<td><?php echo $job['invoice_fax']; ?></td>
			<td><?php echo $job['created']; ?></td>
			<td><?php echo $job['modified']; ?></td>
			<td><?php echo $job['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobs', 'action' => 'view', $job['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobs', 'action' => 'edit', $job['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobs', 'action' => 'delete', $job['id']), array(), __('Are you sure you want to delete # %s?', $job['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subject Material Tests'); ?></h3>
	<?php if (!empty($user['SubjectMaterialTest'])): ?>
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
		<th><?php echo __('Sample Id'); ?></th>
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
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['SubjectMaterialTest'] as $subjectMaterialTest): ?>
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
			<td><?php echo $subjectMaterialTest['sample_id']; ?></td>
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
	<?php if (!empty($user['SubjectProductionTest'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Material Specification'); ?></th>
		<th><?php echo __('Sample Id'); ?></th>
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
	<?php foreach ($user['SubjectProductionTest'] as $subjectProductionTest): ?>
		<tr>
			<td><?php echo $subjectProductionTest['id']; ?></td>
			<td><?php echo $subjectProductionTest['job_id']; ?></td>
			<td><?php echo $subjectProductionTest['user_id']; ?></td>
			<td><?php echo $subjectProductionTest['material_specification']; ?></td>
			<td><?php echo $subjectProductionTest['sample_id']; ?></td>
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
	<?php if (!empty($user['SubjectWp'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Material Specification'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['SubjectWp'] as $subjectWp): ?>
		<tr>
			<td><?php echo $subjectWp['id']; ?></td>
			<td><?php echo $subjectWp['job_id']; ?></td>
			<td><?php echo $subjectWp['user_id']; ?></td>
			<td><?php echo $subjectWp['material_specification']; ?></td>
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
	<?php if (!empty($user['SubjectWqt'])): ?>
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
		<th><?php echo __('Sample Id'); ?></th>
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
	<?php foreach ($user['SubjectWqt'] as $subjectWqt): ?>
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
			<td><?php echo $subjectWqt['sample_id']; ?></td>
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
