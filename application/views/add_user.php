<?php
include('topbar.php');
include('sidebar.php');
?>
<div class="container">
    <div id="adduser">
        <form method="post" action="<?php echo base_url('adduser/newuser')?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                    placeholder="Enter email">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" class="form-control" name="name" id="last_name" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Role</label>
                <input type="text" class="form-control" name="role" id="org" placeholder="Organisation Name">
            </div>
            <div class="form-group">
                <label for="role">Time Stamp</label>
                <input type="text" class="form-control" name="cutime" id="role" placeholder="Position">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class=" form-control btn btn-primary" value="Add User">
            </div>
        </form>
    </div>
</div>




<?php
include('footer.php');
?>