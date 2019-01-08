<div class="subjectProductionTests index">
	<h2><?php echo __('Subject Production Tests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('sampleid'); ?></th>
			<th><?php echo $this->Paginator->sort('welding_position'); ?></th>
			<th><?php echo $this->Paginator->sort('heat_no'); ?></th>
			<th><?php echo $this->Paginator->sort('job_no'); ?></th>
			<th><?php echo $this->Paginator->sort('plate_thickness'); ?></th>
			<th><?php echo $this->Paginator->sort('welding_config'); ?></th>
			<th><?php echo $this->Paginator->sort('welding_process'); ?></th>
			<th><?php echo $this->Paginator->sort('serial_no'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one_name'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one_icno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one_tagno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_one_process'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_name'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_icno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_tagno'); ?></th>
			<th><?php echo $this->Paginator->sort('welder_two_process'); ?></th>
			<th><?php echo $this->Paginator->sort('test_code_one'); ?></th>
			<th><?php echo $this->Paginator->sort('test_code_two'); ?></th>
			<th><?php echo $this->Paginator->sort('transverse_tensile_test_welding'); ?></th>
			<th><?php echo $this->Paginator->sort('hot_tensile_test_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('transverse_side_bend_test'); ?></th>
			<th><?php echo $this->Paginator->sort('charpy_impact_test_weld_metal'); ?></th>
			<th><?php echo $this->Paginator->sort('macro_examination'); ?></th>
			<th><?php echo $this->Paginator->sort('weld_tensile_test'); ?></th>
			<th><?php echo $this->Paginator->sort('hardness_survey'); ?></th>
			<th><?php echo $this->Paginator->sort('temp_below_which_no_restriction_on_heating_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('soaking_temp_controlled_heating_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('soaking_temp'); ?></th>
			<th><?php echo $this->Paginator->sort('soaking_time'); ?></th>
			<th><?php echo $this->Paginator->sort('temp_below_which_cooling_rate_is_unrestricted'); ?></th>
			<th><?php echo $this->Paginator->sort('controlled_cooling_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('declaration_name'); ?></th>
			<th><?php echo $this->Paginator->sort('declaration_designation'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subjectProductionTests as $subjectProductionTest): ?>
	<tr>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subjectProductionTest['Job']['id'], array('controller' => 'jobs', 'action' => 'view', $subjectProductionTest['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subjectProductionTest['User']['id'], array('controller' => 'users', 'action' => 'view', $subjectProductionTest['User']['id'])); ?>
		</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['material_specification']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['sampleid']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['welding_position']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['heat_no']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['job_no']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['plate_thickness']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['welding_config']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['welding_process']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['serial_no']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['welder_one_name']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['welder_one_icno']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['welder_one_tagno']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['welder_one_process']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['welder_two_name']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['welder_two_icno']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['welder_two_tagno']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['welder_two_process']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['test_code_one']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['test_code_two']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['transverse_tensile_test_welding']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['hot_tensile_test_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['transverse_side_bend_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['charpy_impact_test_weld_metal']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['macro_examination']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['weld_tensile_test']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['hardness_survey']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['temp_below_which_no_restriction_on_heating_rate']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['soaking_temp_controlled_heating_rate']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['soaking_temp']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['soaking_time']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['temp_below_which_cooling_rate_is_unrestricted']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['controlled_cooling_rate']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['declaration_name']); ?>&nbsp;</td>
		<td><?php echo h($subjectProductionTest['SubjectProductionTest']['declaration_designation']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subjectProductionTest['SubjectProductionTest']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subjectProductionTest['SubjectProductionTest']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subjectProductionTest['SubjectProductionTest']['id']), array(), __('Are you sure you want to delete # %s?', $subjectProductionTest['SubjectProductionTest']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subject Production Test'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
