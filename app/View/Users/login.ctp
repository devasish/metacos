<div class="row login-panel">
    <div class="col-md-4">
        <div class="card card-profile login">
            <div class="card-avatar">
          <?php echo $this->Html->image("faces/avatar.png", array("alt" => "user"));?>
            </div>

            <div class="card-body">
                <h6 class="card-category text-gray text-center">Client Login</h6>
                <h4 class="card-title text-center">Please provide email and password</h4>
                <?php echo $this->Form->create('User'); ?>
                <div class="card-description">                    
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
                            <div class="form-group">
                                <label class="bmd-label-floating">Password</label>
                                <?php echo $this->Form->input('password', array('class' => 'form-control', 'label' => FALSE)); ?>
                            </div>
                        </div>
                    </div>
                    <p class="footInfo text-center">
                        Don't have an account? <?php echo $this->Html->link('Register here', array('controller' => 'users', 'action' => 'client_registration'), array('escape' => FALSE)); ?><br>
                        <button type="submit" class="btn btn-primary btn-round">Login</button>
                    </p>

                </div>
            </div>                
        </div>
    </div>
</div>