<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">
                    CLIENT CONFIRMATION JOB SHEET
                </h4>
            </div>
            <div class="card-body">
<!--                <div class="col-md-4">
                    <table class="table table-bordered">
                        <tr>
                            <td><label class="bmd-label-floating">Control No:</label></td>
                            <td><?php echo $jobDetails['Job']['control_no']; ?></td>
                        </tr>
                        <tr>
                            <td><label class="bmd-label-floating">Ref No:</label></td>
                            <td><?php echo $jobDetails['Job']['ref_no']; ?></td>
                        </tr>
                        <tr>
                            <td><label class="bmd-label-floating">Doc No:</label></td>
                            <td><?php echo $jobDetails['Job']['doc_no']; ?></td>
                        </tr>
                        <tr>
                            <td><label class="bmd-label-floating">Job No:</label></td>
                            <td><?php echo $jobDetails['Job']['job_no']; ?></td>
                        </tr>
                    </table>
                </div>-->
                <h3 style="color: #0000FF; cursor: pointer;" data-toggle="collapse" data-target="#collapseClientSec" aria-expanded="true" aria-controls="collapseClientSec">Section A: Client's Information</h3>
                <div id="collapseClientSec" class="collapse show">
                    <table class="table table-bordered">
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
                            <td><label class="bmd-label-floating">Telephone</label></td>
                            <td>
                                <?php echo $jobDetails['Job']['phone']; ?>
                            </td>
                            <td><label class="bmd-label-floating">Fax</label></td>
                            <td>
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
                    <table class="table table-bordered">
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
                            <td><label class="bmd-label-floating">Telephone</label></td>
                            <td>
                                <?php echo $jobDetails['Job']['report_phone']; ?>
                            </td>
                            <td><label class="bmd-label-floating">Fax</label></td>
                            <td>
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
                    <table class="table table-bordered">
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
                            <td><label class="bmd-label-floating">Telephone</label></td>
                            <td>
                                <?php echo $jobDetails['Job']['invoice_phone']; ?>
                            </td>
                            <td><label class="bmd-label-floating">Fax</label></td>
                            <td>
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
                    <table class="table table-bordered">
                        <tr>
                            <td><label class="bmd-label-floating">Project Ref.</label></td>
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
                    <div class="clearfix"></div>
                    <table class="table table-bordered">
                        <tr>
                            <td><label class="bmd-label-floating">Do you want to take back the tested sample (s)?</label></td>
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
                            <td><label class="bmd-label-floating">Name:</label></td>
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
                    <?php
//                                            echo $this->Form->input('has_subject_material_test');
//                                            echo $this->Form->input('has_subject_production_test');
//                                            echo $this->Form->input('has_subject_wps');
//                                            echo $this->Form->input('has_subject_wqt');
//                                        
                    ?>
                    <div class="clearfix"></div>
                    <h3>Note :-</h3>
                    <p>In view of the non-provision of the information below for the tested sample to METACOS is hereby absolved of all responsibilities arising from the tests results.</p>
                    <p>In the event that such test results are being utilized for certain specific purposes which may be detrimental to METACOS will be indemnified against all legal suits and monetary compensations.</p>
                    <p>Later amendments or additions of the below details will not be entertained.</p>
                </div>
                <?php
                $subjects = ["SubjectMaterialTest", "SubjectProductionTest", "SubjectWp", "SubjectWqt"];
                $subjectControllers = ["subject_material_tests", "subject_production_tests", "subject_wps", "subject_wqts"];
                echo '<h3>';
                foreach ($subjects as $key => $subject) {
                    if (!empty($jobDetails[$subject])) {
                        echo '<span style="border: 1px solid silver; padding: 5px; box-shadow: 1px 1px 7px #9c27b0;">';
                        echo $this->Html->link(__(($subject == 'SubjectWp') ? 'SubjectWps' : $subject), array('controller' => $subjectControllers[$key], 'action' => 'edit', $jobDetails[$subject][0]['id']), array('data-toggle' => 'tooltip', 'title' => 'Description gose here'));
                        echo "</span>&nbsp;&nbsp;";
                    }
                }
                echo '</h3>';
                ?>
                <div>
                </div>
                
                <script>
                    $( document ).ready(function() {
                        $('#collapseClientSec').collapse("hide");
                    });
                    
                </script>                