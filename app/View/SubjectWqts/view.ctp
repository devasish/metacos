<div class="subjectWqts view">
<h2><?php echo __('Subject Wqt'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subjectWqt['Job']['id'], array('controller' => 'jobs', 'action' => 'view', $subjectWqt['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subjectWqt['User']['id'], array('controller' => 'users', 'action' => 'view', $subjectWqt['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Specification'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['material_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welding Config'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welding_config']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welding Position'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welding_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welding Process'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welding_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pipe Diameter'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['pipe_diameter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pipe Schedule'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['pipe_schedule']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pipe Thickness'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['pipe_thickness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Electrode Size'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['electrode_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Electrode Brand'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['electrode_brand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sampleid'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['sampleid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plate Thickness'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['plate_thickness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heat No Pipe Plate'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['heat_no_pipe_plate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stud Size'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['stud_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wps No'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['wps_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pqr No'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['pqr_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One Name'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_one_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One Icno'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_one_icno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One  Tagno'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_one__tagno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder One Process'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_one_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Name'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_two_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Icno'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_two_icno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Tagno'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_two_tagno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Two Process'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_two_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Three Name'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_three_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Three Icno'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_three_icno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Three Tagno'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_three_tagno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Welder Three Process'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['welder_three_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Test Code'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['test_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Radiography Gamma Ray'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['radiography_gamma_ray']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Radiography X Ray'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['radiography_x_ray']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dye Penetrant Test'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['dye_penetrant_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Magnetic Particle Inspection'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['magnetic_particle_inspection']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transverse Tensile Test Welding'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['transverse_tensile_test_welding']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transverse Root Bend Test'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['transverse_root_bend_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transverse Side Bend Test'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['transverse_side_bend_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transverse Face Bend Test'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['transverse_face_bend_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fracture Test Fillet Weld'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['fracture_test_fillet_weld']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nick Break Api1104'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['nick_break_api1104']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Macro Examination'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['macro_examination']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Remarks'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['special_remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Declaration Name'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['declaration_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Declaration Designation'); ?></dt>
		<dd>
			<?php echo h($subjectWqt['SubjectWqt']['declaration_designation']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject Wqt'), array('action' => 'edit', $subjectWqt['SubjectWqt']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subject Wqt'), array('action' => 'delete', $subjectWqt['SubjectWqt']['id']), array(), __('Are you sure you want to delete # %s?', $subjectWqt['SubjectWqt']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Wqts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Wqt'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
