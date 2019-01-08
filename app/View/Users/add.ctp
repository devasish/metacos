<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <h3 class="card-title">User Registration</h3>
            </div>
            <div class="card-body">
                <?php echo $this->Form->create('User'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-feedback">
                            <label class="bmd-label-floating">Client Name</label>
                          <?php echo $this->Form->input('client', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-feedback">
                            <label class="bmd-label-floating">Email</label>
                          <?php echo $this->Form->input('email', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-feedback">
                            <label class="bmd-label-floating">Phone</label>
                          <?php echo $this->Form->input('phone', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-feedback">
                            <label class="bmd-label-floating">Username</label>
                          <?php echo $this->Form->input('username', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-feedback">
                            <label class="bmd-label-floating">Password</label>
                          <?php echo $this->Form->input('password', array('class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label class="bmd-label-floating">Role</label>
                           <?php echo $this->Form->input('role', array('options' => Configure::read('ROLES'), 'class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label class="bmd-label-floating">Status</label>
                            <?php echo $this->Form->input('status', array('options' => Configure::read('STATUS'), 'class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label class="bmd-label-floating">Client Group</label>
                            <?php echo $this->Form->input('client_group', array('options' => Configure::read('CLIENTGROUP'), 'class' => 'form-control', 'label' => FALSE)); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-round" type="submit">Save</button>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</div>
