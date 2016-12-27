<div class="row">
    <div class="col-sm-12">

        <div class="panel panel-default">
            <div class="panel-heading"><h3 style="text-align:center; font-size:18px;" class="panel-title">Test Add
                    Form</h3></div>
            <div class="panel-body">
                <?php echo form_open('', array('class' => 'form-horizontal')); ?>
                <?php $form_error = array('class' => 'error', 'id' => 'cname-error'); ?>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Test Name</label>
                        <div class="col-md-10">
                            <?php
                                if(set_value('name')!='') $name = set_value('name');
                                $form_input         = array(
                                    'name'          => 'name',
                                    'type'          => 'text',
                                    'value'         => $name,
                                    'class'         => 'form-control',
                                    'placeholder'   => 'Test Name'
                                );
                            ?>
                            <?php 
                                echo form_input($form_input); 
                                if(validation_errors()) echo form_label(form_error('name'), '', $form_error);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="example-email">Price</label>
                        <div class="col-md-10">
                            <?php
                                if(set_value('price')!='') $price = set_value('price');
                                $form_input         = array(
                                    'name'          => 'price',
                                    'type'          => 'text',
                                    'value'         => $price,
                                    'class'         => 'form-control',
                                    'placeholder'   => 'Price'
                                );

                                echo form_input($form_input); 
                                if(validation_errors()) echo form_label(form_error('price'), '', $form_error);
                            ?>
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