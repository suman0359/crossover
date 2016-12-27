<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="panel-title">Responsive Table</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo base_url(); ?>user/add" class="btn btn-primary waves-effect waves-light
                        m-b-5 pull-right">
                            Add New User</a>
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
                                    <th>Role</th>
                                    <th>Phone Number </th>
                                    <th>User Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (!empty($users)) {
                                    $serial = 1;
                                    foreach ($users as $user) { ?>
                                        <tr>
                                            <td><?php echo $serial ?></td>
                                            <td><?php echo $user['first_name']; ?></td>
                                            <td><?php echo $user['last_name']; ?></td>
                                            <td><?php echo $user['email']; ?></td>
                                            <td><?php echo $user['user_role']; ?></td>
                                            <td><?php echo $user['phone']; ?></td>
                                            <td><?php echo $user['address']; ?></td>
                                            
                                            <td>
                                                
                                                <div class="panel-body cm-panel-body">
                                                    <a href="<?php echo base_url().'user/update/'.$user['id']; ?>" class="btn btn-icon
                                                        waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-wrench"></i> </a>
                                                    <a href="<?php echo base_url().'user/delete/'.$user['id']; ?>" class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </a>
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