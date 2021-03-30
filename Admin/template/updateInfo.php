<?php

    require_once('../app/connection/Connection.php');
    require_once('../app/model/Admin.php');
    require_once('../app/action/Admin/getInfoAdmin.php');
?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update your information</h4>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="login">Login</label>
                                <input type="text" value="<?php echo $admin->getLogin(); ?>" class="form-control" id="login" placeholder="Login">
                            </div>
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" value="<?php echo $admin->getFirst_name(); ?>" class="form-control" id="first_name" placeholder="First name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" value="<?php echo $admin->getLast_name(); ?>" class="form-control" id="last_name" placeholder="Last name">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" value="<?php echo $admin->getAddress(); ?>" class="form-control" id="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" value="<?php echo $admin->getEmail(); ?>" class="form-control" id="email" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>