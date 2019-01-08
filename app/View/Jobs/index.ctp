<style>
    .pagination li{
  display: inline-block;
}

.pagination li span{
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
}

.pagination span.current {
  background-color: #9c27b0;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination span:hover:not(.current) {background-color: #ddd;}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Job List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <!--<th><?php echo $this->Paginator->sort('control_no'); ?></th>-->
                            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            <th><?php echo $this->Paginator->sort('modified'); ?></th>
                            <th><?php echo $this->Paginator->sort('status'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </thead>
                        <tbody>
                            <?php foreach ($jobs as $job): ?>
                            <tr>
                                <td><?php echo h($job['Job']['id']); ?>&nbsp;</td>
                                <!--<td><?php echo h($job['Job']['control_no']); ?>&nbsp;</td>-->
                                <td>
                                        <?php echo h($job['User']['client']); ?>&nbsp;
                                </td>                              
                                <td><?php echo h($job['Job']['created']); ?>&nbsp;</td>
                                <td><?php echo h($job['Job']['modified']); ?>&nbsp;</td>
                                <td><span class="btn btn-sm btn-round <?php echo $job['Job']['status'] == 1 ? 'btn-success' : 'btn-warning'; ?>" ><?php echo $job['Job']['status'] == 1 ? 'approved' : 'pending'; ?></span></td>
                                <td class="actions">
                                        <?php //echo $this->Html->link(__('View'), array('action' => 'view', $job['Job']['id']), array('class' => 'btn btn-primary btn-sm btn-round')); ?>
                                        <?php echo $this->Html->link('<i class="material-icons">edit</i>', array('action' => 'edit', $job['Job']['id']), array('class' => 'btn btn-primary btn-round btn-fab', 'escape' => FALSE, 'type' => 'button', 'title' => 'Edit Job')); ?>
                                        <?php //echo $this->Form->postLink('<i class="material-icons">close</i>', array('action' => 'delete', $job['Job']['id']), array('class' => 'btn btn-default btn-round btn-fab', 'escape' => FALSE, 'type' => 'button',  'title' => 'Delete Job'), __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?>                                
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
<!--
<div class="jobs index">
	<h2><?php echo __('Jobs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('client'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_person'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('report_client'); ?></th>
			<th><?php echo $this->Paginator->sort('report_address'); ?></th>
			<th><?php echo $this->Paginator->sort('report_att_to'); ?></th>
			<th><?php echo $this->Paginator->sort('report_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('report_position'); ?></th>
			<th><?php echo $this->Paginator->sort('report_fax'); ?></th>
			<th><?php echo $this->Paginator->sort('report_email'); ?></th>
			<th><?php echo $this->Paginator->sort('report_sample_arrived_date'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_client'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_address'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_contact_person'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_email'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_fax'); ?></th>
			<th><?php echo $this->Paginator->sort('has_subject_material_test'); ?></th>
			<th><?php echo $this->Paginator->sort('has_subject_production_test'); ?></th>
			<th><?php echo $this->Paginator->sort('has_subject_wps'); ?></th>
			<th><?php echo $this->Paginator->sort('has_subject_wqt'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jobs as $job): ?>
	<tr>
		<td><?php echo h($job['Job']['id']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['barcode']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($job['User']['id'], array('controller' => 'users', 'action' => 'view', $job['User']['id'])); ?>
		</td>
		<td><?php echo h($job['Job']['client']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['address']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['contact_person']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['phone']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['email']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['fax']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['report_client']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['report_address']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['report_att_to']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['report_phone']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['report_position']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['report_fax']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['report_email']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['report_sample_arrived_date']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['invoice_client']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['invoice_address']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['invoice_contact_person']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['invoice_phone']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['invoice_email']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['invoice_fax']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['has_subject_material_test']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['has_subject_production_test']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['has_subject_wps']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['has_subject_wqt']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['created']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['modified']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $job['Job']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $job['Job']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $job['Job']['id']), array(), __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?></li>
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
</div>-->
