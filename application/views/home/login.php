<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Pathology Lab | Login</title>

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css">

        
    </head>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Sign In to <strong>Lab</strong> </h3>
                </div> 


                <div class="panel-body">
                
                <?php echo form_open('auth/login', array('class' => 'form-horizontal m-t-20')); ?>
                    
                    <div class="form-group">
                        <div class="col-xs-12">
                        <?php 
                        $input_form = array(
                                'name'          => 'username',
                                'type'          => 'text',
                                'required'      => '',
                                'placeholder'   => 'Username',
                                'class'         => 'form-control input-lg'
                            );

                        echo form_input($input_form);
                        ?>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <?php 
                                $input_form = array(
                                        'name'          => 'password',
                                        'type'          => 'password',
                                        'required'      => '',
                                        'placeholder'   => 'Password',
                                        'class'         => 'form-control input-lg'
                                    );

                                echo form_input($input_form);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    Remember me
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a href=""><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="">Create an account</a>
                        </div>
                    </div>
                <?php echo form_close(); ?>
                </div>                                 
                
            </div>
        </div>

       
    </body>
</html>