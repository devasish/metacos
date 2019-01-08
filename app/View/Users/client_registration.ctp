<div class="row login-panel">
    <div class="col-lg-4 col-md-8 col-sm-8">
        <div class="card">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <h3 class="card-title">Client Registration</h3>
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
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary btn-round" type="submit">Save</button>
                        <p class="footInfo">Already have an account? <?php echo $this->Html->link('Login here', array('controller' => 'users', 'action' => 'login'), array('escape' => FALSE)); ?></p>	
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</div>
