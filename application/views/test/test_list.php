<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="panel-title">Test List Table</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo base_url(); ?>tests/add" class="btn btn-primary waves-effect waves-light
                        m-b-5 pull-right">
                            Add New Test</a>
                    </div>
                </div>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Test Name</th>
                                    <th>Test Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (!empty($tests)) {
                                    $serial = 1;
                                    foreach ($tests as $test) { ?>
                                        <tr>
                                            <td><?php echo $serial ?></td>
                                            <td><?php echo $test['name']; ?></td>
                                            <td><?php echo $test['price']; ?></td>
                                            
                                            <td>
                                                <!-- <div class="panel panel-default"> -->
                                                    <div class="panel-body cm-panel-body">
                                                        <a href="<?php echo base_url().'tests/update/'.$test['id']; ?>"
                                                           class="btn btn-icon
                                                        waves-effect
                                                        waves-light btn-warning m-b-5"> <i class="fa fa-wrench"></i> </a>
                                                        <a href="<?php echo base_url().'tests/delete/'.$test['id']; ?>" class="btn
                                                        btn-icon
                                                        waves-effect
                                                        waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </a>
                                                    </div>
                                                <!-- </div> -->
                                            </td>
                                        </tr>
                                    <?php }
                                } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End row -->