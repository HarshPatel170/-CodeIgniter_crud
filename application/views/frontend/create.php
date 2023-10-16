<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Insert Employee Data
                        <a href="<?php echo base_url('employee ')?>" class="btn btn-primary float-end">BACK</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('employee/store');?>" method = "POST">
                        <div class="form-group mb-3">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" value="<?= set_value('first_name');?>" class="form-control">
                            <small><?php echo form_error('first_name');?></small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" value="<?= set_value('last_name');?>" class="form-control">
                            <small><?php echo form_error('last_name');?></small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <input type="text" name="Phone" value="<?= set_value('Phone');?>" class="form-control">
                            <small><?php echo form_error('Phone');?></small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Email ID</label>
                            <input type="text" name="email" value="<?= set_value('email');?>" class="form-control">
                            <small><?php echo form_error('email');?></small>
                        </div>  

                        <div class="form-group mb-3">
                            <button type="sumbit" class="btn btn-primary"> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>