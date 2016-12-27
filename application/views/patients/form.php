<div class="row">
    <div class="col-sm-12">

        <div class="panel panel-default">
            <div class="panel-heading"><h3 style="text-align:center; font-size:18px;" class="panel-title">User Add
                    Form</h3></div>
            <div class="panel-body">
                <?php echo form_open('', array('class' => 'form-horizontal')); ?>

                    <div class="form-group">
                        <label class="col-md-2 control-label">First Name</label>
                        <div class="col-md-10">
                            <?php
                                $form_input         = array(
                                    'name'          => 'first_name',
                                    'type'          => 'text',
                                    'value'         => $first_name,
                                    'class'         => 'form-control',
                                    'placeholder'   => 'First Name'
                                );
                            ?>
                           <?php echo form_input($form_input);?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="example-email">Last Name</label>
                        <div class="col-md-10">
                            <?php
                            $form_input         = array(
                                'name'          => 'last_name',
                                'type'          => 'text',
                                'value'         => $last_name,
                                'class'         => 'form-control',
                                'placeholder'   => 'Last Name'
                            );
                            ?>
                            <?php echo form_input($form_input);?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="example-email">Username</label>
                        <div class="col-md-10">
                            <?php
                            $form_input         = array(
                                'name'          => 'username',
                                'type'          => 'text',
                                'value'         => $username,
                                'class'         => 'form-control',
                                'placeholder'   => 'Username'
                            );
                            ?>
                            <?php echo form_input($form_input);?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="example-email">Email</label>
                        <div class="col-md-10">
                            <?php
                            $form_input         = array(
                                'name'          => 'email',
                                'type'          => 'email',
                                'value'         => $email,
                                'class'         => 'form-control',
                                'placeholder'   => 'Email'
                            );
                            ?>
                            <?php echo form_input($form_input);?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Password</label>
                        <div class="col-md-10">
                            <?php
                            $form_input         = array(
                                'name'          => 'password',
                                'type'          => 'password',
                                'value'         => $password,
                                'class'         => 'form-control',
                                'placeholder'   => 'Password'
                            );
                            ?>
                            <?php echo form_input($form_input);?>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Phone Number</label>
                        <div class="col-md-10">
                            <?php
                            $form_input         = array(
                                'name'          => 'phone',
                                'type'          => 'text',
                                'value'         => $phone,
                                'class'         => 'form-control',
                                'placeholder'   => 'phone'
                            );
                            ?>
                            <?php echo form_input($form_input);?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Phone Number</label>
                        <div class="col-md-10">
                            <?php
                            $form_input         = array(
                                'name'          => 'age',
                                'type'          => 'text',
                                'value'         => $age,
                                'class'         => 'form-control',
                                'placeholder'   => 'age'
                            );
                            ?>
                            <?php echo form_input($form_input);?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Phone Number</label>
                        <div class="col-md-10">
                            <?php
                            $form_input         = array(
                                'name'          => 'weight',
                                'type'          => 'text',
                                'value'         => $weight,
                                'class'         => 'form-control',
                                'placeholder'   => 'weight'
                            );
                            ?>
                            <?php echo form_input($form_input);?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Your Address</label>
                        <div class="col-md-10">
                            <?php
                            $form_input         = array(
                                'name'          => 'address',
                                'value'         => $address,
                                'class'         => 'form-control',
                                'rows'          => 2,
                                'placeholder'   => 'Your Address'
                            );
                            ?>
                            <?php echo form_textarea($form_input);?>
                        </div>
                    </div>

                <?php
                $form_input         = array(
                    'name'          => 'submit',
                    'type'          => 'submit',
                    'value'         => $button,
                    'class'         => 'btn btn-primary pull-right',
                );
                ?>
                <?php echo form_submit($form_input);?>


                <?php echo form_close(); ?>
               
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col -->
</div> <!-- End row -->