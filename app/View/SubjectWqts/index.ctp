<div class="subjectWqts index">
	<h2><?php echo __('Subject Wqts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('welding_config'); ?></th>
			<th><?php echo $this->Paginator->sort('welding_position'); ?></th>
			<th><?php echo $this->Paginator->sort('welding_process'); ?></th>
			<th><?php echo $this->Paginator->sort('pipe_diameter'); ?></th>
			<th><?php echo $this->Paginator->sort('pipe_schedule'); ?></th>
			<th><?php echo $this->Paginator->sort('pipe_thickness'); ?></th>
			<th><?php echo $this->Paginator->sort('electrode_size'); ?></th>
			<th><?php echo $this->Paginator->sort('electrode_brand'); ?></th>
			<th><?php echo $this->Paginator->sort('sampleid'); ?></th>
			<th><?php echo $this->Paginator->sort('plate_thickness'); ?></th>
			<th><?php echo $this->Paginator->sort('heat_no_pipe_plate'); ?></th>
			<th><?php echo $this->Paginator->sort('stud_size'); ?></th>
			<th><?php echo $this->Paginator->sort('wps_no'); ?></th>
			<th><?php echo $this->Paginator->sort('pqr_no'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one_name'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one_icno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one__tagno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one_process'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_name'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_icno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_tagno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_process'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_three_name'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_three_icno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_three_tagno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_three_process'); ?></th>
			<th><?php echo $this->Paginator->sort('test_code'); ?></th>
			<th><?php echo $this->Paginator->sort('radiography_gamma_ray'); ?></th>
			<th><?php echo $this->Paginator->sort('radiography_x_ray'); ?></th>
			<th><?php echo $this->Paginator->sort('dye_penetrant_test'); ?></th>
			<th><?php echo $this->Paginator->sort('magnetic_particle_inspection'); ?></th>
			<th><?php echo $this->Paginator->sort('transverse_tensile_test_welding'); ?></th>
			<th><?php echo $this->Paginator->sort('transverse_root_bend_test'); ?></th>
			<th><?php echo $this->Paginator->sort('transverse_side_bend_test'); ?></th>
			<th><?php echo $this->Paginator->sort('transverse_face_bend_test'); ?></th>
			<th><?php echo $this->Paginator->sort('fracture_test_fillet_weld'); ?></th>
			<th><?php echo $this->Paginator->sort('nick_break_api1104'); ?></th>
			<th><?php echo $this->Paginator->sort('macro_examination'); ?></th>
			<th><?php echo $this->Paginator->sort('special_remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('declaration_name'); ?></th>
			<th><?php echo $this->Paginator->sort('declaration_designation'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subjectWqts as $subjectWqt): ?>
	<tr>
		<td><?php echo h($subjectWqt['SubjectWqt']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subjectWqt['Job']['id'], array('controller' => 'jobs', 'action' => 'view', $subjectWqt['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subjectWqt['User']['id'], array('controller' => 'users', 'action' => 'view', $subjectWqt['User']['id'])); ?>
		</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['material_specification']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welding_config']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welding_position']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welding_process']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['pipe_diameter']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['pipe_schedule']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['pipe_thickness']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['electrode_size']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['electrode_brand']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['sampleid']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['plate_thickness']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['heat_no_pipe_plate']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['stud_size']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['wps_no']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['pqr_no']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_one_name']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_one_icno']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_one__tagno']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_one_process']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_two_name']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_two_icno']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_two_tagno']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_two_process']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_three_name']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_three_icno']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_three_tagno']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['welder_three_process']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['test_code']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['radiography_gamma_ray']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['radiography_x_ray']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['dye_penetrant_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['magnetic_particle_inspection']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['transverse_tensile_test_welding']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['transverse_root_bend_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['transverse_side_bend_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['transverse_face_bend_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['fracture_test_fillet_weld']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['nick_break_api1104']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['macro_examination']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['special_remarks']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['declaration_name']); ?>&nbsp;</td>
		<td><?php echo h($subjectWqt['SubjectWqt']['declaration_designation']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subjectWqt['SubjectWqt']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subjectWqt['SubjectWqt']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subjectWqt['SubjectWqt']['id']), array(), __('Are you sure you want to delete # %s?', $subjectWqt['SubjectWqt']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subject Wqt'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
