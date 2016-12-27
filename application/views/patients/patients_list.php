<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="panel-title">Responsive Table</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo base_url(); ?>patients/add" class="btn btn-primary waves-effect waves-light
                        m-b-5 pull-right">
                            Add New Patients</a>
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email Address</th>
                                    <th>Age</th>
                                    <th>Phone Number </th>
                                    <th>Patients Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (!empty($patients)) {
                                    $serial = 1;
                                    foreach ($patients as $patient) { ?>
                                        <tr>
                                            <td><?php echo $serial ?></td>
                                            <td><?php echo $patient['first_name']; ?></td>
                                            <td><?php echo $patient['last_name']; ?></td>
                                            <td><?php echo $patient['email']; ?></td>
                                            <td><?php echo $patient['age']; ?></td>
                                            <td><?php echo $patient['phone']; ?></td>
                                            <td><?php echo $patient['address']; ?></td>
                                            
                                            <td>
                                                <div class="panel panel-default">
                                                    <div class="panel-body cm-panel-body">
                                                        <a href="<?php echo base_url().'patients/update/'.$patient['id']; ?>"
                                                           class="btn btn-icon
                                                        waves-effect
                                                        waves-light btn-warning m-b-5"> <i class="fa fa-wrench"></i> </a>
                                                        <a href="<?php echo base_url().'patients/delete/'.$patient['id']; ?>" class="btn
                                                        btn-icon
                                                        waves-effect
                                                        waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </a>
                                                    </div>
                                                </div>
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