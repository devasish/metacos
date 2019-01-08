<?php
echo $this->Form->create('Job');
echo $this->Form->input('id');
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">
                    CLIENT CONFIRMATION JOB SHEET
                </h4>
            </div>
            <div class="card-body">
                <h3>Section A: Client's Information</h3>
                <table class="table table-bordered">
                    <tr>
                        <td><label class="bmd-label-floating">Client</label></td>
                        <td colspan="3">
                            <?php echo $this->Form->input('client', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="bmd-label-floating">Address</label></td>
                        <td colspan="3">
                            <?php echo $this->Form->input('address', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="bmd-label-floating">Telephone</label></td>
                        <td>
                            <?php echo $this->Form->input('phone', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                        <td><label class="bmd-label-floating">Fax</label></td>
                        <td>
                            <?php echo $this->Form->input('fax', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="bmd-label-floating">Email</label></td>
                        <td>
                            <?php echo $this->Form->input('email', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                        <td><label class="bmd-label-floating">Contact Person</label></td>
                        <td>
                            <?php echo $this->Form->input('contact_person', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                </table>
                <div class="clearfix"></div>
                <h3>Report Sent to:</h3>
                <table class="table table-bordered">
                    <tr>
                        <td><label class="bmd-label-floating">Client</label></td>
                        <td colspan="3">
                            <?php echo $this->Form->input('report_client', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="bmd-label-floating">Address</label></td>
                        <td colspan="3">
                            <?php echo $this->Form->input('report_address', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="bmd-label-floating">Telephone</label></td>
                        <td>
                            <?php echo $this->Form->input('report_phone', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                        <td><label class="bmd-label-floating">Fax</label></td>
                        <td>
                            <?php echo $this->Form->input('report_fax', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="bmd-label-floating">Email</label></td>
                        <td>
                            <?php echo $this->Form->input('report_email', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                        <td><label class="bmd-label-floating">Contact Person</label></td>
                        <td>
                            <?php echo $this->Form->input('report_att_to', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                </table>
                <div class="clearfix"></div>
                <h3>Quotation/Invoice Sent to:</h3>
                <table class="table table-bordered">
                    <tr>
                        <td><label class="bmd-label-floating">Client</label></td>
                        <td colspan="3">
                            <?php echo $this->Form->input('invoice_client', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="bmd-label-floating">Address</label></td>
                        <td colspan="3">
                            <?php echo $this->Form->input('invoice_address', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="bmd-label-floating">Telephone</label></td>
                        <td>
                            <?php echo $this->Form->input('invoice_phone', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                        <td><label class="bmd-label-floating">Fax</label></td>
                        <td>
                            <?php echo $this->Form->input('invoice_fax', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="bmd-label-floating">Email</label></td>
                        <td>
                            <?php echo $this->Form->input('invoice_email', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                        <td><label class="bmd-label-floating">Contact Person</label></td>
                        <td>
                            <?php echo $this->Form->input('invoice_contact_person', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                </table>
                <div class="clearfix"></div>
                <h3>Additional details:</h3>
                <table class="table table-bordered">
                    <tr>
                        <td><label class="bmd-label-floating">Project Ref.</label></td>
                        <td>
                            <?php echo $this->Form->input('project_ref', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="bmd-label-floating">Proposed Testing date (yyyy-mm-dd):</label></td>
                        <td>
                            <?php echo $this->Form->input('proposed_testing_date', array('class' => 'form-control proposed-testing-date', 'type' => 'text', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                </table>
                <div class="clearfix"></div>
                <table class="table table-bordered">
                    <tr>
                        <td><label class="bmd-label-floating">Do you want to take back the tested sample (s)?</label></td>
                        <td colspan="2">
                            <?php echo $this->Form->input('take_back_sample', array('options' => Configure::read('YESNO'), 'class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="bmd-label-floating">Any witnessing party </label></td>
                        <td colspan="2">
                            <?php echo $this->Form->input('any_witnessing_party', array('options' => Configure::read('YESNO'), 'class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2"><label class="bmd-label-floating">If yes, please give the name and organization of the witnessing party</label></td>
                        <td><label class="bmd-label-floating">Name:</label></td>
                        <td><label class="bmd-label-floating">Organization:</label></td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $this->Form->input('witnessing_party_name', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                        <td>
                            <?php echo $this->Form->input('witnessing_party_organization', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </td>
                    </tr>
                </table>
                <div style="display:none">
                <?php
                echo $this->Form->input('has_subject_material_test');
                echo $this->Form->input('has_subject_production_test');
                echo $this->Form->input('has_subject_wps');
                echo $this->Form->input('has_subject_wqt');
                ?>
                </div>
                <?php
                echo $this->Form->input('subject', array('readonly' => true, 'type' => 'hidden'));?>
                <h1> <?php echo $this->Form->label('Subject : ' . Configure::read('JOBSUBJECTS')[$this->Form->value('subject')]);
                ?></h1>
                <div class="clearfix"></div>
                <h3>Note :-</h3>
                <p>In view of the non-provision of the information below for the tested sample to METACOS is hereby absolved of all responsibilities arising from the tests results.</p>
                <p>In the event that such test results are being utilized for certain specific purposes which may be detrimental to METACOS will be indemnified against all legal suits and monetary compensations.</p>
                <p>Later amendments or additions of the below details will not be entertained.</p>
                <input type="submit" name="jobCreate" class="btn btn-primary pull-left" value="submit">
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $(".sample-arrived-date").datepicker();
        $(".ccjs-arrived-date").datepicker();
        $(".proposed-testing-date").datepicker({ dateFormat: 'yy-mm-dd' }).val();
    });
</script>
<!--<div class="jobs form">
<?php echo $this->Form->create('Job'); ?>
        <fieldset>
                <legend><?php echo __('Edit Job'); ?></legend>
<?php
echo $this->Form->input('id');
echo $this->Form->input('barcode');
echo $this->Form->input('user_id');
echo $this->Form->input('client');
echo $this->Form->input('address');
echo $this->Form->input('contact_person');
echo $this->Form->input('phone');
echo $this->Form->input('email');
echo $this->Form->input('fax');
echo $this->Form->input('report_client');
echo $this->Form->input('report_address');
echo $this->Form->input('report_att_to');
echo $this->Form->input('report_phone');
echo $this->Form->input('report_position');
echo $this->Form->input('report_fax');
echo $this->Form->input('report_email');
echo $this->Form->input('report_sample_arrived_date');
echo $this->Form->input('invoice_client');
echo $this->Form->input('invoice_address');
echo $this->Form->input('invoice_contact_person');
echo $this->Form->input('invoice_phone');
echo $this->Form->input('invoice_email');
echo $this->Form->input('invoice_fax');
echo $this->Form->input('has_subject_material_test');
echo $this->Form->input('has_subject_production_test');
echo $this->Form->input('has_subject_wps');
echo $this->Form->input('has_subject_wqt');
echo $this->Form->input('status');
?>
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Job.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Job.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?></li>
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
