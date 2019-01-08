<?php 
echo $this->element('subject_tab');
?>
<?php
echo $this->Form->create('SubjectProductionTest');
echo $this->Form->input('id');
echo $this->Form->input('job_id', array('type' => 'hidden'));
echo $this->Form->input('user_id', array('type' => 'hidden'));
?>
<h3>B1: MATERIAL AND INFO REQUIRED FOR THE REPORT (Please fill in the applicable sections)
<a href="javascript:void(0)" onclick="printData('ProductionTest-Print')" class="print print-btn1" rel="ProductionTest-Print"><i class="fa fa-print"></i>&nbsp;Print</a>
</h3>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Material Spec:</label></td>
        <td><?php echo $this->Form->input('material_specification',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Plate Thickness :</label></td>
        <td><?php echo $this->Form->input('plate_thickness',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Sample ID:</label></td>
        <td><?php echo $this->Form->input('sampleid',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Welding Config.:</label></td>
        <td><?php echo $this->Form->input('welding_config',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Welding Position:</label></td>
        <td><?php echo $this->Form->input('welding_position',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Welding Process:</label></td>
        <td><?php echo $this->Form->input('welding_process',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Heat No</label></td>
        <td><?php echo $this->Form->input('heat_no',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Serial No.</label></td>
        <td><?php echo $this->Form->input('serial_no',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Job No:</label></td>
        <td><?php echo $this->Form->input('job_no',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">&nbsp;</label></td>
        <td>&nbsp;</td>
    </tr>
</table>
<div class="clearfix"></div>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Welder's Name:</label></td>
        <td><?php echo $this->Form->input('welder_one_name',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">IC No.:</label></td>
        <td><?php echo $this->Form->input('welder_one_icno',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Tag No.:</label></td>
        <td><?php echo $this->Form->input('welder_one_tagno',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Process:</label></td>
        <td><?php echo $this->Form->input('welder_one_process',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Welder's Name:</label></td>
        <td><?php echo $this->Form->input('welder_two_name',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">IC No.:</label></td>
        <td><?php echo $this->Form->input('welder_two_icno',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Tag No.:</label></td>
        <td><?php echo $this->Form->input('welder_two_tagno',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Process:</label></td>
        <td><?php echo $this->Form->input('welder_two_process',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
</table>
<div class="clearfix"></div>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Test Code BS 1113:1999</label></td>
        <td><?php echo $this->Form->input('test_code_one',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
    <tr>
        <td><label class="bmd-label-floating">Test Code BS 2790 : 1992</label></td>
        <td><?php echo $this->Form->input('test_code_two',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
</table>
<div class="clearfix"></div>
<h3>B2: Test (s) Required</h3>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Description (Destructive Mechanical Tests)</label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
        <td><label class="bmd-label-floating">Description (Destructive Mechanical Tests)</label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Transverse Tensile Test (with welding)</label></td>
        <td><?php echo $this->Form->input('transverse_tensile_test_welding',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Hot Tensile Test (All Weld Metal) at _______C</label></td>
        <td><?php echo $this->Form->input('hot_tensile_test_weld_metal',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">All Weld Tensile Test (ambient temperature)</label></td>
        <td><?php echo $this->Form->input('weld_tensile_test',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Transverse Side Bend Test</label></td>
        <td><?php echo $this->Form->input('transverse_side_bend_test',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Charpy Impact Test (Weld Metal)</label></td>
        <td><?php echo $this->Form->input('charpy_impact_test_weld_metal',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Macro Examination</label></td>
        <td><?php echo $this->Form->input('macro_examination',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Hardness Survey (HVN)</label></td>
        <td><?php echo $this->Form->input('hardness_survey',  array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
</table>
<div class="clearfix"></div>
<h3>B3: Post Weld Heat Treatment PWHT - If applicable (Please specify the PWHT conditions)</h3>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Temperature below which no restriction on heating rate</label></td>
        <td><?php echo $this->Form->input('temp_below_which_no_restriction_on_heating_rate',  array('class' => 'form-control', 'label' => FALSE)); ?> &deg;C</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Between ______________oC to soaking temperature, the controlled heating rate</label></td>
        <td><?php echo $this->Form->input('soaking_temp_controlled_heating_rate',  array('class' => 'form-control', 'label' => FALSE)); ?> &deg;C/hr</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Soaking temperature</label></td>
        <td><?php echo $this->Form->input('soaking_temp',  array('class' => 'form-control', 'label' => FALSE)); ?> &deg;C</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Soaking time</label></td>
        <td><?php echo $this->Form->input('soaking_time',  array('class' => 'form-control', 'label' => FALSE)); ?> hr</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Between soaking temperature to  _________________oC, the controlled cooling rate</label></td>
        <td><?php echo $this->Form->input('controlled_cooling_rate',  array('class' => 'form-control', 'label' => FALSE)); ?> &deg;C/hr</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Temperature below which the cooling rate is unrestricted</label></td>
        <td><?php echo $this->Form->input('temp_below_which_cooling_rate_is_unrestricted',  array('class' => 'form-control', 'label' => FALSE)); ?> &deg;C</td>
    </tr>
</table>
<div class="clearfix"></div>
<p><u>Please fill in separate form if you require any retest of your sample. </u></p>
<p>Our Client should not request us to refer to the previous job or last job because our staff may not know what have been previously tested and this can give rise to confusion and error in reporting. Client should state clearly the retest sample based on Metacos Control Number or Document Number. </p>
<div class="clearfix"></div>
<h3>Section C: Client's Declaration</h3>
<table class="table table-bordered">
    <tr>
        <td>
            <label class="bmd-label-floating">PLEASE CONFIRM the information herein is correct. Please take note that any amendment must come from the QC Manager or General Manager of the Company in writing. Our ISO/IEC 17025 : 2005 requires all original copies of report requiring amendments be returned to us for destruction.</label>
        </td>
    </tr>
</table>
<div class="clearfix"></div>
<p>
    I, <?php echo $this->Form->input('declaration_name',  array('class' => 'form-control', 'label' => FALSE)); ?>, holding the position of <?php echo $this->Form->input('declaration_designation',  array('class' => 'form-control', 'label' => FALSE)); ?> confirm that the above information submitted is correct. I further understand that the above essential variables cannot be changed at will and must be supported by written document.
</p>
<p>
Note: We only issue report to only one company and not that of your subsidiaries. Please indicate the correct company's name, as our computer will not allow us to make any change once it is confirmed to be correct.
</p>
<div class="clearfix"></div>
<table class="table table-bordered">
    <tr>
        <td style="height: 150px;"></td>
        <td></td>
        <td><?php echo $this->Form->input('ccjs_submission_date', array('class' => 'form-control', 'type' => 'text', 'label' => FALSE, 'value' => date("Y-m-d"))); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Signature</label></td>
        <td><label class="bmd-label-floating">Company Stamp</label></td>
        <td><label class="bmd-label-floating">CCJS Submission Date</label></td>
    </tr>
</table>
<div class="clearfix"></div>
<p>
    Please note that if you choose to email to us, kindly inform our office that you have emailed the above job sheet to us to avoid any unnecessary delay.<u> We prefer you to sign and fax this back to us.</u>
</p>
<p>
    <i>This CCJS is the property of METACOS and her associated companies and shall not be abused. It is given to your organization to assist you in your work and to standardize the communication in writing between the two companies. This format is incorporated into our ISO/IEC 17025:2005.</i>
    <small>Note: Preferred Testing Date is subject to discussion. Admin of METACOS must check with workshop and laboratory prior to committing the date of testing.</small>
</p>
<?php echo $this->Form->input('is_agree', array('label' => FALSE, 'id' => 'trms-conds'));?> I agree upon the above data is correct.<br>
<button  class="btn btn-success submit-btn" type="submit" >Submit</button>
</div>
			</div>
		</div>
	</div>
        <!---------------------Print Section------------------------->
        <div id="ProductionTest-Print" class="print-hidden">
            <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td width="10%" style="text-align: center;" rowspan="2"><?php echo $this->Html->image('metacos.jpg', array('alt' => 'logo', 'width' => '100', 'height' => '90')); ?></td>
                    <td colspan="4" style="text-align: center;">
                        <h4>METALLURGICAL CONSULTANCY AND SERVICES SDN. BHD.</h4>
                        <h5>CLIENT CONFIRMATION JOB SHEET</h5>
                    </td>
                </tr>
                <tr>
                    <td width="18%"><label>QUALITY CONTROL</label></td>
                    <td width="27%"><label>Form No. : </label></td>
                    <td width="27%"><label>Rev. No. :  </label></td>
                    <td id="pageNo">Page No: 1 of 2</td>
                </tr>
            </table>
            <br>
            <table cellpaddig="0" cellspacing="0"  class="tabprint" style="width: 50%; margin-right: 0px; margin-left: auto;">
                <tr>
                    <td width="25%"><label>Control NO:</label></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><label>Ref NO:</label></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><label>Doc. NO:</label></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><label>Job NO:</label></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <br>
            <h3>Section A: Client's Information</h3>
            <table cellpaddig="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td><label class="bmd-label-floating">Client</label></td>
                    <td colspan="3">
                                <?php echo $jobDetails['Job']['client']; ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Address</label></td>
                    <td colspan="3">
                                <?php echo $jobDetails['Job']['address']; ?>
                    </td>
                </tr>
                <tr>
                    <td width="25%"><label class="bmd-label-floating">Telephone</label></td>
                    <td width="25%">
                                <?php echo $jobDetails['Job']['phone']; ?>
                    </td>
                    <td width="25%"><label class="bmd-label-floating">Fax</label></td>
                    <td width="25%">
                                <?php echo $jobDetails['Job']['fax']; ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Email</label></td>
                    <td>
                                <?php echo $jobDetails['Job']['fax']; ?>
                    </td>
                    <td><label class="bmd-label-floating">Contact Person</label></td>
                    <td>
                                <?php echo $jobDetails['Job']['contact_person']; ?>
                    </td>
                </tr>
            </table>
            <div class="clearfix"></div>
            <h3>Report Sent to:</h3>
            <table cellpaddig="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td><label class="bmd-label-floating">Client</label></td>
                    <td colspan="3">
                                <?php echo $jobDetails['Job']['report_client']; ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Address</label></td>
                    <td colspan="3">
                                <?php echo $jobDetails['Job']['report_address']; ?>
                    </td>
                </tr>
                <tr>
                    <td width="25%"><label class="bmd-label-floating">Telephone</label></td>
                    <td width="25%">
                                <?php echo $jobDetails['Job']['report_phone']; ?>
                    </td>
                    <td width="25%"><label class="bmd-label-floating">Fax</label></td>
                    <td width="25%">
                                <?php echo $jobDetails['Job']['report_fax']; ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Email</label></td>
                    <td>
                                <?php echo $jobDetails['Job']['report_email']; ?>
                    </td>
                    <td><label class="bmd-label-floating">Contact Person</label></td>
                    <td>
                                <?php echo $jobDetails['Job']['report_att_to']; ?>
                    </td>
                </tr>
            </table>
            <div class="clearfix"></div>
            <h3>Quotation/Invoice Sent to:</h3>
            <table cellpaddig="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td><label class="bmd-label-floating">Client</label></td>
                    <td colspan="3">
                                <?php echo $jobDetails['Job']['invoice_client']; ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Address</label></td>
                    <td colspan="3">
                                <?php echo $jobDetails['Job']['invoice_address']; ?>
                    </td>
                </tr>
                <tr>
                    <td width="25%"><label class="bmd-label-floating">Telephone</label></td>
                    <td width="25%">
                                <?php echo $jobDetails['Job']['invoice_phone']; ?>
                    </td>
                    <td width="25%"><label class="bmd-label-floating">Fax</label></td>
                    <td width="25%">
                                <?php echo $jobDetails['Job']['invoice_fax']; ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Email</label></td>
                    <td>
                                <?php echo $jobDetails['Job']['invoice_email']; ?>
                    </td>
                    <td><label class="bmd-label-floating">Contact Person</label></td>
                    <td>
                                <?php echo $jobDetails['Job']['invoice_contact_person']; ?>
                    </td>
                </tr>
            </table>
            <div class="clearfix"></div>
            <h3>Additional details:</h3>
            <table cellpaddig="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td width="25%"><label class="bmd-label-floating">Project Ref.</label></td>
                    <td>
                                <?php echo $jobDetails['Job']['project_ref']; ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Proposed Testing date:</label></td>
                    <td>
                                <?php echo $jobDetails['Job']['proposed_testing_date']; ?>
                    </td>
                </tr>
            </table>
            <br>
            <div class="clearfix"></div>
            <table cellpaddig="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td width="25%"><label class="bmd-label-floating">Do you want to take back the tested sample (s)?</label></td>
                    <td colspan="2">
                                <?php echo ($jobDetails['Job']['take_back_sample'] == 1) ? 'Yes' : 'No' ; ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Any witnessing party </label></td>
                    <td colspan="2">
                                <?php echo ($jobDetails['Job']['any_witnessing_party'] == 1) ? 'Yes' : 'No' ; ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2"><label class="bmd-label-floating">If yes, please give the name and organization of the witnessing party</label></td>
                    <td width="37%"><label class="bmd-label-floating">Name:</label></td>
                    <td><label class="bmd-label-floating">Organization:</label></td>
                </tr>
                <tr>
                    <td>
                                <?php echo $jobDetails['Job']['witnessing_party_name']; ?>
                    </td>
                    <td>
                                <?php echo $jobDetails['Job']['witnessing_party_organization']; ?>
                    </td>
                </tr>
            </table>
            <div class="clearfix"></div>
            <h3>Note :-</h3>
            <p>In view of the non-provision of the information below for the tested sample to METACOS is hereby absolved of all responsibilities arising from the tests results.</p>
            <p>In the event that such test results are being utilized for certain specific purposes which may be detrimental to METACOS will be indemnified against all legal suits and monetary compensations.</p>
            <p>Later amendments or additions of the below details will not be entertained.</p>
            <h3>B1: MATERIAL AND INFO REQUIRED FOR THE REPORT (Please fill in the applicable sections)</h3>
            <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td width="25%"><label class="bmd-label-floating">Material Spec:</label></td>
                    <td width="25%"><?php echo $this->Form->value('material_specification'); ?></td>
                    <td width="25%"><label class="bmd-label-floating">Plate Thickness :</label></td>
                    <td width="25%"><?php echo $this->Form->value('plate_thickness'); ?></td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Sample ID:</label></td>
                    <td><?php echo $this->Form->value('sampleid'); ?></td>
                    <td><label class="bmd-label-floating">Welding Config.:</label></td>
                    <td><?php echo $this->Form->value('welding_config'); ?></td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Welding Position:</label></td>
                    <td><?php echo $this->Form->value('welding_position'); ?></td>
                    <td><label class="bmd-label-floating">Welding Process:</label></td>
                    <td><?php echo $this->Form->value('welding_process'); ?></td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Heat No</label></td>
                    <td><?php echo $this->Form->value('heat_no'); ?></td>
                    <td><label class="bmd-label-floating">Serial No.</label></td>
                    <td><?php echo $this->Form->value('serial_no'); ?></td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Job No:</label></td>
                    <td><?php echo $this->Form->value('job_no'); ?></td>
                    <td><label class="bmd-label-floating">&nbsp;</label></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <br>
            <div class="clearfix"></div>
            <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td width="12%"><label class="bmd-label-floating">Welder's Name:</label></td>
                    <td width="12%"><?php echo $this->Form->value('welder_one_name'); ?></td>
                    <td width="12%"><label class="bmd-label-floating">IC No.:</label></td>
                    <td width="12%"><?php echo $this->Form->value('welder_one_icno'); ?></td>
                    <td width="12%"><label class="bmd-label-floating">Tag No.:</label></td>
                    <td width="12%"><?php echo $this->Form->value('welder_one_tagno'); ?></td>
                    <td width="12%"><label class="bmd-label-floating">Process:</label></td>
                    <td width="12%"><?php echo $this->Form->value('welder_one_process'); ?></td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Welder's Name:</label></td>
                    <td><?php echo $this->Form->value('welder_two_name'); ?></td>
                    <td><label class="bmd-label-floating">IC No.:</label></td>
                    <td><?php echo $this->Form->value('welder_two_icno'); ?></td>
                    <td><label class="bmd-label-floating">Tag No.:</label></td>
                    <td><?php echo $this->Form->value('welder_two_tagno'); ?></td>
                    <td><label class="bmd-label-floating">Process:</label></td>
                    <td><?php echo $this->Form->value('welder_two_process'); ?></td>
                </tr>
            </table>
            <br>
            <div class="clearfix"></div>
            <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td width="25%"><label class="bmd-label-floating">Test Code BS 1113:1999</label></td>
                    <td><?php echo $this->Form->value('test_code_one'); ?></td>
                <tr>
                    <td><label class="bmd-label-floating">Test Code BS 2790 : 1992</label></td>
                    <td><?php echo $this->Form->value('test_code_two'); ?></td>
                </tr>
            </table>
            <div class="clearfix"></div>
            <div style="page-break-after:always"></div>
            <br><br>
            <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td width="10%" style="text-align: center;" rowspan="2"><?php echo $this->Html->image('metacos.jpg', array('alt' => 'logo', 'width' => '100', 'height' => '90')); ?></td>
                    <td colspan="4" style="text-align: center;">
                        <h4>METALLURGICAL CONSULTANCY AND SERVICES SDN. BHD.</h4>
                        <h5>CLIENT CONFIRMATION JOB SHEET</h5>
                    </td>
                </tr>
                <tr>
                    <td width="18%"><label>QUALITY CONTROL</label></td>
                    <td width="27%"><label>Form No. : </label></td>
                    <td width="27%"><label>Rev. No. :  </label></td>
                    <td id="pageNo">Page No: 2 of 2</td>
                </tr>
            </table>
            <h3>B2: Test (s) Required</h3>
            <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td width="25%"><label class="bmd-label-floating">Description (Destructive Mechanical Tests)</label></td>
                    <td width="25%"><label class="bmd-label-floating">Qty</label></td>
                    <td width="25%"><label class="bmd-label-floating">Description (Destructive Mechanical Tests)</label></td>
                    <td width="25%"><label class="bmd-label-floating">Qty</label></td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Transverse Tensile Test (with welding)</label></td>
                    <td><?php echo $this->Form->value('transverse_tensile_test_welding'); ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Hot Tensile Test (All Weld Metal) at _______C</label></td>
                    <td><?php echo $this->Form->value('hot_tensile_test_weld_metal'); ?></td>
                    <td><label class="bmd-label-floating">All Weld Tensile Test (ambient temperature)</label></td>
                    <td><?php echo $this->Form->value('weld_tensile_test'); ?></td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Transverse Side Bend Test</label></td>
                    <td><?php echo $this->Form->value('transverse_side_bend_test'); ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Charpy Impact Test (Weld Metal)</label></td>
                    <td><?php echo $this->Form->value('charpy_impact_test_weld_metal'); ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Macro Examination</label></td>
                    <td><?php echo $this->Form->value('macro_examination'); ?></td>
                    <td><label class="bmd-label-floating">Hardness Survey (HVN)</label></td>
                    <td><?php echo $this->Form->value('hardness_survey'); ?></td>
                </tr>
            </table>
            <div class="clearfix"></div>
            <h3>B3: Post Weld Heat Treatment PWHT - If applicable (Please specify the PWHT conditions)</h3>
            <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td width="50%"><label class="bmd-label-floating">Temperature below which no restriction on heating rate</label></td>
                    <td><?php echo $this->Form->value('temp_below_which_no_restriction_on_heating_rate'); ?> &deg;C</td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Between ______________ &deg;C to soaking temperature, the controlled heating rate</label></td>
                    <td><?php echo $this->Form->value('soaking_temp_controlled_heating_rate'); ?> &deg;C/hr</td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Soaking temperature</label></td>
                    <td><?php echo $this->Form->value('soaking_temp'); ?> &deg;C</td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Soaking time</label></td>
                    <td><?php echo $this->Form->value('soaking_time'); ?> hr</td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Between soaking temperature to  _________________&deg;C, the controlled cooling rate</label></td>
                    <td><?php echo $this->Form->value('controlled_cooling_rate'); ?> &deg;C/hr</td>
                </tr>
                <tr>
                    <td><label class="bmd-label-floating">Temperature below which the cooling rate is unrestricted</label></td>
                    <td><?php echo $this->Form->value('temp_below_which_cooling_rate_is_unrestricted'); ?> &deg;C</td>
                </tr>
            </table>
            <div class="clearfix"></div>
            <p><u>Please fill in separate form if you require any retest of your sample. </u></p>
            <p>Our Client should not request us to refer to the previous job or last job because our staff may not know what have been previously tested and this can give rise to confusion and error in reporting. Client should state clearly the retest sample based on Metacos Control Number or Document Number. </p>
            <div class="clearfix"></div>
            <h3>Section C: Client's Declaration</h3>
            <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td>
                        <label class="bmd-label-floating">PLEASE CONFIRM the information herein is correct. Please take note that any amendment must come from the QC Manager or General Manager of the Company in writing. Our ISO/IEC 17025 : 2005 requires all original copies of report requiring amendments be returned to us for destruction.</label>
                    </td>
                </tr>
            </table>
            <div class="clearfix"></div>
            <p>
                I, <u><?php echo $this->Form->value('declaration_name'); ?></u>, holding the position of <u><?php echo $this->Form->value('declaration_designation'); ?></u> confirm that the above information submitted is correct. I further understand that the above essential variables cannot be changed at will and must be supported by written document.
            </p>
            <p>
                Note: We only issue report to only one company and not that of your subsidiaries. Please indicate the correct company's name, as our computer will not allow us to make any change once it is confirmed to be correct.
            </p>
            <div class="clearfix"></div>
            <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
                <tr>
                    <td style="height: 150px;"></td>
                    <td></td>
                    <td><?php echo $this->Form->value('ccjs_submission_date', array('class' => 'form-control', 'type' => 'text', 'label' => FALSE, 'value' => date("Y-m-d"))); ?></td>
                </tr>
                <tr>
                    <td width="33%"><label class="bmd-label-floating">Signature</label></td>
                    <td width="33%"><label class="bmd-label-floating">Company Stamp</label></td>
                    <td width="33%"><label class="bmd-label-floating">CCJS Submission Date</label></td>
                </tr>
            </table>
            <div class="clearfix"></div>
            <p>
                Please note that if you choose to email to us, kindly inform our office that you have emailed the above job sheet to us to avoid any unnecessary delay.<u> We prefer you to sign and fax this back to us.</u>
            </p>
            <p>
                <i>This CCJS is the property of METACOS and her associated companies and shall not be abused. It is given to your organization to assist you in your work and to standardize the communication in writing between the two companies. This format is incorporated into our ISO/IEC 17025:2005.</i>
                <small>Note: Preferred Testing Date is subject to discussion. Admin of METACOS must check with workshop and laboratory prior to committing the date of testing.</small>
            </p>
        </div>
        <script type="text/javascript">
            $( function() {
                if($('#trms-conds:checkbox:checked').length > 0){
                    $(".submit-btn").attr("disabled", false);
                }else{
                    $(".submit-btn").attr("disabled", true);
                }
                $("#trms-conds").click(function() {
                    $(".submit-btn").attr("disabled", !this.checked);
                });
            } );
        
        </script>
<!--<div class="subjectProductionTests form">
<?php echo $this->Form->create('SubjectProductionTest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subject Production Test'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('job_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('material_specification');
		echo $this->Form->input('sampleid');
		echo $this->Form->input('welding_position');
		echo $this->Form->input('heat_no');
		echo $this->Form->input('job_no');
		echo $this->Form->input('plate_thickness');
		echo $this->Form->input('welding_config');
		echo $this->Form->input('welding_process');
		echo $this->Form->input('serial_no');
		echo $this->Form->input('welder_one_name');
		echo $this->Form->input('welder_one_icno');
		echo $this->Form->input('welder_one_tagno');
		echo $this->Form->input('welder_one_process');
		echo $this->Form->input('welder_two_name');
		echo $this->Form->input('welder_two_icno');
		echo $this->Form->input('welder_two_tagno');
		echo $this->Form->input('welder_two_process');
		echo $this->Form->input('test_code_one');
		echo $this->Form->input('test_code_two');
		echo $this->Form->input('transverse_tensile_test_welding');
		echo $this->Form->input('hot_tensile_test_weld_metal');
		echo $this->Form->input('transverse_side_bend_test');
		echo $this->Form->input('charpy_impact_test_weld_metal');
		echo $this->Form->input('macro_examination');
		echo $this->Form->input('weld_tensile_test');
		echo $this->Form->input('hardness_survey');
		echo $this->Form->input('temp_below_which_no_restriction_on_heating_rate');
		echo $this->Form->input('soaking_temp_controlled_heating_rate');
		echo $this->Form->input('soaking_temp');
		echo $this->Form->input('soaking_time');
		echo $this->Form->input('temp_below_which_cooling_rate_is_unrestricted');
		echo $this->Form->input('controlled_cooling_rate');
		echo $this->Form->input('declaration_name');
		echo $this->Form->input('declaration_designation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubjectProductionTest.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('SubjectProductionTest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subject Production Tests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
