<div class="subjectProductionTests view">
<h2><?php echo __('Subject Production Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subjectProductionTest['Job']['id'], array('controller' => 'jobs', 'action' => 'view', $subjectProductionTest['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subjectProductionTest['User']['id'], array('controller' => 'users', 'action' => 'view', $subjectProductionTest['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Specification'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['material_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sampleid'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['sampleid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welding Position'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['welding_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heat No'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['heat_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job No'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['job_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plate Thickness'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['plate_thickness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welding Config'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['welding_config']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welding Process'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['welding_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial No'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['serial_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One Name'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['welder_one_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One Icno'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['welder_one_icno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One Tagno'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['welder_one_tagno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One Process'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['welder_one_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Name'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['welder_two_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Icno'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['welder_two_icno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Tagno'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['welder_two_tagno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Process'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['welder_two_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Test Code One'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['test_code_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Test Code Two'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['test_code_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transverse Tensile Test Welding'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['transverse_tensile_test_welding']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hot Tensile Test Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['hot_tensile_test_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transverse Side Bend Test'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['transverse_side_bend_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charpy Impact Test Weld Metal'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['charpy_impact_test_weld_metal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Macro Examination'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['macro_examination']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weld Tensile Test'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['weld_tensile_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hardness Survey'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['hardness_survey']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temp Below Which No Restriction On Heating Rate'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['temp_below_which_no_restriction_on_heating_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Soaking Temp Controlled Heating Rate'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['soaking_temp_controlled_heating_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Soaking Temp'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['soaking_temp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Soaking Time'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['soaking_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temp Below Which Cooling Rate Is Unrestricted'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['temp_below_which_cooling_rate_is_unrestricted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controlled Cooling Rate'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['controlled_cooling_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Declaration Name'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['declaration_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Declaration Designation'); ?></dt>
		<dd>
			<?php echo h($subjectProductionTest['SubjectProductionTest']['declaration_designation']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject Production Test'), array('action' => 'edit', $subjectProductionTest['SubjectProductionTest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subject Production Test'), array('action' => 'delete', $subjectProductionTest['SubjectProductionTest']['id']), array(), __('Are you sure you want to delete # %s?', $subjectProductionTest['SubjectProductionTest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Production Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Production Test'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
