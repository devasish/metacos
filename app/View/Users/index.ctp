<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">User List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('client'); ?></th>
                            <th><?php echo $this->Paginator->sort('role'); ?></th>
                            <th><?php echo $this->Paginator->sort('Group'); ?></th>
                            <th><?php echo $this->Paginator->sort('phone'); ?></th>
                            <th><?php echo $this->Paginator->sort('email'); ?></th>
                            <th><?php echo $this->Paginator->sort('fax'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            <th><?php echo $this->Paginator->sort('status'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                            <?php
                                $conf_roles = Configure::read('ROLES');
                                $role = $conf_roles[$user['User']['role']];
                                
                                $conf_cgroup = Configure::read('CLIENTGROUP');
                                $client_group = $conf_cgroup[$user['User']['client_group']];
                            ?>
                            <tr>
                                <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['client']); ?>&nbsp;</td>
                                <td><?php echo $role; ?>&nbsp;</td>
                                <td><?php echo $client_group; ?>&nbsp;</td>
                                <td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['fax']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                                <td><span class="btn btn-sm btn-round <?php echo $user['User']['status'] == 1 ? 'btn-success' : 'btn-warning'; ?>" ><?php echo $user['User']['status'] == 1 ? 'approved' : 'pending'; ?></span></td>
                                <td class="actions">
                                        <?php //echo $this->Html->link(__('View'), array('action' => 'view', $job['Job']['id']), array('class' => 'btn btn-primary btn-sm btn-round')); ?>
                                        <?php echo $this->Html->link('<i class="material-icons">edit</i>', array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-primary btn-round btn-fab', 'escape' => FALSE, 'type' => 'button', 'title' => 'Edit User')); ?>
                                        <?php //echo $this->Form->postLink('<i class="material-icons">close</i>', array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-default btn-round btn-fab', 'escape' => FALSE, 'type' => 'button',  'title' => 'Delete Job'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>                                
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
                    <ul class="pagination">
                        <li><?php echo $this->Paginator->prev('<i class="fa fa-angle-double-left"></i>' . '&nbsp;' . __('previous'), array('escape' => FALSE), null, array('class' => 'prev disabled')); ?></li>
                        <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>                    
                        <li><?php echo $this->Paginator->next(__('next') . '&nbsp;' . ' <i class="fa fa-angle-double-right"></i>', array('escape' => FALSE), null, array('class' => 'next disabled')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>    

<!--<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('client'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_person'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['client']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['address']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_person']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['fax']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
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
</div>-->
