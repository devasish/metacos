<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Edit User
                      <!--  <span class="pull-right">
                              <a href="#" rel="tooltip" title="Edit Task" class="custom-edit-btn">
                              <i class="material-icons">edit</i>
                      </a>
                      </span>-->
                </h4>
            </div>
            <div class="card-body">
          <?php echo $this->Form->create('User'); ?>
          <?php echo $this->Form->input('id'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Client Name</label>
                  <?php echo $this->Form->input('client', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Address</label>
                  <?php echo $this->Form->input('address', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Contact Person</label>
                  <?php echo $this->Form->input('contact_person', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Phone</label>
                  <?php echo $this->Form->input('phone', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Email</label>
                  <?php echo $this->Form->input('email', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </div>	
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Fax</label>
                  <?php echo $this->Form->input('fax', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </div>	
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Status</label>
                  <?php echo $this->Form->input('status', array('options' => Configure::read('STATUS'), 'class' => 'form-control', 'label' => FALSE)); ?>
                        </div>	
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Role</label>
                  <?php echo $this->Form->input('role', array('options' => Configure::read('ROLES'), 'class' => 'form-control', 'label' => FALSE)); ?>
                        </div>	
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Client Group</label>
                            <?php echo $this->Form->input('client_group', array('options' => Configure::read('CLIENTGROUP'), 'class' => 'form-control', 'label' => FALSE)); ?>
                        </div>	
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Update</button>
                <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
        
</div>