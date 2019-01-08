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

<div class="related">
    <h3><?php echo __('Related Subjects'); ?></h3>

    <table cellpadding = "0" cellspacing = "0">
        <tr>
            <th><?php echo __('Id'); ?></th>
            <th><?php echo __('Job Id'); ?></th>
            <th><?php echo __('User Id'); ?></th>
            <th><?php echo __('Material Specification'); ?></th>
            <th><?php echo __('Sample Id'); ?></th>
            <th><?php echo __('Control No'); ?></th>

            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>


        <?php if (!empty($job['SubjectMaterialTest'])): ?>
            <?php foreach ($job['SubjectMaterialTest'] as $subjectMaterialTest): ?>
                <tr>
                    <td><?php echo $subjectMaterialTest['id']; ?></td>
                    <td><?php echo $subjectMaterialTest['job_id']; ?></td>
                    <td><?php echo $subjectMaterialTest['user_id']; ?></td>
                    <td><?php echo $subjectMaterialTest['material_specification']; ?></td>
                    <td><?php echo $subjectMaterialTest['sampleid']; ?></td>
                    <td><?php echo $subjectMaterialTest['control_no']; ?></td>

                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'subject_material_tests', 'action' => 'view', $subjectMaterialTest['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'subject_material_tests', 'action' => 'edit', $subjectMaterialTest['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subject_material_tests', 'action' => 'delete', $subjectMaterialTest['id']), array(), __('Are you sure you want to delete # %s?', $subjectMaterialTest['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>


        <?php if (!empty($job['SubjectProductionTest'])): ?>        
            <?php foreach ($job['SubjectProductionTest'] as $subjectProductionTest): ?>
                <tr>
                    <td><?php echo $subjectProductionTest['id']; ?></td>
                    <td><?php echo $subjectProductionTest['job_id']; ?></td>
                    <td><?php echo $subjectProductionTest['user_id']; ?></td>
                    <td><?php echo $subjectProductionTest['material_specification']; ?></td>
                    <td><?php echo $subjectProductionTest['sampleid']; ?></td>
                    <td><?php echo $subjectProductionTest['control_no']; ?></td>

                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'subject_production_tests', 'action' => 'view', $subjectMaterialTest['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'subject_production_tests', 'action' => 'edit', $subjectMaterialTest['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subject_production_tests', 'action' => 'delete', $subjectProductionTest['id']), array(), __('Are you sure you want to delete # %s?', $subjectProductionTest['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>


        <?php if (!empty($job['SubjectWp'])): ?>           
            <?php foreach ($job['SubjectWp'] as $subjectWp): ?>
                <tr>
                    <td><?php echo $subjectWp['id']; ?></td>
                    <td><?php echo $subjectWp['job_id']; ?></td>
                    <td><?php echo $subjectWp['user_id']; ?></td>
                    <td><?php echo $subjectWp['material_specification']; ?></td>
                    <td><?php echo $subjectWp['sampleid']; ?></td>
                    <td><?php echo $subjectWp['control_no']; ?></td>

                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'subject_wps', 'action' => 'view', $subjectMaterialTest['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'subject_wps', 'action' => 'edit', $subjectMaterialTest['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subject_wps', 'action' => 'delete', $subjectWp['id']), array(), __('Are you sure you want to delete # %s?', $subjectWp['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>



        <?php if (!empty($job['SubjectWqt'])): ?>           
            <?php foreach ($job['SubjectWqt'] as $subjectWqt): ?>
                <tr>
                    <td><?php echo $subjectWqt['id']; ?></td>
                    <td><?php echo $subjectWqt['job_id']; ?></td>
                    <td><?php echo $subjectWqt['user_id']; ?></td>
                    <td><?php echo $subjectWqt['material_specification']; ?></td>
                    <td><?php echo $subjectWqt['sampleid']; ?></td>
                    <td><?php echo $subjectWqt['control_no']; ?></td>

                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'subject_wqts', 'action' => 'view', $subjectMaterialTest['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'subject_wqts', 'action' => 'edit', $subjectMaterialTest['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subject_wqts', 'action' => 'delete', $subjectWqt['id']), array(), __('Are you sure you want to delete # %s?', $subjectWqt['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>


    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Subject Material Test'), array('controller' => 'subject_material_tests', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('New Subject Production Test'), array('controller' => 'subject_production_tests', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('New Subject WP'), array('controller' => 'subject_wps', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('New Subject WQT'), array('controller' => 'subject_wqts', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>

