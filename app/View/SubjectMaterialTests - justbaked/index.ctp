<div class="subjectMaterialTests index">
	<h2><?php echo __('Subject Material Tests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('certificate_no'); ?></th>
			<th><?php echo $this->Paginator->sort('pipe_diameter'); ?></th>
			<th><?php echo $this->Paginator->sort('pipe_schedule'); ?></th>
			<th><?php echo $this->Paginator->sort('pipe_thickness'); ?></th>
			<th><?php echo $this->Paginator->sort('simple_dimension'); ?></th>
			<th><?php echo $this->Paginator->sort('sampleid'); ?></th>
			<th><?php echo $this->Paginator->sort('manufacturer'); ?></th>
			<th><?php echo $this->Paginator->sort('plate_thickness'); ?></th>
			<th><?php echo $this->Paginator->sort('heat_no_pipe_plate'); ?></th>
			<th><?php echo $this->Paginator->sort('diameter_bar_stud'); ?></th>
			<th><?php echo $this->Paginator->sort('test_code'); ?></th>
			<th><?php echo $this->Paginator->sort('dye_penetrant_test'); ?></th>
			<th><?php echo $this->Paginator->sort('ultrasonic_test'); ?></th>
			<th><?php echo $this->Paginator->sort('thickness_ganging_measurment'); ?></th>
			<th><?php echo $this->Paginator->sort('magnetic_particle_inspection'); ?></th>
			<th><?php echo $this->Paginator->sort('fluorescent_dye_penetrant_test'); ?></th>
			<th><?php echo $this->Paginator->sort('coating_thickness_measurement'); ?></th>
			<th><?php echo $this->Paginator->sort('full_tensile_longitudinal_direction'); ?></th>
			<th><?php echo $this->Paginator->sort('full_tensile_transverse_direction'); ?></th>
			<th><?php echo $this->Paginator->sort('hot_tensile_test_base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('through_thickness_z_direction'); ?></th>
			<th><?php echo $this->Paginator->sort('pull_test'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_test_deformed_bar_grade'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_test_full_size_bolt_nut'); ?></th>
			<th><?php echo $this->Paginator->sort('shear_test_bolt'); ?></th>
			<th><?php echo $this->Paginator->sort('proof_load_test_nut'); ?></th>
			<th><?php echo $this->Paginator->sort('wadge_test'); ?></th>
			<th><?php echo $this->Paginator->sort('slip_factor_test'); ?></th>
			<th><?php echo $this->Paginator->sort('longitudinal_root_bend_test'); ?></th>
			<th><?php echo $this->Paginator->sort('longitudinal_face_bend_test'); ?></th>
			<th><?php echo $this->Paginator->sort('bending_rebend_test_deform_bar'); ?></th>
			<th><?php echo $this->Paginator->sort('longitudinal_side_bend_test'); ?></th>
			<th><?php echo $this->Paginator->sort('hardness_survey_hvn'); ?></th>
			<th><?php echo $this->Paginator->sort('hardness_survey_rockwell'); ?></th>
			<th><?php echo $this->Paginator->sort('hardness_survey_brinell'); ?></th>
			<th><?php echo $this->Paginator->sort('fracture_test'); ?></th>
			<th><?php echo $this->Paginator->sort('flattening_test_pipe_tube'); ?></th>
			<th><?php echo $this->Paginator->sort('flaring_test'); ?></th>
			<th><?php echo $this->Paginator->sort('corrosion_test_astm_g28'); ?></th>
			<th><?php echo $this->Paginator->sort('corrosion_test_astm_g48'); ?></th>
			<th><?php echo $this->Paginator->sort('corrosion_test_astm_ae'); ?></th>
			<th><?php echo $this->Paginator->sort('salt_spary_test'); ?></th>
			<th><?php echo $this->Paginator->sort('hydrogen_induced_cracking'); ?></th>
			<th><?php echo $this->Paginator->sort('sulphide_stress_cracking'); ?></th>
			<th><?php echo $this->Paginator->sort('ferrite_count_astm_e562'); ?></th>
			<th><?php echo $this->Paginator->sort('ferrite_count_feritescope'); ?></th>
			<th><?php echo $this->Paginator->sort('ferrite_count_schaeffer_diagram'); ?></th>
			<th><?php echo $this->Paginator->sort('ferrite_count_delong_diagram'); ?></th>
			<th><?php echo $this->Paginator->sort('metallography'); ?></th>
			<th><?php echo $this->Paginator->sort('infinite_focus_imaging'); ?></th>
			<th><?php echo $this->Paginator->sort('sme_edxs'); ?></th>
			<th><?php echo $this->Paginator->sort('in_situ_metallography'); ?></th>
			<th><?php echo $this->Paginator->sort('pmi_spark'); ?></th>
			<th><?php echo $this->Paginator->sort('pmi_arc'); ?></th>
			<th><?php echo $this->Paginator->sort('desktop_chemical_analysis_spark'); ?></th>
			<th><?php echo $this->Paginator->sort('wet_analysis'); ?></th>
			<th><?php echo $this->Paginator->sort('base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('element_required_list'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_lessthan_38_temp'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_material_graterthan_38_temp'); ?></th>
			<th><?php echo $this->Paginator->sort('Charpy_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('fusion_line'); ?></th>
			<th><?php echo $this->Paginator->sort('fusion_line_1mm'); ?></th>
			<th><?php echo $this->Paginator->sort('fusion_line_2mm'); ?></th>
			<th><?php echo $this->Paginator->sort('fusion_line_3mm'); ?></th>
			<th><?php echo $this->Paginator->sort('fusion_line_5mm'); ?></th>
			<th><?php echo $this->Paginator->sort('haz'); ?></th>
			<th><?php echo $this->Paginator->sort('Charpy_base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('top_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('top_fusion_line'); ?></th>
			<th><?php echo $this->Paginator->sort('top_fusion_line_1mm'); ?></th>
			<th><?php echo $this->Paginator->sort('top_fusion_line_2mm'); ?></th>
			<th><?php echo $this->Paginator->sort('top_fusion_line_3mm'); ?></th>
			<th><?php echo $this->Paginator->sort('top_fusion_line_5mm'); ?></th>
			<th><?php echo $this->Paginator->sort('top_haz'); ?></th>
			<th><?php echo $this->Paginator->sort('top_base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_fusion_line'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_fusion_line_1mm'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_fusion_line_2mm'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_fusion_line_3mm'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_fusion_line_5mm'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_haz'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_base_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('temp_below_no_restriction_heating_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('soking_temp_controlled_heating_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('soaking_temp'); ?></th>
			<th><?php echo $this->Paginator->sort('soaking_time'); ?></th>
			<th><?php echo $this->Paginator->sort('soaking_temp_controlled_cooling_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('temp_below_cooling_rate_unrestricted'); ?></th>
			<th><?php echo $this->Paginator->sort('other_test'); ?></th>
			<th><?php echo $this->Paginator->sort('special_remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('declaration_name'); ?></th>
			<th><?php echo $this->Paginator->sort('declaration_designation'); ?></th>
			<th><?php echo $this->Paginator->sort('control_no'); ?></th>
			<th><?php echo $this->Paginator->sort('ccjs_submission_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subjectMaterialTests as $subjectMaterialTest): ?>
	<tr>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subjectMaterialTest['Job']['id'], array('controller' => 'jobs', 'action' => 'view', $subjectMaterialTest['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subjectMaterialTest['User']['id'], array('controller' => 'users', 'action' => 'view', $subjectMaterialTest['User']['id'])); ?>
		</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['material_specification']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['certificate_no']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['pipe_diameter']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['pipe_schedule']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['pipe_thickness']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['simple_dimension']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['sampleid']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['manufacturer']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['plate_thickness']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['heat_no_pipe_plate']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['diameter_bar_stud']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['test_code']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['dye_penetrant_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['ultrasonic_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['thickness_ganging_measurment']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['magnetic_particle_inspection']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['fluorescent_dye_penetrant_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['coating_thickness_measurement']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['full_tensile_longitudinal_direction']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['full_tensile_transverse_direction']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['hot_tensile_test_base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['through_thickness_z_direction']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['pull_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['tensile_test_deformed_bar_grade']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['tensile_test_full_size_bolt_nut']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['shear_test_bolt']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['proof_load_test_nut']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['wadge_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['slip_factor_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['longitudinal_root_bend_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['longitudinal_face_bend_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['bending_rebend_test_deform_bar']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['longitudinal_side_bend_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['hardness_survey_hvn']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['hardness_survey_rockwell']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['hardness_survey_brinell']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['fracture_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['flattening_test_pipe_tube']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['flaring_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['corrosion_test_astm_g28']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['corrosion_test_astm_g48']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['corrosion_test_astm_ae']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['salt_spary_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['hydrogen_induced_cracking']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['sulphide_stress_cracking']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['ferrite_count_astm_e562']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['ferrite_count_feritescope']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['ferrite_count_schaeffer_diagram']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['ferrite_count_delong_diagram']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['metallography']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['infinite_focus_imaging']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['sme_edxs']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['in_situ_metallography']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['pmi_spark']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['pmi_arc']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['desktop_chemical_analysis_spark']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['wet_analysis']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['element_required_list']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['similar_material_lessthan_38_temp']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['similar_material_graterthan_38_temp']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['Charpy_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['fusion_line']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['fusion_line_1mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['fusion_line_2mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['fusion_line_3mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['fusion_line_5mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['haz']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['Charpy_base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_fusion_line']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_fusion_line_1mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_fusion_line_2mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_fusion_line_3mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_fusion_line_5mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_haz']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['top_base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_fusion_line']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_fusion_line_1mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_fusion_line_2mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_fusion_line_3mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_fusion_line_5mm']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_haz']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['bottom_base_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['temp_below_no_restriction_heating_rate']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['soking_temp_controlled_heating_rate']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['soaking_temp']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['soaking_time']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['soaking_temp_controlled_cooling_rate']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['temp_below_cooling_rate_unrestricted']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['other_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['special_remarks']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['declaration_name']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['declaration_designation']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['control_no']); ?>&nbsp;</td>
		<td><?php echo h($subjectMaterialTest['SubjectMaterialTest']['ccjs_submission_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subjectMaterialTest['SubjectMaterialTest']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subjectMaterialTest['SubjectMaterialTest']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subjectMaterialTest['SubjectMaterialTest']['id']), array(), __('Are you sure you want to delete # %s?', $subjectMaterialTest['SubjectMaterialTest']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subject Material Test'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
