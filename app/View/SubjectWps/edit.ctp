<?php echo $this->element('subject_tab');
?>
<?php
echo $this->Form->create('SubjectWp');
echo $this->Form->input('id');
echo $this->Form->input('job_id', array('type' => 'hidden'));
echo $this->Form->input('user_id', array('type' => 'hidden'));
?>
<h3>B1: MATERIAL AND INFO REQUIRED FOR THE REPORT (Please fill in the applicable sections)
    <a href="javascript:void(0)" onclick="printData('Wps-Print')" class="print print-btn1" rel="Wps-Print"><i class="fa fa-print"></i>&nbsp;Print</a>
</h3>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Material Spec:</label></td>
        <td><?php echo $this->Form->input('material_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Sample ID:</label></td>
        <td><?php echo $this->Form->input('sampleid', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Welding Config.:</label></td>
        <td><?php echo $this->Form->input('welding_config', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Welding Process:</label></td>
        <td><?php echo $this->Form->input('welding_process', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Welding Position:</label></td>
        <td><?php echo $this->Form->input('welding_position', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">&nbsp;</label></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Pipe Diameter</label></td>
        <td><?php echo $this->Form->input('pipe_diameter', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Plate Thickness :</label></td>
        <td><?php echo $this->Form->input('plate_thickness', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Pipe Schedule</label></td>
        <td><?php echo $this->Form->input('pipe_schedule', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Heat No (Pipe/Plate)</label></td>
        <td><?php echo $this->Form->input('heat_no_pipe_plate', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Pipe Thickness</label></td>
        <td><?php echo $this->Form->input('pipe_thickness', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Stud Size</label></td>
        <td><?php echo $this->Form->input('stud_size', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Electrode Size</label></td>
        <td><?php echo $this->Form->input('electrode_size', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">WPS No.</label></td>
        <td><?php echo $this->Form->input('wps_no', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Electrode Brand</label></td>
        <td><?php echo $this->Form->input('electrode_brand', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">PQR No.</label></td>
        <td><?php echo $this->Form->input('pqr_no', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
</table>
<div class="clearfix"></div>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Welder's Name:</label></td>
        <td><?php echo $this->Form->input('welder_one_name', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">IC No.:</label></td>
        <td><?php echo $this->Form->input('welder_one_icno', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Tag No.:</label></td>
        <td><?php echo $this->Form->input('welder_one__tagno', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Process:</label></td>
        <td><?php echo $this->Form->input('welder_one_process', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Welder's Name:</label></td>
        <td><?php echo $this->Form->input('welder_two_name', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">IC No.:</label></td>
        <td><?php echo $this->Form->input('welder_two_icno', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Tag No.:</label></td>
        <td><?php echo $this->Form->input('welder_two_tagno', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Process:</label></td>
        <td><?php echo $this->Form->input('welder_two_process', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
</table>
<div class="clearfix"></div>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Test Code</label></td>
        <td><?php echo $this->Form->input('test_code', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
</table>
<div class="clearfix"></div>
<h3>Note :-</h3>
<p>Please include your clients specification prior to the test in order to avoid later amendments due to incomplete report or test specimen was not tested according to your clients requirements.</p>
<div class="clearfix"></div>
<h3>B2: Non Destructive Test (s) Required</h3>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Description (Non Destructive Tests)</label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
        <td><label class="bmd-label-floating">Description </label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Radiography (gamma Ray) or isotopes</label></td>
        <td><?php echo $this->Form->input('radiography_gamma_ray', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Radiography (X Ray)</label></td>
        <td><?php echo $this->Form->input('radiography_xray', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Dye Penetrant Test</label></td>
        <td><?php echo $this->Form->input('dye_penetrant_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fluorescent Dye Penetrant Test</label></td>
        <td><?php echo $this->Form->input('fluorescent_dye_penetrant_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Magnetic Particle Inspection (MPI)</label></td>
        <td><?php echo $this->Form->input('magnetic_particle_inspection', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Ultrasonic Test</label></td>
        <td><?php echo $this->Form->input('ultrasonic_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
</table>
<div class="clearfix"></div>
<h3>B3: Destructive Mechanical Test (s) Required</h3>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Description (Destructive Mechanical Tests) Tensile</label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
        <td><label class="bmd-label-floating">Description (Destructive Mechanical Tests) Tensile </label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">All Weld Tensile Test (ambient temperature)</label></td>
        <td><?php echo $this->Form->input('all_weld_tensile_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Transverse Tensile Test (with welding)</label></td>
        <td><?php echo $this->Form->input('transverse_tensile_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Hot Tensile Test (All Weld Metal) at _______C</label></td>
        <td><?php echo $this->Form->input('hot_tensile_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
<div class="clearfix"></div>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Description (Destructive Mechanical Tests) Others</label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
        <td><label class="bmd-label-floating">Description (Destructive Mechanical Tests) Others</label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Hardness Survey (HVN), Load = ____Kgf and ______Code</label></td>
        <td><?php echo $this->Form->input('hardness_survey', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Macro Examination</label>t</td>
        <td><?php echo $this->Form->input('macro_examination', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Nick Break Test (For API 1104)</label></td>
        <td><?php echo $this->Form->input('nick_break_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fracture Test</label></td>
        <td><?php echo $this->Form->input('fracture_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label class="bmd-label-floating">Peel Test</label></td>
        <td><?php echo $this->Form->input('peel_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Diffusible Hydrogen in Weld Metal (ISO 3690)</label></td>
        <td><?php echo $this->Form->input('diffusible_hydrogen_weld_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Pull Out Test</label></td>
        <td><?php echo $this->Form->input('pull_out_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
</table>
<div class="clearfix"></div>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Description (Destructive Mechanical Tests) Corrosion</label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
        <td><label class="bmd-label-floating">Description :(Destructive Mechanical Tests) Ferrite Content</label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Corrosion Test-ASTM G28 </label></td>
        <td><?php echo $this->Form->input('corrosion_test_astm_g28', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Ferrite Count- ASTM E562 (Point Counting)</label></td>
        <td><?php echo $this->Form->input('ferrite_count_astm_e562', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Corrosion Test-ASTM G-48</label></td>
        <td><?php echo $this->Form->input('corrosion_test_astm_g48', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Ferrite Count- Using Feritescope (NDT Test)</label></td>
        <td><?php echo $this->Form->input('ferrite_count_feritescope', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Corrosion Test-ASTM Practice A to E (choose one)</label></td>
        <td><?php echo $this->Form->input('corrosion_test_astm_ae', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Ferrite Count- Using Schaeffer Diagram</label></td>
        <td><?php echo $this->Form->input('ferrite_count_schaeffer_diagram', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Salt Spray Test</label></td>
        <td><?php echo $this->Form->input('salt_spray_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Ferrite Count- Using De Long Diagram</label></td>
        <td><?php echo $this->Form->input('ferrite_count_delong_diagram', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Hydrogen Induced Cracking (HIC)<br>(Please mark the rolling direction)</label></td>
        <td><?php echo $this->Form->input('hydrogen_induced_cracking', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Sulphide Stress Cracking (SSC)<br>(Please mark the rolling direction)</label></td>
        <td><?php echo $this->Form->input('sulphide_stress_cracking', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
<div class="clearfix"></div>
<h3>B4: Chemical Analysis (If applicable)</h3>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Description (Non Destructive Tests) Chemical Analysis</label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
        <td><label class="bmd-label-floating">Description (Destructive Tests) Chemical Analysis</label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Positive Material Identification PMI (Spark)</label></td>
        <td><?php echo $this->Form->input('positive_material_identification_spark', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Desktop Chemical analysis (Spark)</label></td>
        <td><?php echo $this->Form->input('desktop_chemical_analysis_spark', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Positive Material Identification PMI (Arc)</label></td>
        <td><?php echo $this->Form->input('positive_material_identification_arc', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Wet Analysis</label></td>
        <td><?php echo $this->Form->input('wet_analysis', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
</table>
<div class="clearfix"></div>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Please specify the type of material</label></td>
        <td><label class="bmd-label-floating">Base Metal</label></td>
        <td><?php echo $this->Form->input('base_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Weld Metal</label></td>
        <td><?php echo $this->Form->input('weld_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
</table>
<div class="clearfix"></div>
<h3>Note :Tick the Analysis Position</h3>
<h3>Please colour or circle the element required and add any element not in the list you require</h3>
<table class="table table-bordered">
    <?php
    $num_elem = 10;
    $elements = explode(",", $this->Form->value('element_required_add'));
    foreach ($checkboxElementsRequired as $key => $value) {
        if ($key % $num_elem == 0) {

            echo "<tr>";
        }
        echo "<td>";

        echo $this->Form->input('element_required_add.' . $key, array('type' => 'checkbox', 'label' => $value, 'checked' => (isset($elements[$key]) ? $elements[$key] : 0)));
        echo "</td>";
        if ($key % $num_elem == $num_elem - 1) {
            echo "</tr>";
        }
    }
    ?>

</table>
<div class="clearfix"></div>
<h3>B5: Charpy Impact Test (if applicable)</h3>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Similar Material and < 38 mm thick with same or different welding process </label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
        <td><label class="bmd-label-floating">Similar Materials > 38 mm thick </label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
        <td><label class="bmd-label-floating">Similar Materials with different welding process  </label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
        <td><label class="bmd-label-floating">Dis-similar Materials </label></td>
        <td><label class="bmd-label-floating">Qty</label></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Temperature</label></td>
        <td><?php echo $this->Form->input('similar_material_lessthan_38_temp', array('class' => 'form-control', 'label' => FALSE)); ?> &degC</td>
        <td><label class="bmd-label-floating">Temperature</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_temp', array('class' => 'form-control', 'label' => FALSE)); ?> &degC</td>
        <td><label class="bmd-label-floating">Temperature</label></td>
        <td><?php echo $this->Form->input('saw_temp', array('class' => 'form-control', 'label' => FALSE)); ?> &degC</td>
        <td><label class="bmd-label-floating">Temperature</label></td>
        <td><?php echo $this->Form->input('dissimilar_materials_temp', array('class' => 'form-control', 'label' => FALSE)); ?> &degC</td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
        <td colspan="2"><label class="bmd-label-floating">Top</label></td>
        <td colspan="2"><label class="bmd-label-floating">SAW/SMAW/GTAW/FCAW</label></td>
        <td colspan="2"><label class="bmd-label-floating">METAL 1</label></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Weld Metal</label></td>
        <td><?php echo $this->Form->input('similar_material_lessthan_38_weld_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Weld Metal</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_top_weld_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Weld Metal</label></td>
        <td><?php echo $this->Form->input('saw_top_weld_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Weld Metal</label></td>
        <td><?php echo $this->Form->input('metal1_weld_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Fusion Line</label></td>
        <td><?php echo $this->Form->input('similar_material_lessthan_38_fusion_line', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line</label></td>
        <td><?php echo $this->Form->input('saw_top_fusion_line', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line</label></td>
        <td><?php echo $this->Form->input('metal1_fusion_line', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
        <td><?php echo $this->Form->input('similar_material_lessthan_38_fusion_line_1mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_1mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
        <td><?php echo $this->Form->input('saw_top_fusion_line_1mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
        <td><?php echo $this->Form->input('metal1_fusion_line_1mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
        <td><?php echo $this->Form->input('similar_material_lessthan_38_fusion_line_2mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_2mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
        <td><?php echo $this->Form->input('saw_top_fusion_line_2mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
        <td><?php echo $this->Form->input('metal1_fusion_line_2mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
        <td><?php echo $this->Form->input('similar_material_lessthan_38_fusion_line_3mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_3mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
        <td><?php echo $this->Form->input('saw_top_fusion_line_3mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
        <td><?php echo $this->Form->input('metal1_fusion_line_3mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
        <td><?php echo $this->Form->input('similar_material_lessthan_38_fusion_line_5mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_5mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
        <td><?php echo $this->Form->input('saw_top_fusion_line_5mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
        <td><?php echo $this->Form->input('metal1_fusion_line_5mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">HAZ</label></td>
        <td><?php echo $this->Form->input('similar_material_lessthan_38_haz', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">HAZ</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_top_haz', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">HAZ</label></td>
        <td><?php echo $this->Form->input('saw_top_fusion_line_haz', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">HAZ</label></td>
        <td><?php echo $this->Form->input('metal1_fusion_line_haz', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Base Metal</label></td>
        <td><?php echo $this->Form->input('similar_material_lessthan_38_base_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Base Metal</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_top_base_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Base Metal</label></td>
        <td><?php echo $this->Form->input('saw_top_fusion_line_base_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Base Metal</label></td>
        <td><?php echo $this->Form->input('metal1_fusion_line_base_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
        <td colspan="2"><label class="bmd-label-floating">Bottom</label></td>
        <td colspan="2"><label class="bmd-label-floating">SAW/SMAW/GTAW/FCAW</label></td>
        <td colspan="2"><label class="bmd-label-floating">METAL 2</label></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label class="bmd-label-floating">Weld Metal</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_bottom_weld_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Weld Metal</label></td>
        <td><?php echo $this->Form->input('saw_bottom_weld_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Weld Metal</label></td>
        <td><?php echo $this->Form->input('metal2_weld_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label class="bmd-label-floating">Fusion Line</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line</label></td>
        <td><?php echo $this->Form->input('saw_bottom_fusion_line', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line</label></td>
        <td><?php echo $this->Form->input('metal2_fusion_line', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_1mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
        <td><?php echo $this->Form->input('saw_bottom_fusion_line_1mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
        <td><?php echo $this->Form->input('metal2_fusion_line_1mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_2mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
        <td><?php echo $this->Form->input('saw_bottom_fusion_line_2mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
        <td><?php echo $this->Form->input('metal2_fusion_line_2mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_3mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
        <td><?php echo $this->Form->input('saw_bottom_fusion_line_3mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
        <td><?php echo $this->Form->input('metal2_fusion_line_3mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_5mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
        <td><?php echo $this->Form->input('saw_bottom_fusion_line_5mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
        <td><?php echo $this->Form->input('metal2_fusion_line_5mm', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label class="bmd-label-floating">HAZ</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_bottom_haz', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">HAZ</label></td>
        <td><?php echo $this->Form->input('saw_bottom_fusion_line_haz', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">HAZ</label></td>
        <td><?php echo $this->Form->input('metal2_fusion_line_haz', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label class="bmd-label-floating">Base Metal</label></td>
        <td><?php echo $this->Form->input('similar_material_greaterthan_38_bottom_base_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Base Metal</label></td>
        <td><?php echo $this->Form->input('saw_bottom_fusion_line_base_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
        <td><label class="bmd-label-floating">Base Metal</label></td>
        <td><?php echo $this->Form->input('metal2_fusion_line_base_metal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
    </tr>
</table>
<div class="clearfix"></div>
<h3>B6: Post Weld Heat Treatment PWHT If applicable (Please specify the PWHT conditions)</h3>
<table class="table table-bordered">
    <tr>
        <td><label class="bmd-label-floating">Temperature below which no restriction on heating rate</label></td>
        <td><?php echo $this->Form->input('temp_below_norestriction_heating_rate', array('class' => 'form-control', 'label' => FALSE)); ?> &deg;C</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Between ______________oC to soaking temperature, the controlled heating rate</label></td>
        <td><?php echo $this->Form->input('soaking_temp_controlled_heating_rate', array('class' => 'form-control', 'label' => FALSE)); ?> &deg;C/hr</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Soaking temperature</label></td>
        <td><?php echo $this->Form->input('soaking_temp', array('class' => 'form-control', 'label' => FALSE)); ?> &deg;C</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Soaking time</label></td>
        <td><?php echo $this->Form->input('soaking_time', array('class' => 'form-control', 'label' => FALSE)); ?> hr</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Between soaking temperature to  _________________oC, the controlled cooling rate</label></td>
        <td><?php echo $this->Form->input('soaking_temp_controlled_cooling_rate', array('class' => 'form-control', 'label' => FALSE)); ?> &deg;C/hr</td>
    </tr>
    <tr>
        <td><label class="bmd-label-floating">Temperature below which the cooling rate is unrestricted</label></td>
        <td><?php echo $this->Form->input('temp_below_cooling_rate_unrestricted', array('class' => 'form-control', 'label' => FALSE)); ?> &deg;C</td>
    </tr>
</table>
<div class="clearfix"></div>
<h3>B7: Other Test (please verify)</h3>
<p>Example : Pull out test.(for tube to tube sheet)</p>
<?php echo $this->Form->input('other_test', array('class' => 'form-control', 'label' => FALSE)); ?>
<div class="clearfix"></div>
<h3>Special Remarks :</h3>
<p>Example- Hardness test load shall be 20 kgf instead of 10 kgf,</p>
<p>Example- The notch of Charpy Impact specimen  is U instead of V  </p>
<?php echo $this->Form->input('special_remarks', array('class' => 'form-control', 'label' => FALSE)); ?>
<div class="clearfix"></div>
<p><u>Please fill in separate form if you require any retest of your sample. </u></p>
<p>Our Client should not request us to refer to the previous job or last job because our staff may not know what have been previously tested and this can give rise to confusion and error in reporting. Client should state clearly the retest sample based on Metacos Control Number or Document Number. </p>
<div class="clearfix"></div>
<h3>Section C: Clients Declaration</h3>
<table class="table table-bordered">
    <tr>
        <td>
            <label class="bmd-label-floating">PLEASE CONFIRM the information herein is correct. Please take note that any amendment must come from the QC Manager or General Manager of the Company in writing. Our ISO/IEC 17025 : 2005 requires all original copies of report requiring amendments be returned to us for destruction.</label>
        </td>
    </tr>
</table>
<div class="clearfix"></div>
<p>
    I, <?php echo $this->Form->input('declaration_name', array('class' => 'form-control', 'label' => FALSE)); ?>, holding the position of <?php echo $this->Form->input('declaration_designation', array('class' => 'form-control', 'label' => FALSE)); ?> confirm that the above information submitted is correct. I further understand that the above essential variables cannot be changed at will and must be supported by written document.
</p>
<p>
    Note: We only issue report to only one company and not that of your subsidiaries. Please indicate the correct companys name, as our computer will not allow us to make any change once it is confirmed to be correct.
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
<!---------------------Print Section------------------------->
<div id="Wps-Print" class="print-hidden">
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
            <td id="pageNo">Page No: 1 of 4</td>
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
<?php echo ($jobDetails['Job']['take_back_sample'] == 1) ? 'Yes' : 'No'; ?>
            </td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Any witnessing party </label></td>
            <td colspan="2">
<?php echo ($jobDetails['Job']['any_witnessing_party'] == 1) ? 'Yes' : 'No'; ?>
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
            <td width="25%"><label class="bmd-label-floating">Sample ID:</label></td>
            <td width="25%"><?php echo $this->Form->value('sampleid'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Welding Config.:</label></td>
            <td><?php echo $this->Form->value('welding_config'); ?></td>
            <td><label class="bmd-label-floating">Welding Process:</label></td>
            <td><?php echo $this->Form->value('welding_process'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Welding Position:</label></td>
            <td><?php echo $this->Form->value('welding_position'); ?></td>
            <td><label class="bmd-label-floating">&nbsp;</label></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Pipe Diameter</label></td>
            <td><?php echo $this->Form->value('pipe_diameter'); ?></td>
            <td><label class="bmd-label-floating">Plate Thickness :</label></td>
            <td><?php echo $this->Form->value('plate_thickness'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Pipe Schedule</label></td>
            <td><?php echo $this->Form->value('pipe_schedule'); ?></td>
            <td><label class="bmd-label-floating">Heat No (Pipe/Plate)</label></td>
            <td><?php echo $this->Form->value('heat_no_pipe_plate'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Pipe Thickness</label></td>
            <td><?php echo $this->Form->value('pipe_thickness'); ?></td>
            <td><label class="bmd-label-floating">Stud Size</label></td>
            <td><?php echo $this->Form->value('stud_size'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Electrode Size</label></td>
            <td><?php echo $this->Form->value('electrode_size'); ?></td>
            <td><label class="bmd-label-floating">WPS No.</label></td>
            <td><?php echo $this->Form->value('wps_no'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Electrode Brand</label></td>
            <td><?php echo $this->Form->value('electrode_brand'); ?></td>
            <td><label class="bmd-label-floating">PQR No.</label></td>
            <td><?php echo $this->Form->value('pqr_no'); ?></td>
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
            <td width="12%"><?php echo $this->Form->value('welder_one__tagno'); ?></td>
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
            <td width="20%"><label class="bmd-label-floating">Test Code</label></td>
            <td><?php echo $this->Form->value('test_code'); ?></td>
        </tr>
    </table>
    <div class="clearfix"></div>
    <h3>Note :-</h3>
    <p>Please include your clients specification prior to the test in order to avoid later amendments due to incomplete report or test specimen was not tested according to your clients requirements.</p>
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
            <td id="pageNo">Page No: 2 of 4</td>
        </tr>
    </table>
    <h3>B2: Non Destructive Test (s) Required</h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
        <tr>
            <td width="25%"><label class="bmd-label-floating">Description (Non Destructive Tests)</label></td>
            <td width="25%"><label class="bmd-label-floating">Qty</label></td>
            <td width="25%"><label class="bmd-label-floating">Description </label></td>
            <td width="25%"><label class="bmd-label-floating">Qty</label></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Radiography (gamma Ray) or isotopes</label></td>
            <td><?php echo $this->Form->value('radiography_gamma_ray'); ?></td>
            <td><label class="bmd-label-floating">Radiography (X Ray)</label></td>
            <td><?php echo $this->Form->value('radiography_xray'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Dye Penetrant Test</label></td>
            <td><?php echo $this->Form->value('dye_penetrant_test'); ?></td>
            <td><label class="bmd-label-floating">Fluorescent Dye Penetrant Test</label></td>
            <td><?php echo $this->Form->value('fluorescent_dye_penetrant_test'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Magnetic Particle Inspection (MPI)</label></td>
            <td><?php echo $this->Form->value('magnetic_particle_inspection'); ?></td>
            <td><label class="bmd-label-floating">Ultrasonic Test</label></td>
            <td><?php echo $this->Form->value('ultrasonic_test'); ?></td>
        </tr>
    </table>
    <div class="clearfix"></div>
    <h3>B3: Destructive Mechanical Test (s) Required</h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
        <tr>
            <td width="25%"><label class="bmd-label-floating">Description (Destructive Mechanical Tests) Tensile</label></td>
            <td width="25%"><label class="bmd-label-floating">Qty</label></td>
            <td width="25%"><label class="bmd-label-floating">Description (Destructive Mechanical Tests) Tensile </label></td>
            <td width="25%"><label class="bmd-label-floating">Qty</label></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">All Weld Tensile Test (ambient temperature)</label></td>
            <td><?php echo $this->Form->value('all_weld_tensile_test'); ?></td>
            <td><label class="bmd-label-floating">Transverse Tensile Test (with welding)</label></td>
            <td><?php echo $this->Form->value('transverse_tensile_test'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Hot Tensile Test (All Weld Metal) at _______C</label></td>
            <td><?php echo $this->Form->value('hot_tensile_test'); ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <br>
    <div class="clearfix"></div>
    <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
        <tr>
            <td width="25%"><label class="bmd-label-floating">Description (Destructive Mechanical Tests) Others</label></td>
            <td width="25%"><label class="bmd-label-floating">Qty</label></td>
            <td width="25%"><label class="bmd-label-floating">Description (Destructive Mechanical Tests) Others</label></td>
            <td width="25%"><label class="bmd-label-floating">Qty</label></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Hardness Survey (HVN), Load = ____Kgf and ______Code</label></td>
            <td><?php echo $this->Form->value('hardness_survey'); ?></td>
            <td><label class="bmd-label-floating">Macro Examination</label>t</td>
            <td><?php echo $this->Form->value('macro_examination'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Nick Break Test (For API 1104)</label></td>
            <td><?php echo $this->Form->value('nick_break_test'); ?></td>
            <td><label class="bmd-label-floating">Fracture Test</label></td>
            <td><?php echo $this->Form->value('fracture_test'); ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label class="bmd-label-floating">Peel Test</label></td>
            <td><?php echo $this->Form->value('peel_test'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Diffusible Hydrogen in Weld Metal (ISO 3690)</label></td>
            <td><?php echo $this->Form->value('diffusible_hydrogen_weld_metal'); ?></td>
            <td><label class="bmd-label-floating">Pull Out Test</label></td>
            <td><?php echo $this->Form->value('pull_out_test'); ?></td>
        </tr>
    </table>
    <br>
    <div class="clearfix"></div>
    <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
        <tr>
            <td width="25%"><label class="bmd-label-floating">Description (Destructive Mechanical Tests) Corrosion</label></td>
            <td width="25%"><label class="bmd-label-floating">Qty</label></td>
            <td width="25%"><label class="bmd-label-floating">Description :(Destructive Mechanical Tests) Ferrite Content</label></td>
            <td width="25%"><label class="bmd-label-floating">Qty</label></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Corrosion Test-ASTM G28 </label></td>
            <td><?php echo $this->Form->value('corrosion_test_astm_g28'); ?></td>
            <td><label class="bmd-label-floating">Ferrite Count- ASTM E562 (Point Counting)</label></td>
            <td><?php echo $this->Form->value('ferrite_count_astm_e562'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Corrosion Test-ASTM G-48</label></td>
            <td><?php echo $this->Form->value('corrosion_test_astm_g48'); ?></td>
            <td><label class="bmd-label-floating">Ferrite Count- Using Feritescope (NDT Test)</label></td>
            <td><?php echo $this->Form->value('ferrite_count_feritescope'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Corrosion Test-ASTM Practice A to E (choose one)</label></td>
            <td><?php echo $this->Form->value('corrosion_test_astm_ae'); ?></td>
            <td><label class="bmd-label-floating">Ferrite Count- Using Schaeffer Diagram</label></td>
            <td><?php echo $this->Form->value('ferrite_count_schaeffer_diagram'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Salt Spray Test</label></td>
            <td><?php echo $this->Form->value('salt_spray_test'); ?></td>
            <td><label class="bmd-label-floating">Ferrite Count- Using De Long Diagram</label></td>
            <td><?php echo $this->Form->value('ferrite_count_delong_diagram'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Hydrogen Induced Cracking (HIC)<br>(Please mark the rolling direction)</label></td>
            <td><?php echo $this->Form->value('hydrogen_induced_cracking'); ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Sulphide Stress Cracking (SSC)<br>(Please mark the rolling direction)</label></td>
            <td><?php echo $this->Form->value('sulphide_stress_cracking'); ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <div class="clearfix"></div>
    <h3>B4: Chemical Analysis (If applicable)</h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
        <tr>
            <td width="25%"><label class="bmd-label-floating">Description (Non Destructive Tests) Chemical Analysis</label></td>
            <td width="25%"><label class="bmd-label-floating">Qty</label></td>
            <td width="25%"><label class="bmd-label-floating">Description (Destructive Tests) Chemical Analysis</label></td>
            <td width="25%"><label class="bmd-label-floating">Qty</label></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Positive Material Identification PMI (Spark)</label></td>
            <td><?php echo $this->Form->value('positive_material_identification_spark'); ?></td>
            <td><label class="bmd-label-floating">Desktop Chemical analysis (Spark)</label></td>
            <td><?php echo $this->Form->value('desktop_chemical_analysis_spark'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Positive Material Identification PMI (Arc)</label></td>
            <td><?php echo $this->Form->value('positive_material_identification_arc'); ?></td>
            <td><label class="bmd-label-floating">Wet Analysis</label></td>
            <td><?php echo $this->Form->value('wet_analysis'); ?></td>
        </tr>
    </table>
    <br>
    <div class="clearfix"></div>
    <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
        <tr>
            <td width="20%"><label class="bmd-label-floating">Please specify the type of material</label></td>
            <td width="20%"><label class="bmd-label-floating">Base Metal</label></td>
            <td width="20%"><?php echo $this->Form->value('base_metal'); ?></td>
            <td width="20%"><label class="bmd-label-floating">Weld Metal</label></td>
            <td width="20%"><?php echo $this->Form->value('weld_metal'); ?></td>
        </tr>
    </table>
    <div class="clearfix"></div>
    <h3>Note :Tick the Analysis Position</h3>
    <h3>Please colour or circle the element required and add any element not in the list you require</h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
<?php
$num_elem = 10;
$elements = explode(",", $this->Form->value('element_required_add'));
foreach ($checkboxElementsRequired as $key => $value) {
    if ($key % $num_elem == 0) {

        echo "<tr>";
    }
    echo "<td>";

    echo $this->Form->input('element_required_add.' . $key, array('type' => 'checkbox', 'label' => $value, 'checked' => (isset($elements[$key]) ? $elements[$key] : 0)));
    echo "</td>";
    if ($key % $num_elem == $num_elem - 1) {
        echo "</tr>";
    }
}
?>

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
            <td id="pageNo">Page No: 3 of 4</td>
        </tr>
    </table>
    <h3>B5: Charpy Impact Test (if applicable)</h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
        <tr>
            <td width="12%"><label class="bmd-label-floating">Similar Material and < 38 mm thick with same or different welding process </label></td>
            <td width="12%"><label class="bmd-label-floating">Qty</label></td>
            <td width="12%"><label class="bmd-label-floating">Similar Materials > 38 mm thick </label></td>
            <td width="12%"><label class="bmd-label-floating">Qty</label></td>
            <td width="12%"><label class="bmd-label-floating">Similar Materials with different welding process  </label></td>
            <td width="12%"><label class="bmd-label-floating">Qty</label></td>
            <td width="12%"><label class="bmd-label-floating">Dis-similar Materials </label></td>
            <td><label class="bmd-label-floating">Qty</label></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Temperature</label></td>
            <td><?php echo $this->Form->value('similar_material_lessthan_38_temp'); ?> &degC</td>
            <td><label class="bmd-label-floating">Temperature</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_temp'); ?> &degC</td>
            <td><label class="bmd-label-floating">Temperature</label></td>
            <td><?php echo $this->Form->value('saw_temp'); ?> &degC</td>
            <td><label class="bmd-label-floating">Temperature</label></td>
            <td><?php echo $this->Form->value('dissimilar_materials_temp'); ?> &degC</td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td colspan="2"><label class="bmd-label-floating">Top</label></td>
            <td colspan="2"><label class="bmd-label-floating">SAW/SMAW/GTAW/FCAW</label></td>
            <td colspan="2"><label class="bmd-label-floating">METAL 1</label></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Weld Metal</label></td>
            <td><?php echo $this->Form->value('similar_material_lessthan_38_weld_metal'); ?></td>
            <td><label class="bmd-label-floating">Weld Metal</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_top_weld_metal'); ?></td>
            <td><label class="bmd-label-floating">Weld Metal</label></td>
            <td><?php echo $this->Form->value('saw_top_weld_metal'); ?></td>
            <td><label class="bmd-label-floating">Weld Metal</label></td>
            <td><?php echo $this->Form->value('metal1_weld_metal'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Fusion Line</label></td>
            <td><?php echo $this->Form->value('similar_material_lessthan_38_fusion_line'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_top_fusion_line'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line</label></td>
            <td><?php echo $this->Form->value('saw_top_fusion_line'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line</label></td>
            <td><?php echo $this->Form->value('metal1_fusion_line'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
            <td><?php echo $this->Form->value('similar_material_lessthan_38_fusion_line_1mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_top_fusion_line_1mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
            <td><?php echo $this->Form->value('saw_top_fusion_line_1mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
            <td><?php echo $this->Form->value('metal1_fusion_line_1mm'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
            <td><?php echo $this->Form->value('similar_material_lessthan_38_fusion_line_2mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_top_fusion_line_2mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
            <td><?php echo $this->Form->value('saw_top_fusion_line_2mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
            <td><?php echo $this->Form->value('metal1_fusion_line_2mm'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
            <td><?php echo $this->Form->value('similar_material_lessthan_38_fusion_line_3mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_top_fusion_line_3mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
            <td><?php echo $this->Form->value('saw_top_fusion_line_3mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
            <td><?php echo $this->Form->value('metal1_fusion_line_3mm'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
            <td><?php echo $this->Form->value('similar_material_lessthan_38_fusion_line_5mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_top_fusion_line_5mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
            <td><?php echo $this->Form->value('saw_top_fusion_line_5mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
            <td><?php echo $this->Form->value('metal1_fusion_line_5mm'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">HAZ</label></td>
            <td><?php echo $this->Form->value('similar_material_lessthan_38_haz'); ?></td>
            <td><label class="bmd-label-floating">HAZ</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_top_haz'); ?></td>
            <td><label class="bmd-label-floating">HAZ</label></td>
            <td><?php echo $this->Form->value('saw_top_fusion_line_haz'); ?></td>
            <td><label class="bmd-label-floating">HAZ</label></td>
            <td><?php echo $this->Form->value('metal1_fusion_line_haz'); ?></td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Base Metal</label></td>
            <td><?php echo $this->Form->value('similar_material_lessthan_38_base_metal'); ?></td>
            <td><label class="bmd-label-floating">Base Metal</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_top_base_metal'); ?></td>
            <td><label class="bmd-label-floating">Base Metal</label></td>
            <td><?php echo $this->Form->value('saw_top_fusion_line_base_metal'); ?></td>
            <td><label class="bmd-label-floating">Base Metal</label></td>
            <td><?php echo $this->Form->value('metal1_fusion_line_base_metal'); ?></td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td colspan="2"><label class="bmd-label-floating">Bottom</label></td>
            <td colspan="2"><label class="bmd-label-floating">SAW/SMAW/GTAW/FCAW</label></td>
            <td colspan="2"><label class="bmd-label-floating">METAL 2</label></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label class="bmd-label-floating">Weld Metal</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_bottom_weld_metal'); ?></td>
            <td><label class="bmd-label-floating">Weld Metal</label></td>
            <td><?php echo $this->Form->value('saw_bottom_weld_metal'); ?></td>
            <td><label class="bmd-label-floating">Weld Metal</label></td>
            <td><?php echo $this->Form->value('metal2_weld_metal'); ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label class="bmd-label-floating">Fusion Line</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_bottom_fusion_line'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line</label></td>
            <td><?php echo $this->Form->value('saw_bottom_fusion_line'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line</label></td>
            <td><?php echo $this->Form->value('metal2_fusion_line'); ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_bottom_fusion_line_1mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
            <td><?php echo $this->Form->value('saw_bottom_fusion_line_1mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line +1mm</label></td>
            <td><?php echo $this->Form->value('metal2_fusion_line_1mm'); ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_bottom_fusion_line_2mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
            <td><?php echo $this->Form->value('saw_bottom_fusion_line_2mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line + 2mm</label></td>
            <td><?php echo $this->Form->value('metal2_fusion_line_2mm'); ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_bottom_fusion_line_3mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
            <td><?php echo $this->Form->value('saw_bottom_fusion_line_3mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line + 3mm</label></td>
            <td><?php echo $this->Form->value('metal2_fusion_line_3mm'); ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_bottom_fusion_line_5mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
            <td><?php echo $this->Form->value('saw_bottom_fusion_line_5mm'); ?></td>
            <td><label class="bmd-label-floating">Fusion Line +5mm</label></td>
            <td><?php echo $this->Form->value('metal2_fusion_line_5mm'); ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label class="bmd-label-floating">HAZ</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_bottom_haz'); ?></td>
            <td><label class="bmd-label-floating">HAZ</label></td>
            <td><?php echo $this->Form->value('saw_bottom_fusion_line_haz'); ?></td>
            <td><label class="bmd-label-floating">HAZ</label></td>
            <td><?php echo $this->Form->value('metal2_fusion_line_haz'); ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label class="bmd-label-floating">Base Metal</label></td>
            <td><?php echo $this->Form->value('similar_material_greaterthan_38_bottom_base_metal'); ?></td>
            <td><label class="bmd-label-floating">Base Metal</label></td>
            <td><?php echo $this->Form->value('saw_bottom_fusion_line_base_metal'); ?></td>
            <td><label class="bmd-label-floating">Base Metal</label></td>
            <td><?php echo $this->Form->value('metal2_fusion_line_base_metal'); ?></td>
        </tr>
    </table>
    <div class="clearfix"></div>
    <h3>B6: Post Weld Heat Treatment PWHT If applicable (Please specify the PWHT conditions)</h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
        <tr>
            <td width="50%"><label class="bmd-label-floating">Temperature below which no restriction on heating rate</label></td>
            <td><?php echo $this->Form->value('temp_below_norestriction_heating_rate'); ?> &deg;C</td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Between ______________oC to soaking temperature, the controlled heating rate</label></td>
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
            <td><label class="bmd-label-floating">Between soaking temperature to  _________________oC, the controlled cooling rate</label></td>
            <td><?php echo $this->Form->value('soaking_temp_controlled_cooling_rate'); ?> &deg;C/hr</td>
        </tr>
        <tr>
            <td><label class="bmd-label-floating">Temperature below which the cooling rate is unrestricted</label></td>
            <td><?php echo $this->Form->value('temp_below_cooling_rate_unrestricted'); ?> &deg;C</td>
        </tr>
    </table>
    <div class="clearfix"></div>
    <h3>B7: Other Test (please verify)</h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
        <tr>
            <td width="40%">
                <label class="bmd-label-floating">Example : Pull out test.(for tube to tube sheet)</label>
            </td>
            <td><?php echo $this->Form->value('other_test'); ?></td>
        </tr>
    </table>
    <div class="clearfix"></div>
    <h3>Special Remarks :</h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered tabprint">
        <tr>
            <td width="40%">
                <p>Example- Hardness test load shall be 20 kgf instead of 10 kgf,</p>
                <p>Example- The notch of Charpy Impact specimen  is U instead of V  </p>
            </td>
            <td><?php echo $this->Form->value('special_remarks'); ?></td>
        </tr>
    </table>
    <div class="clearfix"></div>
    <p><u>Please fill in separate form if you require any retest of your sample. </u></p>
    <p>Our Client should not request us to refer to the previous job or last job because our staff may not know what have been previously tested and this can give rise to confusion and error in reporting. Client should state clearly the retest sample based on Metacos Control Number or Document Number. </p>
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
            <td id="pageNo">Page No: 4 of 4</td>
        </tr>
    </table>
    <h3>Section C: Clients Declaration</h3>
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
        Note: We only issue report to only one company and not that of your subsidiaries. Please indicate the correct companys name, as our computer will not allow us to make any change once it is confirmed to be correct.
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
<!--<div class="subjectWps form">
<?php echo $this->Form->create('SubjectWp'); ?>
        <fieldset>
                <legend><?php echo __('Edit Subject Wp'); ?></legend>
<?php
echo $this->Form->input('id');
echo $this->Form->input('job_id');
echo $this->Form->input('user_id');
echo $this->Form->input('material_specification');
echo $this->Form->input('sampleid');
echo $this->Form->input('welding_position');
echo $this->Form->input('welding_process');
echo $this->Form->input('welding_config');
echo $this->Form->input('pipe_diameter');
echo $this->Form->input('plate_thickness');
echo $this->Form->input('pipe_schedule');
echo $this->Form->input('heat_no_pipe_plate');
echo $this->Form->input('pipe_thickness');
echo $this->Form->input('stud_size');
echo $this->Form->input('electrode_size');
echo $this->Form->input('wps_no');
echo $this->Form->input('electrode_brand');
echo $this->Form->input('pqr_no');
echo $this->Form->input('welder_one_name');
echo $this->Form->input('welder_one_icno');
echo $this->Form->input('welder_one__tagno');
echo $this->Form->input('welder_one_process');
echo $this->Form->input('welder_two_name');
echo $this->Form->input('welder_two_icno');
echo $this->Form->input('welder_two_tagno');
echo $this->Form->input('welder_two_process');
echo $this->Form->input('test_code');
echo $this->Form->input('radiography_gamma_ray');
echo $this->Form->input('radiography_xray');
echo $this->Form->input('dye_penetrant_test');
echo $this->Form->input('fluorescent_dye_penetrant_test');
echo $this->Form->input('magnetic_particle_inspection');
echo $this->Form->input('ultrasonic_test');
echo $this->Form->input('all_weld_tensile_test');
echo $this->Form->input('transverse_tensile_test');
echo $this->Form->input('hot_tensile_test');
echo $this->Form->input('hardness_survey');
echo $this->Form->input('macro_examination');
echo $this->Form->input('nick_break_test');
echo $this->Form->input('fracture_test');
echo $this->Form->input('peel_test');
echo $this->Form->input('diffusible_hydrogen_weld_metal');
echo $this->Form->input('pull_out_test');
echo $this->Form->input('corrosion_test_astm_g28');
echo $this->Form->input('corrosion_test_astm_g48');
echo $this->Form->input('corrosion_test_astm_ae');
echo $this->Form->input('ferrite_count_astm_e562');
echo $this->Form->input('ferrite_count_feritescope');
echo $this->Form->input('ferrite_count_schaeffer_diagram');
echo $this->Form->input('ferrite_count_delong_diagram');
echo $this->Form->input('salt_spray_test');
echo $this->Form->input('hydrogen_induced_cracking');
echo $this->Form->input('sulphide_stress_cracking');
echo $this->Form->input('positive_material_identification_spark');
echo $this->Form->input('positive_material_identification_arc');
echo $this->Form->input('desktop_chemical_analysis_spark');
echo $this->Form->input('wet_analysis');
echo $this->Form->input('base_metal');
echo $this->Form->input('weld_metal');
echo $this->Form->input('element_required_add');
echo $this->Form->input('similar_material_lessthan_38_temp');
echo $this->Form->input('similar_material_lessthan_38_weld_metal');
echo $this->Form->input('similar_material_lessthan_38_fusion_line');
echo $this->Form->input('similar_material_lessthan_38_fusion_line_1mm');
echo $this->Form->input('similar_material_lessthan_38_fusion_line_2mm');
echo $this->Form->input('similar_material_lessthan_38_fusion_line_3mm');
echo $this->Form->input('similar_material_lessthan_38_fusion_line_5mm');
echo $this->Form->input('similar_material_lessthan_38_haz');
echo $this->Form->input('similar_material_lessthan_38_base_metal');
echo $this->Form->input('similar_material_greaterthan_38_temp');
echo $this->Form->input('similar_material_greaterthan_38_top_weld_metal');
echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line');
echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_1mm');
echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_2mm');
echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_3mm');
echo $this->Form->input('similar_material_greaterthan_38_top_fusion_line_5mm');
echo $this->Form->input('similar_material_greaterthan_38_top_haz');
echo $this->Form->input('similar_material_greaterthan_38_top_base_metal');
echo $this->Form->input('similar_material_greaterthan_38_bottom_weld_metal');
echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line');
echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_1mm');
echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_2mm');
echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_3mm');
echo $this->Form->input('similar_material_greaterthan_38_bottom_fusion_line_5mm');
echo $this->Form->input('similar_material_greaterthan_38_bottom_haz');
echo $this->Form->input('similar_material_greaterthan_38_bottom_base_metal');
echo $this->Form->input('saw_temp');
echo $this->Form->input('saw_top_weld_metal');
echo $this->Form->input('saw_top_fusion_line');
echo $this->Form->input('saw_top_fusion_line_1mm');
echo $this->Form->input('saw_top_fusion_line_2mm');
echo $this->Form->input('saw_top_fusion_line_3mm');
echo $this->Form->input('saw_top_fusion_line_5mm');
echo $this->Form->input('saw_top_fusion_line_haz');
echo $this->Form->input('saw_top_fusion_line_base_metal');
echo $this->Form->input('saw_bottom_weld_metal');
echo $this->Form->input('saw_bottom_fusion_line');
echo $this->Form->input('saw_bottom_fusion_line_1mm');
echo $this->Form->input('saw_bottom_fusion_line_2mm');
echo $this->Form->input('saw_bottom_fusion_line_3mm');
echo $this->Form->input('saw_bottom_fusion_line_5mm');
echo $this->Form->input('saw_bottom_fusion_line_haz');
echo $this->Form->input('saw_bottom_fusion_line_base_metal');
echo $this->Form->input('dissimilar_materials_temp');
echo $this->Form->input('metal1_weld_metal');
echo $this->Form->input('metal1_fusion_line');
echo $this->Form->input('metal1_fusion_line_1mm');
echo $this->Form->input('metal1_fusion_line_2mm');
echo $this->Form->input('metal1_fusion_line_3mm');
echo $this->Form->input('metal1_fusion_line_5mm');
echo $this->Form->input('metal1_fusion_line_haz');
echo $this->Form->input('metal1_fusion_line_base_metal');
echo $this->Form->input('metal2_weld_metal');
echo $this->Form->input('metal2_fusion_line');
echo $this->Form->input('metal2_fusion_line_1mm');
echo $this->Form->input('metal2_fusion_line_2mm');
echo $this->Form->input('metal2_fusion_line_3mm');
echo $this->Form->input('metal2_fusion_line_5mm');
echo $this->Form->input('metal2_fusion_line_haz');
echo $this->Form->input('metal2_fusion_line_base_metal');
echo $this->Form->input('temp_below_norestriction_heating_rate');
echo $this->Form->input('soaking_temp_controlled_heating_rate');
echo $this->Form->input('soaking_temp');
echo $this->Form->input('soaking_time');
echo $this->Form->input('soaking_temp_controlled_cooling_rate');
echo $this->Form->input('temp_below_cooling_rate_unrestricted');
echo $this->Form->input('other_test');
echo $this->Form->input('special_remarks');
echo $this->Form->input('declaration_name');
echo $this->Form->input('declaration_designation');
?>
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubjectWp.id')), array('class' => 'form-control', 'label' => FALSE), __('Are you sure you want to delete # %s?', $this->Form->value('SubjectWp.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Subject Wps'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        </ul>
</div>-->
