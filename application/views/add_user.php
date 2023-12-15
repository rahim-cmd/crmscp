<?php
include('topbar.php');
include('sidebar.php');
?>
<div class="container">
    <div id="adduser">
        <form method="post" action="<?php echo base_url('adduser')?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="email" autocomplete="off" aria-describedby="emailHelp"
                    placeholder="Enter email">
                    <span class="text-danger"><?php echo form_error('email');?></span>
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="password" autocomplete="off" placeholder="Password">
                <span class="text-danger"><?php echo form_error('password');?></span>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" class="form-control" name="name" id="last_name" autocomplete="off" placeholder="Last Name">
                <span class="text-danger"><?php echo form_error('name');?></span>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Role</label>
                <input type="text" class="form-control" name="role" id="role" autocomplete="off" placeholder="Role">
                <span class="text-danger"><?php echo form_error('role');?></span>
            </div>
           
            <div class="form-group">
                <button type="submit" name="submit" class=" form-control btn btn-primary">Add User</button>
            </div>
        </form>
    </div>
</div>




<?php
include('footer.php');
?>